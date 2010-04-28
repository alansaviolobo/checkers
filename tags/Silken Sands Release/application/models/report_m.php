<?php
class Report_m extends Model {
	function sales($from, $to, $taxvalue) {
		$result = $this->db->select ( "DATE_FORMAT(dated, '%d/%m/%Y'), CONCAT(disp_no_cat,disp_no_num) AS number, food, beverages, bar, total, paid", false )->from ( 'bill' )->where_in ( 'paid', array ('room sales', 'cash', 'credit card' ) )->where ( "dated BETWEEN DATE('$from') AND DATE('$to')" )->get ()->result_array ();
		$running_tax = 0;
		foreach($result as &$row)
			list($row['tax'], $running_tax) = array($running_tax+$row['total']*$taxvalue/100, $running_tax+$row['total']*$taxvalue/100);
		$header = "Bills, Report, $from, to, $to";
		$columns = 'DATE,BILL NO.,FOOD,BEVERAGES,BAR,TOTAL,MODE,RUNNING TAX';
		return $this->post_processing ( $result, $header, $columns );
	}

	function purchases($from, $to) {
		$result = $this->db->select ( "DATE_FORMAT(dated, '%d/%m/%Y'),menu, carry, quantity, carry+quantity AS subtotal, carry+quantity-total AS sold, total AS closing, cost*(carry+quantity-total) AS total", false )->from ( 'menu' )->join ( 'ticket', 'menu.name = ticket.menu' )->where ( 'menu.section', 'Bar' )->where ( "dated BETWEEN DATE('$from') AND DATE('$to')" )->get ()->result_array ();
		$header = "Purchase, Report, $from, to, $to";
		$columns = 'DATE,ITEM NAME,OPEN.BAL,PURCHASE,TOTAL QNTY,SOLD,CLOSE.BAL,TOTAL AMOUNT';
		return $this->post_processing ( $result, $header, $columns );
	}

	function fastMoving($from, $to) {
		$result = $this->db->select ( "menu, SUM(quantity), SUM(cost*quantity) AS total", false )->from ( 'bill' )->join ( 'orders', 'number = bill_number' )->where_in ( 'paid', array ('room sales', 'cash', 'credit card' ) )->where ( "dated BETWEEN DATE('$from') AND DATE('$to')" )->group_by ( 'menu' )->get ()->result_array ();
		$header = "Fast, Moving, Items, $from, to, $to";
		$columns = "ITEM, COUNT, TOTAL";
		return $this->post_processing ( $result, $header, $columns );
	}

	function get_bills($from, $to, $bill_cat) {
		return $this->db->select ( "*" )->from ( 'bill' )->where ( "dated BETWEEN DATE('$from') AND DATE('$to')" )->where ( 'disp_no_cat', $bill_cat )->get ()->result_array ();
	}

	private function post_processing($result, $header, $columns) {
		$report = array ($header, '', $columns, '' );
		$cost = 0;
		foreach ( $result as $row ) {
			$cost += $row ['total'];
			array_push ( $report, implode ( ',', $row ) );
		}
		array_push ( $report, "\nTotal, Amount, Rs. $cost" );
		return $report;
	}
}
?>