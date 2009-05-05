<?php

$attributes = array ('name'=>'frm_menu_manage');
echo form_open('menu_c/menu_update', $attributes);

echo "<h2>Manage Exiting Menu Items</h2>";
if ($menu_item)
{
    echo "<table cellpadding='3' cellspacing='3'>";
    foreach ($menu_item as $item)
    {
    	echo form_hidden('txt_id',$item['id']);
		
        echo "<tr><td>".form_label('Name', 'txt_name')."</td>";
        echo "<td>".form_input('txt_name',$item['name'])."</td></tr>";

        echo "<tr><td>".form_label('Quantity', 'txt_quantity')."</td>";
        echo "<td>".form_input('txt_quantity',$item['quantity'])."</td></tr>";

        echo "<tr><td>".form_label('Cost', 'txt_cost')."</td>";
        echo "<td>".form_input('txt_cost',$item['cost'])."</td><tr />";

        echo "<tr><td>".form_label('Section', 'ddl_section')."</td>";
        $dropdown_elements = array ('Bar', 'Restaurant', 'Beverages');
        echo "<td>".form_dropdown('ddl_section', $dropdown_elements, $item['section'])."</td></tr>";

        echo "<tr><td colspan='2'>".form_submit('submit', 'Update')."&nbsp";
        echo "<small>".anchor('menu_c/menu_delete/'.$item['id'],'Delete')."</td></tr>"."</small>";
    }
    echo "</table>";
}

echo form_close();

?>