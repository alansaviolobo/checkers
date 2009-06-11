<?php
class Loader_c extends Controller
{
	function _construct()
	{
		
	}
	
	function index()
	{
		$this->load->view('misc/login');
	}
	
	function menu_add()
	{
    	$content['title'] = "Menu Add";
		$content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'menu/menu_add';
        $this->load->vars($content);
        $this->load->view('template/template_all');
	}
	
	function user_add()
	{
		$content['title'] = "User Add";
		$content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'user/user_add';
        $this->load->vars($content);
        $this->load->view('template/template_all');
	}
}
?>