<?php
class Report_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
        $content['title'] = "Report";
        $content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'report/report';
        $this->load->vars($content);
        $this->load->view('template/template_all');
    }

    function generate_report()
    {
    	$this->load->model('report_m');
    	$from = $this->input->post('from_date', true);
    	$to = $this->input->post('to_date', true);
    	switch($this->input->post('report_type', true))
    	{
    		case 'Purchases':	$report = $this->report_m->purchases($from, $to);break;
    		case 'Sales':		$report = $this->report_m->sales($from, $to);break;
    		default: echo "Invalid report requested";
    	}
        force_download("$report[0].csv", implode("\n", $report));
    }
    
    function show_bill_details()
    {
    	$this->load->model('order_m');
    	$content['bill'] = $this->order_m->bill_details_from_id($this->input->post('bill_number', true));
		$content['title'] = "Report";
        $content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'report/report';
        
        $this->load->vars($content);
        $this->load->view('template/template_all');
    }
}
?>