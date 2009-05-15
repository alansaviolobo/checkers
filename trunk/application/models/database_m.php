<?php

class Database_m extends Model
{
    function _construct()
    {
        parent::Model();
    }

    function index()
    {

    }

    function database_backup()
    {
        $this->load->dbutil();

        $backup = & $this->dbutil->backup();

        $this->load->helper('file');
        if(write_file('./resources/database/'.date('d-m-y').'.gz', $backup))
        {
        	$this->session->set_userdata('message', 'Database backed up successfully');
        	$data = array('log_of'=>'database',
        	'file_name'=>date('d-m-y').'.gz',
        	'dated'=>date('d-m-y'));
        	
        	if($this->db->insert('check_log',$data))
        	return 1;
        }
    }
    
    function database_log($limit, $offset)
    {
    	$query = $this->db->get_where('check_log',array('log_of'=>'database'),$limit, $offset);
    	return $query->result_array();
    }
	
	function database_count()
	{
		$query = $this->db->get_where('check_log',array('log_of'=>'database'));
		return $query->num_rows();
	}
}

?>
