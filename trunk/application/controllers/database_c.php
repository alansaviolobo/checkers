<?php

class Database_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
        $this->session->unset_userdata('message');
        redirect('database_c/database_log', 'refresh');
    }

    function database_backup()
    {
        $this->load->model('database_m', '', TRUE);
        $check = $this->database_m->database_backup();
        if ($check == 1)
        {
            redirect('database_c/database_log', 'refresh');
        }
    }

    function database_restore()
    {
        /*$this->load->model('database_m', '', TRUE);
        $check = $this->database_m->database_restore();
        if ($check == 1)
        {
            redirect('database_c/database_log', 'refresh');
        }*/
		$command = system("mysqladmin -u checkers -p check123 drop database checkers");
		$command = system("mysqladmin -u checkers -p check123 create database checkers");
		$command = system("mysql -u checkers -p check123 checkers -A < ./resources/database/27-05-09.sql");
    }

    function database_log()
    {
        $this->load->model('database_m', '', TRUE);
        $config['base_url'] = base_url().'index.php/database_c/database_log/';
        $config['total_rows'] = $this->database_m->database_count();
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $config['per_page'] = 7;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $data['log'] = $this->database_m->database_log($config['per_page'], $this->uri->segment(3));

        $content['title'] = "Database Log";
        $content['menu'] = 'misc/menu_items';
        $content['content'] = 'database/database_log';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);
    }
}

?>
