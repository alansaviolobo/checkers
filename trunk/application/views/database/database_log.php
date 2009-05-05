<?php

echo "<h2>Database Log</h2><small>".anchor('loader_c/load_database_backup','Database Backup')."</small><br /><br />";

if (isset($log))
{
    echo "<table cellpadding='5' cellspacing='5' style=\"text-align:left;\">";
	echo "<tr><th>File Name</th>";
	echo "<th>Dated</th></tr>";
    foreach ($log as $log_item)
    {
    	echo "<tr><td>".$log_item['file_name']."</td>";
		echo "<td>".$log_item['dated']."</td></tr>";
	}
	echo "</table>";
}
else
echo "No Menu Items Exist";

?>