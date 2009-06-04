<?php

class Report_c extends Controller
{
    function _construct()
    {

    }

    function index()
    {
    	$content['title'] = "Report";
        $content['menu'] = 'misc/menu_items';
        $content['content'] = 'report';
        $this->load->vars($content);
        $this->load->view('template/operation');
    }

    function report_create()
    {
        $this->load->model('report_m', '', TRUE);
        $check = $this->report_m->report_create();
        if ($check == 1)
        {
            redirect('report_c', 'refresh');
        }
    }
}

?>
