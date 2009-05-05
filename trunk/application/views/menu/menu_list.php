<?php

echo "<h2>Menu Items</h2><small>".anchor('loader_c/load_menu_add','New Menu Item')."</small><br /><br />";

if (isset($menu_items))
{
    echo "<table cellpadding='3' cellspacing='3' style=\"text-align:left;\">";
	echo "<tr><th>Item name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost</th>";
	echo "<th>Select</th></tr>";
    foreach ($menu_items as $item)
    {
    	echo "<tr><td>".$item['name']."</td>";
		echo "<td>".$item['quantity']."</td>";
		echo "<td>".$item['cost']."</td>";
		echo "<td>".anchor('menu_c/menu_manage/'.$item['id'],'Select')."</td></tr>";
    }
	echo "</table>";
}
else
echo "No Menu Items Exist&nbsp;&nbsp<small>".anchor('loader_c/load_menu_add','Add Item')."</small>";

if($this->session->userdata('message'))
	echo "<br /><h3>".$this->session->userdata('message')."</h3>";

?>