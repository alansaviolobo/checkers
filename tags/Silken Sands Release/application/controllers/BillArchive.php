<?php
class BillArchive extends Controller {
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