<?php
class Order_c extends Controller
{
	function _construct()
	{
	}
	function index()
	{
		$this->load->model('order_m', '', TRUE);
		$data['orders'] = $this->order_m->order_list();
		$this->load->model('menu_m', '', TRUE);
		$data['menu_items'] = $this->menu_m->menu_list();
		$data['categories'] = $this->menu_m->menu_categories();
		$content['title'] = 'Orders';
		$content['menu'] = 'misc/menu_items';
		$content['content'] = 'orders/orders';
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
			$data['order_bill'] = $this->order_m->order_bill();
			$this->session->set_userdata('ord_by',$this->input->xss_clean($this->input->post('ddl_bill_dropdown')));
			$data['orders'] = $this->order_m->order_list();
			$this->load->model('menu_m', '', TRUE);
			$data['menu_items'] = $this->menu_m->menu_list();
			$data['categories'] = $this->menu_m->menu_categories();
			$content['title'] = "Orders";
			$content['menu'] = 'misc/menu_items';
			$content['content'] = 'orders/orders';
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

	function get_order_by()
	{
		$this->load->model('order_m', '', TRUE);
		$data['order_bill'] = $this->order_m->get_order_by();
		$data['ordered_by'] = $this->order_m->order_check();
		$this->load->view('orders/order_check', $data);
	}

	function bill_print()
	{
		$this->session->set_userdata('tax',$this->input->xss_clean($this->input->post('txt_tax')));
		$this->load->model('order_m','',TRUE);
		$data['orders'] = $this->order_m->create_bill();
		$data['bill_details'] = $this->order_m->bill_details();
		$this->load->view('orders/bill',$data);
	}
}
?>