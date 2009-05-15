<?php

class Menu_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
    	$this->session->unset_userdata('message');
        redirect('menu_c/menu_list','refresh');
    }

    function menu_list()
    {
    	$this->load->model('menu_m', '', TRUE);
		
    	$config['base_url'] = base_url().'index.php/menu_c/menu_list/';
        $config['total_rows'] = $this->menu_m->menu_count();
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
        $config['per_page'] = 12;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);
		
        $data['menu_items'] = $this->menu_m->menu_list($config['per_page'],$this->uri->segment(3));
    	$content['title'] = "Menu List";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'menu/menu_list';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);
    }
	
	function menu_list_section_items()
	{
		$this->load->model('menu_m', '', TRUE);
		
    	$config['base_url'] = base_url().'index.php/menu_c/menu_list_section_items/';
        $config['total_rows'] = $this->menu_m->menu_list_section_items_count();
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
        $config['per_page'] = 12;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);
		
        $data['menu_items'] = $this->menu_m->menu_list_section_items($config['per_page'],$this->uri->segment(3));
    	$content['title'] = "Menu List";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'menu/menu_list';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);
	}

    function menu_manage($id)
    {
        $this->load->model('menu_m', '', TRUE);
        $data['menu_item'] = $this->menu_m->menu_item($id);
    	$content['title'] = "Menu Manage";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'menu/menu_manage';
        $this->load->vars($content);
        $this->load->view('template/operation',$data);
    }

    function menu_add()
    {
        $this->load->model('menu_m', '', TRUE);
        $this->menu_m->menu_add();
        redirect('menu_c/menu_list', 'refresh');
    }

    function menu_update()
    {
        $this->load->model('menu_m', '', TRUE);
        $this->menu_m->menu_update();
        redirect('menu_c/menu_list', 'refresh');

    }

    function menu_delete($id)
    {
        $this->load->model('menu_m', '', TRUE);
        $this->menu_m->menu_delete($id);
        redirect('menu_c/menu_list', 'refresh');
    }
}

?>