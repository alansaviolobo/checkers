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
        $report_type = $this->input->xss_clean($this->input->post('ddl_report_type'));
        switch($report_type)
        {
            case 'Daily':
                $query = $this->report_daily();
                break;

            case 'Sales':
                $query = $this->report_sales();
                break;

            case 'Bills':
                $query = $this->report_bills();
                break;

            case 'Food':
                $query = $this->report_food();
                break;

            case 'Beverages':
                $query = $this->report_beverages();
                break;

            case 'Bar':
                $query = $this->report_bar();
                break;

            default:
                break;
        }

        $file = fopen('./resources/report/'.date('d-m-y').'.csv', "w");

        foreach ($query as $line)
        {
            fputcsv($file, split(',', $line));
        }
        $this->session->set_userdata('message', 'Report successfully created');
        $data = array ('log_of'=>'report',
        'file_name'=>date('d-m-y').'.csv',
        'dated'=>date('d-m-y'));
        $this->db->insert('check_log', $data);
        return 1;
        fclose($file);
    }

    function report_sales()
    {

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
        array_push($result, 'Daily Sales Report - From:'.$from_date.'   To'.$to_date);
        array_push($result, '');
        array_push($result, 'SRNO.,ITEM NAME,QNTY PREV,QNTY CON,TOTAL(Rs.)');
        array_push($result, '');
        $bill_number = '';
        $cost = '';
        $i = 0;
		$menu_data = $this->db->get('check_menu');
        foreach ($query as $row)
        {
            $temp = ++$i.','.$row['item_name'].','.$row['quantity'].','.$row['cost'].','.$row['sub_total'].','.$row['discount'].','.$row['tax'].','.$row['total'];
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

    function report_food()
    {

    }

    function report_beverages()
    {

    }

    function report_bar()
    {

    }

    function report_log($limit, $offset)
    {
        $query = $this->db->get_where('check_log', array ('log_of'=>'report'), $limit, $offset);
        return $query->result_array();
    }

    function report_count()
    {
        $query = $this->db->get_where('check_log', array ('log_of'=>'report'));
        return $query->num_rows();
    }
}
?>
