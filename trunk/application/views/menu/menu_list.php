<?php

echo "<h2>Menu Items</h2><small>".anchor('loader_c/load_menu_add','New Menu Item')."</small><br /><br />";

if (isset($menu_items))
{
    echo "<table cellpadding='3' cellspacing='3' class='border_set' style=\"border-collapse: collapse;\">";
	echo "<tr><th class='border_set'>Item name</th>";
	echo "<th class='border_set'>Quantity</th>";
	echo "<th class='border_set'>Cost</th>";
	echo "<th class='border_set'>Select</th></tr>";
    foreach ($menu_items as $item)
    {
    	echo "<tr><td class='border_set'><b><i>".$item['name']."</i></b></td>";
		echo "<td class='border_set'>".$item['quantity']."</td>";
		echo "<td class='border_set'>".$item['cost']."</td>";
		echo "<td class='border_set'>".anchor('menu_c/menu_manage/'.$item['id'],'Select')."</td></tr>";
    }
	echo "</table>";
	echo $this->pagination->create_links();
}
else
echo "No Menu Items Exist&nbsp;&nbsp<small>".anchor('loader_c/load_menu_add','Add Item')."</small>";

if($this->session->userdata('message'))
	echo "<br /><h3>".$this->session->userdata('message')."</h3>";

?>