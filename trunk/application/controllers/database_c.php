<?php

class Database_c extends Controller
{
	function _construct()
	{
		parent::Controller();
	}

	function index()
	{
		redirect('database_c/database_log','refresh');
	}

	function database_backup()
	{
		$this->load->model('database_m', '', TRUE);
		$check = $this->database_m->database_backup();
		if($check == 1)
		{
			redirect('database_c/database_log','refresh');
		}
	}

	function database_log()
	{
		$this->load->model('database_m', '', TRUE);
		$data['log'] = $this->database_m->database_log();
		
		$content['title'] = "Database Log";
		$content['menu'] = 'misc/menu_items';
		$content['content'] = 'database/database_log';
		$this->load->vars($content);
		$this->load->view('template/operation',$data);
	}
}

?>