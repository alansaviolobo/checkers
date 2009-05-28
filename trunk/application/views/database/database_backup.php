<?php

$attributes = array ('name'=>'frm_database_backup');
echo form_open('database_c/database_backup', $attributes);

echo "<h2>Database Backup</h2>";

echo "<hr /><br/>";

echo "<table cellpadding='3' cellspacing='3'>";
echo "<tr><td>Backup File Name: ".date('D-M-Y')."</td></tr>";
echo "<tr><td>&nbsp;</td></tr>";
echo "<tr><td>".form_submit('submit', 'Backup')."</td><tr />";
echo "<table>";

echo form_close();

?>
