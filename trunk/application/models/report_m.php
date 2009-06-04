<?php
class Report_m extends Model
{
    function _construct()
    {

    }

    function index()
    {

    }

    function report_create()
    {
        $this->load->dbutil();
        $query = array ();
        $name = '';
        $report_type = $this->input->xss_clean($this->input->post('ddl_report_type'));
        switch($report_type)
        {
            case 'Daily':
                {
                    $query = $this->report_daily();
                    $name = 'Daily';
                }
            break;

            case 'Sales':
                {
                    $query = $this->report_sales();
                    $name = 'Sales';
                }
            break;

            case 'Bills':
                {
                    $query = $this->report_bills();
                    $name = 'Bills';
                }
            break;

            default:
                break;
    }

    $file = fopen('c:\\temp\\'.date('d-m-y').'-'.$name.'.csv', "w");

    foreach ($query as $line)
    {
        fputcsv($file, split(',', $line));
    }
    $this->session->set_userdata('message', 'Report successfully created');
    fclose($file);

    force_download(date('d-m-Y').'.csv', file_get_contents('c:\\temp\\'.date('d-m-y').'-'.$name.'.csv'));

    //unlink('c:\\temp\\'.date('d-m-y').'.csv');
}

function report_sales()
{
    $from_date = $this->input->xss_clean($this->input->post('txt_from_date'));
    $to_date = $this->input->xss_clean($this->input->post('txt_to_date'));
    $query = $this->db->get_where('check_bill', array ('dated >= '=>$from_date, 'dated <= '=>$to_date))->result_array();
    $result = array ();
    array_push($result, 'MAHATTAN - Bar and Restaurant');
    array_push($result, 'Sales Report - '.$from_date.'   To'.$to_date);
    array_push($result, '');
    array_push($result, 'SRNO.,ITEM NAME,QNTY USED,QNTY PREV,TOTAL(Rs.)');
    array_push($result, '');
    $quantity = $cost = 0;
    $i = 0;

    $q_array = array ();

    foreach ($query as $q)
    {
        if ( isset ($q_array[$q['item_name']]))
        {
            $quantity = $cost = 0;
            $temp = explode(",", $q_array[$q['item_name']]);
            $quantity = intval($q['quantity'])+intval($temp[0]);
            $cost = floatval($q['cost'])+floatval($temp[1]);
            $q_array[$q['item_name']] = $quantity.','.$cost;
        }

        else
        {
            $q_array[$q['item_name']] = $q['quantity'].','.$q['cost'];
        }
    }

    $menu = $this->db->get_where('check_menu')->result_array();
    $m_array = array ();
    foreach ($menu as $m)
    {
        $m_array[$m['name']] = $m['quantity'];
    }
    unset ($cost);
    unset ($quantity);
    $cost = '';
    $quantity = '';
    foreach ($q_array as $key=>$value)
    {
        $temp = explode(",", $value);
        $cost = $cost+$temp[1];
        $quantity = $quantity+$temp[0];
        if ( isset ($m_array[$key]))
        {
            $old_quantity = $m_array[$key];
        }

        $temp = ++$i.','.$key.','.$temp[0].','.$old_quantity.','.$temp[1];
        array_push($result, $temp);
    }
    array_push($result, '');
    array_push($result, 'Total Items Consumed = '.$quantity.'Nos');
    array_push($result, 'Total Amount = Rs.'.$cost);
    return $result;
}

function report_bills()
{
    $from_date = $this->input->xss_clean($this->input->post('txt_from_date'));
    $to_date = $this->input->xss_clean($this->input->post('txt_to_date'));
    $query = $this->db->get_where('check_bill', array ('dated >= '=>$from_date, 'dated <= '=>$to_date))->result_array();
    $result = array ();
    array_push($result, 'MAHATTAN - Bar and Restaurant');
    array_push($result, 'Bill Report - From:'.$from_date.'   To'.$to_date);
    array_push($result, '');
    array_push($result, 'SRNO.,BILL NUMBER,DATE,ITEM NAME,QUANTITY,COST(per item),SUB TOTAL(Rs.),DISCOUNT(%),TAX(%),TOTAL(Rs.)');
    array_push($result, '');
    $bill_number = '';
    $cost = '';
    $i = 0;
    foreach ($query as $row)
    {
        $temp = ++$i.','.$row['bill_number'].",".$row['dated'].','.$row['item_name'].','.$row['quantity'].','.$row['cost'].','.$row['sub_total'].','.$row['discount'].','.$row['tax'].','.$row['total'];
        array_push($result, $temp);
        $bill_number = $row['bill_number'];
        $cost = floatval($cost)+floatval($row['total']);
    }

    array_push($result, '');
    array_push($result, 'Total Bills = '.$bill_number);
    array_push($result, 'Total Amount = Rs.'.$cost);
    array_push($result, 'Total Items = '.$i.'Nos');

    return $result;
}

function report_daily()
{
    $from_date = $this->input->xss_clean($this->input->post('txt_from_date'));
    $to_date = $this->input->xss_clean($this->input->post('txt_to_date'));
    $query = $this->db->get_where('check_bill', array ('dated >= '=>$from_date, 'dated <= '=>$to_date))->result_array();
    $result = array ();
    array_push($result, 'MAHATTAN - Bar and Restaurant');
    array_push($result, 'Daily Sales Report - '.$from_date);
    array_push($result, '');
    array_push($result, 'SRNO.,ITEM NAME,QNTY USED,QNTY PREV,TOTAL(Rs.)');
    array_push($result, '');
    $quantity = $cost = 0;
    $i = 0;

    $q_array = array ();

    foreach ($query as $q)
    {
        if ( isset ($q_array[$q['item_name']]))
        {
            $quantity = $cost = 0;
            $temp = explode(",", $q_array[$q['item_name']]);
            $quantity = intval($q['quantity'])+intval($temp[0]);
            $cost = floatval($q['cost'])+floatval($temp[1]);
            $q_array[$q['item_name']] = $quantity.','.$cost;
        }

        else
        {
            $q_array[$q['item_name']] = $q['quantity'].','.$q['cost'];
        }
    }

    $menu = $this->db->get_where('check_menu')->result_array();
    $m_array = array ();
    foreach ($menu as $m)
    {
        $m_array[$m['name']] = $m['quantity'];
    }
    unset ($cost);
    unset ($quantity);
    $cost = '';
    $quantity = '';
    foreach ($q_array as $key=>$value)
    {
        $temp = explode(",", $value);
        $cost = $cost+$temp[1];
        $quantity = $quantity+$temp[0];
        if ( isset ($m_array[$key]))
        {
            $old_quantity = $m_array[$key];
        }

        $temp = ++$i.','.$key.','.$temp[0].','.$old_quantity.','.$temp[1];
        array_push($result, $temp);
    }
    array_push($result, '');
    array_push($result, 'Total Items Consumed = '.$quantity.'Nos');
    array_push($result, 'Total Amount = Rs.'.$cost);
    return $result;

}
}
?>
