<?php

class Database_c extends Controller
{
    function _construct()
    {
        parent::Controller();
    }

    function index()
    {
        $content['title'] = "Database Operation";
        $content['menu'] = 'misc/menu_items';
        $content['content'] = 'database';
        $this->load->vars($content);
        $this->load->view('template/operation');
    }

    function operation()
    {
        if ( isset ($_POST['btn_backup']))
        {	
			$this->database_backup();
        }
		else if(isset($_POST['btn_restore']))
		{
			$this->database_restore();
		}
    }

    function database_backup()
    {
        $this->load->model('database_m', '', TRUE);
        $check = $this->database_m->database_backup();
        if ($check == 1)
        {
            redirect('database_c', 'refresh');
        }
    }

    function database_restore()
    {
        $this->load->model('database_m', '', TRUE);
         $check = $this->database_m->database_restore();
         if ($check == 1)
         {
         redirect('database_c', 'refresh');
         }
    }
}

?>
