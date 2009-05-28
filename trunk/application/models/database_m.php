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

        $backup = & $this->dbutil->backup( array ('format'=>'txt'));

        $this->load->helper('file');
        if (write_file('./resources/database/'.date('d-m-y').'.sql', $backup))
        {
            $this->session->set_userdata('message', 'Database backed up successfully');
            $data = array ('log_of'=>'database',
            'file_name'=>date('d-m-y').'.sql',
            'dated'=>date('d-m-y'));

            if ($this->db->insert('check_log', $data))
            return 1;
        }
    }

    function database_restore()
    {
        /*$pattern = '\.(sql)$';
        $newstamp = 0;
        $newname = "";
        $dc = opendir('./resources/database/');
        while ($fn = readdir($dc))
        {
            # Eliminate current directory, parent directory
            if (ereg('^\.{1,2}$', $fn)) continue ;
            # Eliminate other pages not in pattern
            if (!ereg($pattern, $fn)) continue ;
            $timedat = filemtime("./resources/database/$fn");
            if ($timedat > $newstamp)
            {
                $newstamp = $timedat;
                $newname = $fn;
            }
        }*/

        if($getdump = system("mysqldump -h localhost -u checkers -p check123 checkers < 27-05-09.sql"))
		return 1;
    }

    function database_log($limit, $offset)
    {
        $query = $this->db->get_where('check_log', array ('log_of'=>'database'), $limit, $offset);
        return $query->result_array();
    }

    function database_count()
    {
        $query = $this->db->get_where('check_log', array ('log_of'=>'database'));
        return $query->num_rows();
    }
}

?>
