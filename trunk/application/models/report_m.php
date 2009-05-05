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
		/*header("Content-type: application/x-msdownload");
		header("Content-Disposition: attachment; filename=".date('D-M-Y').".csv");
		header("Pragma: no-cache");
		header("Expires: 0");*/
		
		$query = $this->db->get_where('check_bill',array('date>'=>$this->input->xss_clean($this->input->post('txt_from_date')),'date<'=>$this->input->xss_clean($this->input->post('txt_to_date'))));
		$data = $query->result_array();
		echo "<strong>Sales Report<strong> \n";
		echo "Dated from: ".$this->input->xss_clean($this->input->post('txt_from_date'))."\n";
		echo "Dated to: ".$this->input->xss_clean($this->input->post('txt_to_date'));
		foreach($data as $row)
		{
			echo "";
		}
	}

	function report_log()
	{

	}
}
?>