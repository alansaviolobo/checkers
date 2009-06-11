<?php
class Database_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
        $this->load('');
    }

    function main()
    {
        if ( isset ($_POST['btn_backup']))
        {
            $check = $this->database_m->database_backup();
            force_download(date('d-m-Y').'.sql', $check);
			$this->load('Database Backup Successful. File Name. '.date('d-m-Y').'.sql');
        }
        else if ( isset ($_POST['btn_restore']))
        {
        	
        }
    }
	
	function load($message)
	{
		$content['title'] = "Database";
        $content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'database/database';
		$content['message'] = $message;
        $this->load->vars($content);
        $this->load->view('template/template_all');
	}
}
?>
