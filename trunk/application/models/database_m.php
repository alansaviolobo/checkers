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
		return $backup;
	}
	
	function database_restore()
	{
		
	}
}
?>