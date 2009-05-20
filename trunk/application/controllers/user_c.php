<?php
class User_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
        $this->session->unset_userdata('message');
        redirect('user_c/user_list', 'refresh');
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
        if ($check == 0)
        {
            redirect('loader_c', 'refresh');
        }
        else if ($check == 1)
        {
            $this->session->set_userdata('order_type', 'table');
            redirect('order_c', 'refresh');
        }
    }

    function user_list()
    {
        $this->load->model('user_m', '', TRUE);

        $config['base_url'] = base_url().'index.php/user_c/user_list/';
        $config['total_rows'] = $this->user_m->user_count();
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $config['per_page'] = 7;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $data['users'] = $this->user_m->user_list($config['per_page'], $this->uri->segment(3));
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
        $this->session->sess_destroy();
        redirect('loader_c', 'refresh');
    }
}
?>
