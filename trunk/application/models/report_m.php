<?php
class Report_m extends Model
{
    function _construct()
    {
        parent::Model();
    }

    function report_daily()
    {
        return $this->report(date('Y-m-d'), date('Y-m-d'), 'Daily');
    }

    function sales($from,$to)
    {
        return $this->report($from, $to, 'Sales');
    }

    function bills($from, $to)
    {
        $query_bill = $this->db->get('bill')->result_array();
        $result = array ();
        $cost = 0;
        array_push($result, 'MAHATTAN - Bar and Restaurant');
        if ($from == $to)
        {
            $check = 'Bills Report - '.$from;
        }
        else
        {
            $check = 'Bills Report - ('.$from.' to '.$to.')';
        }
        array_push($result, $check);
        array_push($result, '');
        array_push($result, 'DATE,BILL NO.,FOOD,BEVERAGES,BAR,TOTAL');
        array_push($result, '');
        foreach ($query_bill as $b)
        { // YMD
            $d = explode("-", $b['dated']);
            $date = $d[2].'-'.$d[1].'-'.$d[0];
            $temp = ','.$date.','.$b['number'].','.$b['food'].','.$b['beverages'].','.$b['bar'].','.$b['total'];
			$cost = $cost + intval($b['total']);	
            array_push($result, $temp);
        }
        array_push($result, '');
        array_push($result, 'Total Amount = Rs.'.$cost);
        return $result;
    }

    function report($from, $to, $type)
    {
        $query_ticket = $this->db->get_where('ticket', array ('dated >= '=>$from, 'dated <= '=>$to))->result_array();
        $query_menu = $this->db->get('menu')->result_array();
        $result = array ();
        $cost = 0;
        array_push($result, 'MAHATTAN - Bar and Restaurant');
        if ($to == $from)
        {
            $check = $type.' Report - '.$from;
        }
        else
        {
            $check = $type.' Report - ('.$from.' to '.$to.')';
        }
        array_push($result, $check);
        array_push($result, '');
        array_push($result, 'DATE,ITEM NAME,OPEN.BAL,PURCHASE,TOTAL QNTY,SOLD,CLOSE.BAL,TOTAL AMOUNT');
        array_push($result, '');
        foreach ($query_ticket as $t)
        {//YMD
            $d = explode("-", $t['dated']);
            $date = $d[2].'-'.$d[1].'-'.$d[0];
            $t1 = intval($t['carry'])+intval($t['quantity']);
            $temp = ','.$date.','.$t['menu'].','.intval($t['carry']).','.intval($t['quantity']).','.$t1.','.intval($t1-$t['total']).','.intval($t['total']);
            foreach ($query_menu as $m)
            {
                if ($t['menu'] === $m['name'])
                {
                    $c = intval($m['cost']*($t1-$t['total']));
                    $temp = $temp.','.$c;
                    $cost = $cost+$c;
                    break;
                }
            }
            array_push($result, $temp);
        }
        array_push($result, '');
        array_push($result, 'Total Amount = Rs.'.$cost);
        return $result;
    }
}
?>
