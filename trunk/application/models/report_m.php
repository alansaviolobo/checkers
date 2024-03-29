<?php
class Report_m extends Model
{
    function _construct()
    {
        parent::Model();
    }

    function sales($from, $to)
    {
        $result  = $this->db->select("DATE_FORMAT(dated, '%d/%m/%Y'), number, food, beverages, ".
        								"bar, total, paid", false)
							->from('bill')
							->where_in('paid', array('room sales', 'cash', 'credit card'))
							->where("dated BETWEEN DATE('$from') AND DATE('$to')")
							->get()->result_array();
        $header =  "Bills, Report, $from, to, $to";
        $columns = 'DATE,BILL NO.,FOOD,BEVERAGES,BAR,TOTAL,MODE';
        return $this->post_processing($result, $header, $columns);
    }

    function purchases($from, $to)
    {
        $result  = $this->db->select("DATE_FORMAT(dated, '%d/%m/%Y'),menu, carry, quantity, ".
        							 "carry+quantity AS subtotal, carry+quantity-total AS sold, ".
        							 "total AS closing, cost*(carry+quantity-total) AS total", false)
							->from('menu')
							->join('ticket', 'menu.name = ticket.menu')
							->where('menu.section', 'Bar')
							->where("dated BETWEEN DATE('$from') AND DATE('$to')")
							->get()->result_array();
		$header = "Purchase, Report, $from, to, $to";
		$columns = 'DATE,ITEM NAME,OPEN.BAL,PURCHASE,TOTAL QNTY,SOLD,CLOSE.BAL,TOTAL AMOUNT';
    	return $this->post_processing($result, $header, $columns);
    }
    
    private function post_processing($result, $header, $columns)
    {
        $report = array($header, '', $columns, '');
        $cost = 0;
        foreach ($result as $row)
        {
            $cost += $row['total'];
            array_push($report, implode(',', $row));
        }
        array_push($report, "\nTotal, Amount, Rs. $cost");
        return $report;
    }
}
?>