<?php
class User_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
        redirect('user_c/user_list','refresh');
    }

    function user_add()
    {
        $this->load->model('user_m', '', TRUE);
        $this->user_m->user_add();
        redirect('user_c/user_list', 'refresh');
    }

    function user_login()
    {
		$this->load->model('user_m', '', TRUE);
		$check = $this->user_m->user_login();
	    if($check == 0)
		{
			redirect('loader_c','refresh');
		}
		else if($check == 1)
		{
			redirect('order_c','refresh');
		}
    }

    function user_list()
    {
        $this->load->model('user_m', '', TRUE);
        $data['users'] = $this->user_m->user_list();
    	$content['title'] = "User List";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'user/user_list';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);
    }

    function user_manage($id)
    {
        $this->load->model('user_m', '', TRUE);
        $data['user_single'] = $this->user_m->user_single($id);
        $content['title'] = "User Manage";
		$content['menu'] = 'misc/menu_items';
        $content['content'] = 'user/user_manage';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);
    }
	
	function user_update()
	{
		$this->load->model('user_m', '', TRUE);
        $this->user_m->user_update();
        redirect('user_c/user_list', 'refresh');
	}
	
	function user_delete($id)
	{
		$this->load->model('user_m', '', TRUE);
        $this->user_m->user_delete($id);
        redirect('user_c/user_list', 'refresh');
	}

    function user_logout()
    {
        $this->session->unset_userdata('user_info');
        redirect('loader_c','refresh');
    }
}
?>
