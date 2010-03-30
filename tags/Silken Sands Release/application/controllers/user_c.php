<?php
class User_c extends Controller {
	function __construct() {
		parent::Controller ();
		if ($this->session->userdata ( 'user_info' )) redirect ( 'loader_c' );
	}

	function index() {
		$this->user_list ( '' );
	}

	function login() {
		$data = array ('username' => $this->input->xss_clean ( $this->input->post ( 'txt_username' ) ), 'password' => $this->input->xss_clean ( $this->input->post ( 'txt_password' ) ) );

		$check = $this->user_m->login ( $data );
		if ($check == 0) {
			$data ['error'] = "Check Details";
			$this->load->view ( 'misc/login', $data );
		} else {
			$this->session->set_userdata ( 'user_info', $check );
			$this->session->set_userdata ( 'order_type', 'table' );
			redirect ( 'order_c' );
		}
	}

	function user_list($message) {
		$data ['users'] = $this->user_m->user_list ();
		$content ['title'] = "User Manage";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_content'] = 'user/user_list';
		$content ['message'] = $message;
		$this->load->vars ( $content );
		$this->load->view ( 'template/template_all', $data );
	}

	function user_add() {
		$username = $this->input->xss_clean ( $this->input->post ( 'txt_username' ) );
		$data = array ('username' => $this->input->xss_clean ( $this->input->post ( 'txt_username' ) ), 'password ' => $this->input->xss_clean ( $this->input->post ( 'txt_password' ) ), 'name' => $this->input->xss_clean ( $this->input->post ( 'txt_name' ) ), 'designation ' => $this->input->xss_clean ( $this->input->post ( 'ddl_designation' ) ), 'order_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_order' ) ), 'menu_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_menu' ) ), 'database_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_database' ) ), 'report_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_report' ) ), 'user_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_user' ) ) );

		$check = $this->user_m->user_add ( $username, $data );
		$this->user_list ( $check );
	}

	function user_manage($username) {
		$data ['user'] = $this->user_m->user_list_user ( $username );
		$content ['title'] = "User Manage";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_content'] = 'user/user_manage';
		$this->load->vars ( $content );
		$this->load->view ( 'template/template_all', $data );
	}

	function user_delete($username) {
		$check = $this->user_m->user_delete ( $username );
		$this->user_list ( $check );
	}

	function user_update() {
		$username = $this->input->xss_clean ( $this->input->post ( 'username' ) );
		$data = array ('password ' => $this->input->xss_clean ( $this->input->post ( 'txt_password' ) ), 'name' => $this->input->xss_clean ( $this->input->post ( 'txt_name' ) ), 'designation ' => $this->input->xss_clean ( $this->input->post ( 'ddl_designation' ) ), 'order_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_order' ) ), 'menu_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_menu' ) ), 'database_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_database' ) ), 'report_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_report' ) ), 'user_manage ' => $this->input->xss_clean ( $this->input->post ( 'chk_user' ) ) );

		$check = $this->user_m->user_update ( $username, $data );
		$this->user_list ( $check );
	}

	function user_logout() {
		$this->session->sess_destroy ();
		redirect ( 'loader_c' );
	}
}
?>
