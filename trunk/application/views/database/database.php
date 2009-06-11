<?php
$attributes = array ('name'=>'frm_database');
echo form_open('database_c/main', $attributes);

echo "<span id='topic'>Database</span>";
echo "<br /><br />";
echo "<p>".form_submit('btn_backup', 'Backup')."</p>";

echo form_close();
?>
