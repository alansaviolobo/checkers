<?php
class Menu_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
        $this->menu_list_source('Food', '');
    }

    function main()
    {
        if ( isset ($_POST['ddl_source_type']))
        {
            $source_type = $this->input->xss_clean($this->input->post('ddl_source_type'));
            $this->menu_list_source($source_type, '');
        }
    }

    function menu_list_source($source_type, $message)
    {
        $this->load->model('menu_m', '', TRUE);

        $config['base_url'] = base_url().'index.php/menu_c/index';
        $config['total_rows'] = $this->menu_m->menu_list_source_count($source_type);
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $config['per_page'] = 15;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $data['menu_items'] = $this->menu_m->menu_list_source($source_type, $config['per_page'], $this->uri->segment(3));
        $data['source_type'] = $source_type;
        $data['results'] = $config['total_rows'];
        $data['ticket'] = $this->ticket_m->ticket_list();
        $content['title'] = "Menu List";
        $content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'menu/menu_list';
        $content['message'] = $message;
        $this->load->vars($content);
        $this->load->view('template/template_all', $data);
    }

    function menu_add()
    {
        $source_type = $this->input->xss_clean($this->input->post('ddl_source_type'));
        $name = $this->input->xss_clean($this->input->post('txt_name'));
        $cost = $this->input->xss_clean($this->input->post('txt_cost'));
        if ($cost == null)
        {
            $check = 'Please Fill The Cost.';
        }
        else
        {
            $check = $this->menu_m->menu_add($source_type, $name, $cost);
        }
        $this->menu_list_source($source_type, $check);
    }

    function menu_manage($name)
    {
        $data['menu'] = $this->menu_m->menu_list_menu($name);
        $data['ticket'] = $this->ticket_m->ticket_list();
        $content['title'] = "Menu Manage";
        $content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'menu/menu_manage';
        $this->load->vars($content);
        $this->load->view('template/template_all', $data);
    }

    function menu_update()
    {
        $source_type = $this->input->xss_clean($this->input->post('ddl_source_type'));
        $name = $this->input->xss_clean($this->input->post('name'));
        $cost = $this->input->xss_clean($this->input->post('txt_cost'));
        if ($cost == null)
        {
            $check = 'Please Fill The Cost.';
        }
        else
        {
            $check = $this->menu_m->menu_update($name, $source_type, $cost);
        }
        $this->menu_list_source($source_type, $check);
    }

    function menu_delete($name, $source_type)
    {
        $check = $this->menu_m->menu_delete($name);
        $this->menu_list_source($source_type, $check);
    }

    function menu_purchase()
    {
        $content['title'] = "Menu Purchase";
        $content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'menu/menu_purchase';
        $data['menu'] = $this->menu_m->menu_list_source('Bar', '', '');
        $data['ticket'] = $this->ticket_m->ticket_list();
        $this->load->vars($content);
        $this->load->view('template/template_all', $data);
    }

    function menu_purchase_insert()
    {
        $menu = $this->input->xss_clean($this->input->post('ddl_source_bar'));
        $quantity = $this->input->xss_clean($this->input->post('txt_quantity'));
        $check = $this->ticket_m->menu_purchase_insert($menu, $quantity);
        $this->menu_list_source('Bar', $check);
    }
}
?>
