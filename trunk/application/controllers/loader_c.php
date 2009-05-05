<?php

class Loader_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
    	$this->load->view('misc/login');
    }

    function load_menu_list()
    {
		redirect('menu_c/menu_list','refresh');
    }

    function load_menu_add()
    {
    	$content['title'] = "Menu Add";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'menu/menu_add';
        $this->load->vars($content);
        $this->load->view('template/operation');
    }
	
	function load_database_backup()
	{
		$content['title'] = "Database Backup";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'database/database_backup';
        $this->load->vars($content);
        $this->load->view('template/operation');
	}
	
	function load_user_add()
	{
		$content['title'] = "User Add";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'user/user_add';
        $this->load->vars($content);
        $this->load->view('template/operation');
	}
	
	function load_user_list()
	{
		redirect('user_c/user_list','refresh');
	}
	
	function load_report_create()
	{
		$this->load->model('menu_m','',TRUE);
		$data['categories'] = $this->menu_m->menu_categories();
		
		$content['title'] = "Report Create";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'report/report_create';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);
	}
	
	function load_bill()
	{
		$this->load->view('orders/bill');
	}
}

?>