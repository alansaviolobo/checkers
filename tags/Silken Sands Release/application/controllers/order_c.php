<?php
class Order_c extends Controller {
	function _construct() {
		parent::Controller ();
	}

	function index() {
		$this->select_source ( 'table' );
	}

	function select_source($source_type) {
		$this->session->set_userdata ( 'source_type', $source_type );
		$this->orders_list ( $source_type, null, null, null );
	}

	function main() {
		if (isset ( $_POST ['btn_close_bill'] )) {
			$source = $this->input->xss_clean ( $this->input->post ( 'ddl_order_hidden' ) );
			$paid = $this->input->xss_clean ( $this->input->post ( 'ddl_pay_by' ) );
			$check = $this->order_m->close_bill ( $source, $paid );
			$this->orders_list ( $this->session->userdata ( 'source_type' ), $check, null, null );
		}

		elseif (isset ( $_POST ['ddl_order_source'] )) {
			$source = $this->input->xss_clean ( $this->input->post ( 'ddl_order_source' ) );
			$orders_source = $this->order_m->orders_list_source ( $source );
			$this->orders_list ( $this->session->userdata ( 'source_type' ), null, $orders_source, $source );
		}

		elseif (isset ( $_POST ['btn_order'] )) {
			$menu = $this->input->xss_clean ( $this->input->post ( 'ddl_menu' ) );
			$source = $this->input->xss_clean ( $this->input->post ( 'ddl_source' ) );
			$quantity = $this->input->xss_clean ( $this->input->post ( 'txt_quantity' ) );
			$kot = $this->input->xss_clean ( $this->input->post ( 'txt_kot' ) );
			$check = $this->order_m->new_order ( $menu, $source, $quantity, $kot );
			$this->orders_list ( $this->session->userdata ( 'source_type' ), $check, null, null );
		}
	}

	function orders_list($source_type, $message, $orders_source, $source) {
		$data ['menu'] = $this->menu_m->menu_list ();
		$data ['orders'] = $this->order_m->orders_list ();
		$data ['waiters'] = $this->user_m->waiters_list ();
		$data ['orders_source'] = $orders_source;
		$data ['source'] = $source;
		$room = $table = array ();
		if (isset ( $data ['orders'] )) {
			foreach ( $data ['orders'] as $o ) {
				if (strpos ( strtolower ( $o ['source'] ), strtolower ( 'Table' ) ) == true) {
					$table [$o ['source']] = $o ['source'];
				} else {
					$room [$o ['source']] = $o ['source'];
				}
			}
		}

		$source_type == 'Table' ? ($data ['sources'] = $table) : ($data ['sources'] = $room);

		$content ['title'] = "Orders";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_options'] = 'order/option';
		$content ['section_orders'] = 'order/order_list';
		$content ['section_bill_view'] = 'order/bill_view';
		$content ['message'] = $message;
		$this->load->vars ( $content );
		$this->load->view ( 'template/template_order', $data );
	}

	function order_delete($id) {
		$check = $this->order_m->order_delete ( $id );
		$this->orders_list ( $this->session->userdata ( 'source_type' ), $check, null, null );
	}

	function bill_print($discount, $tax, $waiter, $source, $name) {
		$url = '';
		$data ['orders'] = $this->order_m->create_bill ( $discount, $tax, $waiter, $source, $name );
		$data ['details'] = $this->order_m->bill_details ( $source );

		if (strlen ( stristr ( $source, 'Room' ) ) > 0) {
			$this->order_m->close_bill ( $source, 'room' );
			$url = base_url () . "index.php/order_c/select_source/room";
		} else {
			$url = base_url () . "index.php/order_c/select_source/table";
		}
		$data ['url'] = $url;

		$this->load->view ( 'order/bill_print', $data );
	}

	function room_checkout() {
		$source = $this->input->xss_clean ( $this->input->post ( 'ddl_sources' ) );
		$payment = $this->input->xss_clean ( $this->input->post ( 'ddl_payment_mode' ) );
		$check = $this->order_m->room_payment ( $source, $payment );
		redirect ( 'loader_c/room_checkout/' . $check );
	}
}
?>
