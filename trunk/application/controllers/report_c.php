<?php

class Report_c extends Controller
{
	function _construct()
	{

	}

	function index()
	{
		redirect('report_c/report_log','refresh');
	}

	function report_create()
	{
		$this->load->model('report_m','',TRUE);
		$this->report_m->report_create();
		$this->load->view('report/report_log');
	}

	function report_log()
	{
		$content['title'] = "Report Log";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'report/report_log';
        $this->load->vars($content);
        $this->load->view('template/operation');
	}
}

?>