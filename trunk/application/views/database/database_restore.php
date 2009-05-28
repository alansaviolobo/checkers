<?php

$attributes = array ('name'=>'frm_database_backup');
echo form_open('database_c/database_restore', $attributes);

echo "<h2>Database Restore</h2>";

echo "<hr /><br/>";

echo "<table cellpadding='3' cellspacing='3'>";
echo "<tr><td>".form_submit('submit', 'Restore')."</td><tr />";
echo "<table>";

echo form_close();

?>