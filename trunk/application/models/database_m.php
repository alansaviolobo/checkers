<?php

class Database_m extends Model
{
    function _construct()
    {
        parent::Model();
    }

    function database_backup()
    {
        $this->load->dbutil();

        $backup = & $this->dbutil->backup( array ('format'=>'txt'));

        force_download(date('d-m-Y').'.sql', $backup);
    }

    function database_restore()
    {	
        /*if ($getdump = system("mysqldump -h localhost -u checkers -p check123 checkers < 27-05-09.sql"))
         return 1;*/
    }
}

?>
