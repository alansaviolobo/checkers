<?php

class Report_c extends Controller
{
	function _construct()
	{

	}

	function index()
	{
		$this->session->unset_userdata('message');
		redirect('report_c/report_log','refresh');
	}

	function report_create()
	{		
		$this->load->model('report_m','',TRUE);
		$check = $this->report_m->report_create();
		if($check == 1)
		{
			redirect('report_c/report_log','refresh');			
		}
	}

	function report_log()
	{
		$this->load->model('report_m', '', TRUE);
		
    	$config['base_url'] = base_url().'index.php/report_c/report_log/';
        $config['total_rows'] = $this->report_m->report_count();
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
        $config['per_page'] = 7;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);
		
		$data['log'] = $this->report_m->report_log($config['per_page'],$this->uri->segment(3));
		
		$content['title'] = "Report Log";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'report/report_log';
        $this->load->vars($content);
        $this->load->view('template/operation',$data);
	}
}

?>