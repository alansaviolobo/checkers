<?php
class Database_c extends Controller {
	function __construct() {
		parent::Controller ();
	}

	function main() {
		if (isset ( $_POST ['btn_backup'] )) {
			$this->load->dbutil ();
			$sql = $this->dbutil->backup ( array ('format' => 'txt' ) );
			force_download ( date ( 'd-m-Y' ) . '.txt', $sql );
		} elseif (isset ( $_POST ['btn_restore'] )) {
			$config ['upload_path'] = './resource/uploads/';
			$config ['allowed_types'] = 'txt';
			$config ['max_size'] = '1048576';
			$this->load->library ( 'upload', $config );

			if (! $this->upload->do_upload ( 'txt_file' )) {
				$this->index ( $this->upload->display_errors () );
			} else {
				$details = $this->upload->data ();
				$sql = file_get_contents ( $details ['full_path'] );
				$sql = preg_replace ( "/#.*\n/", "", $sql );
				$sql = ('SET FOREIGN_KEY_CHECKS = 0;' . $sql . 'SET FOREIGN_KEY_CHECKS = 1;');
				$queries = split ( ';', $sql );
				set_time_limit(0);
				foreach ( $queries as $query )
					trim ( $query ) and $this->db->query ( $query );
				unlink ( $details ['full_path'] );
				$this->index ( 'Database successfully restored' );
			}
		}
	}

	function index($message = null) {
		$content ['title'] = "Database";
		$content ['section_menu'] = 'misc/top_menu';
		$content ['section_content'] = 'database/database';
		$content ['message'] = $message;
		$this->load->vars ( $content );
		$this->load->view ( 'template/template_all' );
	}
}
?>
