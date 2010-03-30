<?php
class BillArchive extends Controller {
	function __construct() {
		parent::Controller ();
		if (!$this->session->userdata ( 'user_info' )) redirect ( 'loader_c' );
	}

	function index() {
		if ($this->input->post ( 'btn_create_report' )) {
			$this->load->model ( 'report_m' );
			$from = $this->input->post ( 'from_date', true );
			$to = date ( 'Y-m-d', strtotime ( '+1 day', strtotime ( $this->input->post ( 'to_date', true ) ) ) );
			$bill_cat = $this->input->post ( 'bill_cat', true );
			$content ['bills'] = $this->report_m->get_bills ( $from, $to, $bill_cat );
		}

		$userinfo = $this->session->userdata ( 'user_info' );
		$content ['stealth'] = $userinfo ['username'] == 'stealth';
		$content ['title'] = "Bill Archive";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_content'] = 'report/billarchive';
		$this->load->vars ( $content );
		$this->load->view ( 'template/template_all' );
	}

	function delbill($id) {
		$this->load->model ( 'order_m' );
		$bill = $this->order_m->bill_details_from_id ( $id );
		$this->db->delete ( 'bill', array ('number' => $id ) );
		$this->db->query ( "UPDATE bill SET disp_no_num = disp_no_num - 1 WHERE disp_no_num > $bill->dispnonum AND disp_no_cat = '$bill->dispnocat'" );
		$userinfo = $this->session->userdata ( 'user_info' );
		$content ['stealth'] = $userinfo ['username'] == 'stealth';
		$content ['message'] = "Bill deleted successfully";
		$content ['title'] = "Bill Archive";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_content'] = 'report/billarchive';
		$this->load->vars ( $content );
		$this->load->view ( 'template/template_all' );
	}

	function editbill($id) {
		$this->load->model ( 'order_m' );
		$this->load->model ( 'menu_m' );

		if (isset ( $_POST ['edit_submit'] ) and count ( $_POST ['item'] ) == count ( $_POST ['qty'] )) {
			foreach ( range ( 0, count ( $_POST ['item'] ) - 1 ) as $count ) {
				$cost = $_POST ['qty'] [$count] * $this->db->query ( "SELECT cost FROM menu WHERE name = '{$_POST['item'][$count]}'" )->row ()->cost;
				$order = $this->db->query ( "SELECT * FROM orders WHERE bill_number = {$_POST['bill_number']} and menu = '{$_POST['item'][$count]}'" )->row ();
				if (! $order) {
					$order = $this->db->query ( "SELECT * FROM orders WHERE bill_number = {$_POST['bill_number']}" )->row ();
					$this->db->query ( "INSERT INTO orders (id, menu, quantity, cost, source, status, bill_number, kot_numbers) VALUES
										(0, '{$_POST['item'][$count]}', {$_POST['qty'][$count]}, $cost, '$order->source', '$order->status',
										$order->bill_number, '$order->kot_numbers')" );
				} elseif ($_POST ['qty'] [$count] == 0)
					$this->db->query ( "DELETE FROM orders WHERE id = $order->id" );
				elseif ($_POST ['qty'] [$count] != $order->quantity)
					$this->db->query ( "UPDATE orders SET quantity = {$_POST['qty'][$count]}, cost = $cost WHERE id = $order->id" );
			}
			$orders = $this->db->query ( "SELECT section, orders.cost FROM orders JOIN menu ON orders.menu = menu.name WHERE bill_number = {$_POST['bill_number']}" )->result ();
			$bill = $this->db->query ( "SELECT * FROM bill where number = {$_POST['bill_number']}" )->row ();
			$subtotal = $Bar = $Beverages = $Food = 0;
			foreach ( $orders as $order ) {
				$subtotal += $order->cost;
				${$order->section} += $order->cost;
			}
			$tax = $bill->tax / $bill->subtotal;
			$discount = $bill->discount / $bill->subtotal;
			$total = round ( $subtotal * (1 - $discount) * (1 + $tax) );
			$this->db->query ( "UPDATE bill SET beverages = $Beverages, bar = $Bar, food = $Food, subtotal = $subtotal, total = $total WHERE number = {$_POST['bill_number']}" );
		}

		$userinfo = $this->session->userdata ( 'user_info' );
		$content ['stealth'] = $userinfo ['username'] == 'stealth';
		$content ['bill'] = $this->order_m->bill_details_from_id ( $id );
		$content ['menu_items'] = $this->menu_m->menu_list ();
		$content ['title'] = "Bill Archive";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_content'] = 'report/billarchive';
		$this->load->vars ( $content );
		$this->load->view ( 'template/template_all' );
	}

	function printbill($id) {
		$data ['details'] = $this->db->get_where ( 'bill', array ('number' => $id ) )->row ();
		$data ['orders'] = $this->db->get_where ( 'orders', array ('bill_number' => $id ) )->result_array ();
		$this->load->view ( 'order/bill_print', $data );
	}

	function show_bill_details() {
		$this->load->model ( 'order_m' );
		$content ['bill'] = $this->order_m->bill_details_from_id ( $this->input->post ( 'bill_number', true ) );
		$content ['title'] = "Report";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_content'] = 'report/report';

		$this->load->vars ( $content );
		$this->load->view ( 'template/template_all' );
	}
}
?>