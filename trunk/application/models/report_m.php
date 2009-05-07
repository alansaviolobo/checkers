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
		
		$from_date = $this->input->xss_clean($this->input->post('txt_from_date'));
		$to_date = $this->input->xss_clean($this->input->post('txt_to_date'));
		$query = $this->db->get_where('check_bill',array('dated >= '=>$from_date,'dated <= '=>$to_date));	
		
		if(write_file('./resources/report/'.date('d-m-y').'.csv', $this->dbutil->csv_from_result($query)))
		{
			$this->session->set_userdata('message', 'Report successfully created');
        	$data = array('log_of'=>'report',
        	'file_name'=>date('d-m-y').'.csv',
        	'dated'=>date('d-m-y'));
        	
        	$this->db->insert('check_log',$data);
        	return 1;
		} 
	}

	function report_log($limit, $offset)
    {
    	$query = $this->db->get_where('check_log',array('log_of'=>'report'),$limit, $offset);
    	return $query->result_array();
    }
	
	function report_count()
	{
		$query = $this->db->get_where('check_log',array('log_of'=>'report'));
		return $query->num_rows();
	}
}
?>