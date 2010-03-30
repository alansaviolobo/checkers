<?php
class Report_c extends Controller {
	function __construct() {
		parent::Controller ();
		if ($this->session->userdata ( 'user_info' )) redirect ( 'loader_c' );
	}

	function index() {
		if ($this->input->post ( 'btn_create_report' )) {
			$this->load->model ( 'report_m' );
			$from = $this->input->post ( 'from_date', true );
			$to = date ( 'Y-m-d', strtotime ( '+1 day', strtotime ( $this->input->post ( 'to_date', true ) ) ) );
			switch ($this->input->post ( 'report_type', true )) {
				case 'Purchases' :
					$report = $this->report_m->purchases ( $from, $to );
					force_download ( "$report[0].csv", implode ( "\n", $report ) );
					break;
				case 'Sales' :
					$report = $this->report_m->sales ( $from, $to );
					force_download ( "$report[0].csv", implode ( "\n", $report ) );
					break;
				default :
					echo "Invalid report requested";
			}
		}

		$content ['title'] = "Report";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_content'] = 'report/report';
		$this->load->vars ( $content );
		$this->load->view ( 'template/template_all' );
	}
}
?>