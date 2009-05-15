<?php

echo "<h2>Report Log</h2><small>".anchor('loader_c/load_report_create','Report Create')."</small><br /><br />";

if (isset($log))
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

if($this->session->userdata('message'))
	echo "<br /><h3>".$this->session->userdata('message')."</h3>";

?>