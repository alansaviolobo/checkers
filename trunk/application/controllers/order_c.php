<?php
class Order_c extends Controller
{
    function _construct()
    {
    }

    function index()
    {
        $this->session->unset_userdata('message');

        $this->load->model('order_m', '', TRUE);
        $this->load->model('menu_m', '', TRUE);

        $config['base_url'] = base_url().'index.php/order_c/index';
        $config['total_rows'] = $this->order_m->order_count();
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $data['orders'] = $this->order_m->order_list_all();
        $data['order_list'] = $this->order_m->order_list($config['per_page'], $this->uri->segment(3));

        $data['menu_items'] = $this->menu_m->menu_list_all();
        $data['categories'] = $this->menu_m->menu_categories();

        $this->load->model('user_m', '', TRUE);
        $data['waiter_list'] = $this->user_m->get_waiter_list();

        $content['title'] = 'Order';
        $content['menu'] = 'misc/menu_items';
        $content['content'] = 'order/order';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);

    }

    function order_list_table()
    {
        $this->load->model('order_m', '', TRUE);
        $this->load->model('menu_m', '', TRUE);

        $config['base_url'] = base_url().'index.php/order_c/index';
        $config['total_rows'] = $this->order_m->order_list_table_count();
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $data['orders'] = $this->order_m->order_list_all();
        $data['order_list'] = $this->order_m->order_list_table($config['per_page'], $this->uri->segment(3));

        $data['menu_items'] = $this->menu_m->menu_list_all();
        $data['categories'] = $this->menu_m->menu_categories();

        $this->load->model('user_m', '', TRUE);
        $data['waiter_list'] = $this->user_m->get_waiter_list();

        $content['title'] = 'Order';
        $content['menu'] = 'misc/menu_items';
        $content['content'] = 'order/order';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);
    }

    function order_list_room()
    {
        $this->load->model('order_m', '', TRUE);
        $this->load->model('menu_m', '', TRUE);

        $config['base_url'] = base_url().'index.php/order_c/index';
        $config['total_rows'] = $this->order_m->order_list_room_count();
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $data['orders'] = $this->order_m->order_list_all();
        $data['order_list'] = $this->order_m->order_list_room($config['per_page'], $this->uri->segment(3));

        $data['menu_items'] = $this->menu_m->menu_list_all();
        $data['categories'] = $this->menu_m->menu_categories();

        $this->load->model('user_m', '', TRUE);
        $data['waiter_list'] = $this->user_m->get_waiter_list();

        $content['title'] = 'Order';
        $content['menu'] = 'misc/menu_items';
        $content['content'] = 'order/order';
        $this->load->vars($content);
        $this->load->view('template/operation', $data);
    }

    function order_add()
    {
        if ( isset ($_POST['btn_add']))
        {
            $this->load->model('order_m', '', TRUE);
            $this->order_m->order_add();
            redirect('order_c', 'refresh');
        }
        if ( isset ($_POST['check_ordered_by']))
        {
            $this->load->model('order_m', '', TRUE);
            $this->load->model('menu_m', '', TRUE);

            $config['base_url'] = base_url().'index.php/order_c/index';
            $config['total_rows'] = $this->order_m->order_count();
            $config['full_tag_open'] = '<p>';
            $config['full_tag_close'] = '</p>';
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;

            $this->pagination->initialize($config);

            $data['order_bill'] = $this->order_m->order_bill();
            $this->session->set_userdata('ord_by', $this->input->xss_clean($this->input->post('ddl_bill_dropdown')));
            $data['orders'] = $this->order_m->order_list_all();
            $data['order_list'] = $this->order_m->order_list($config['per_page'], $this->uri->segment(3));
            $data['menu_items'] = $this->menu_m->menu_list_all();
            $data['categories'] = $this->menu_m->menu_categories();
            $this->load->model('user_m', '', TRUE);
            $data['waiter_list'] = $this->user_m->get_waiter_list();
            $content['title'] = "Order";
            $content['menu'] = 'misc/menu_items';
            $content['content'] = 'order/order';
            $this->load->vars($content);
            $this->load->view('template/operation', $data);
        }
    }

    function order_delete($id)
    {
        $this->load->model('order_m', '', TRUE);
        $this->order_m->order_delete($id);
        redirect('order_c', 'refresh');
    }

    function bill_print()
    {
        $this->session->set_userdata('tax', $this->input->xss_clean($this->input->post('txt_tax')));
        $this->load->model('order_m', '', TRUE);
        $data['orders'] = $this->order_m->create_bill();
        $data['bill_details'] = $this->order_m->bill_details();
        $this->load->view('order/bill', $data);
    }
}
?>
