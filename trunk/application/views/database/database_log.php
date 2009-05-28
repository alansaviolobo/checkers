<?php

echo "<span style=\"font-size: large;\">Database</span>&nbsp;&nbsp;&nbsp;".anchor('loader_c/load_database_backup', 'Backup')."&nbsp;&nbsp;";
echo anchor('loader_c/load_database_restore', 'Restore')."<br /><br />";

if ( isset ($log))
{
    echo "<table cellpadding='5' cellspacing='5' class='border_set' style=\"border-collapse: collapse;\">";
    echo "<tr><th class='back_color'>File Name</th>";
    echo "<th class='back_color'>Dated</th></tr>";
    foreach ($log as $log_item)
    {
        echo "<tr><td class='border_set'>".$log_item['file_name']."</td>";
        echo "<td class='border_set'>".$log_item['dated']."</td></tr>";
    }
    echo "</table>";
    echo $this->pagination->create_links();
}
else
    echo "No Menu Items Exist";

if ($this->session->userdata('message'))
echo "<br /><h3>".$this->session->userdata('message')."</h3>";

?>
