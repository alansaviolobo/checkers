<?php
echo form_open_multipart('database_c/main', array ('name'=>'frm_database'));
echo "<span id='topic'>Database</span>";
echo "<br /><br />";
echo "<p>".form_submit('btn_backup', 'Backup')."</p>";

echo "<hr>";

$permissions = $this->session->userdata('user_info');
if ($permissions['username'] == 'admin')
{
	echo "<p>".form_upload('txt_file', 'Select file')."</p>";
	echo "<p>".form_submit('btn_restore', 'Restore')."</p>";
}
echo form_close();
?>