<?php

$attributes = array ('name'=>'frm_menu_list');
echo form_open('menu_c/menu_list_section_items', $attributes);

echo "<span style=\"font-size: large;\">Menu Items</span>&nbsp;&nbsp;&nbsp;".anchor('loader_c/load_menu_add','New Menu Item')."<br />";

echo "<p>Select Section : &nbsp;".form_dropdown('ddl_section',array('Bar'=>'Bar','Restaurant'=>'Restaurant','Beverages'=>'Beverages'))."&nbsp;&nbsp;";
echo form_submit('submit','Select')."</p>";

if (isset($menu_items))
{
    echo "<table cellpadding='3' cellspacing='3' class='border_set' style=\"border-collapse: collapse;\">";
	echo "<tr><th class='back_color'>Item name</th>";
	echo "<th class='back_color'>Quantity</th>";
	echo "<th class='back_color'>Cost</th>";
	echo "<th class='back_color'>Select</th></tr>";
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

echo form_close();

?>