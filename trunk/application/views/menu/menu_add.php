<?php

$attributes = array ('name'=>'frm_menu');
echo form_open('menu_c/menu_add', $attributes);

echo "<h2>Add New Menu</h2>";

echo "<hr /><br/>";

echo "<table cellpadding='3' cellspacing='3'>";
echo "<tr><td>".form_label('Name', 'txt_name')."</td>";
echo "<td>".form_input('txt_name')."</td></tr>";

echo "<tr><td>".form_label('Quantity', 'txt_quantity')."</td>";
echo "<td>".form_input('txt_quantity')."</td></tr>";

echo "<tr><td>".form_label('Cost (Per Unit)', 'txt_cost')."</td>";
echo "<td>".form_input('txt_cost')."</td><tr />";

echo "<tr><td>".form_label('Section', 'ddl_section')."</td>";
$js = 'onchange="check_quantity(this)"';
$dropdown_elements = array ('Bar'=>'Bar', 'Restaurant'=>'Restaurant', 'Beverages'=>'Beverages');
echo "<td>".form_dropdown('ddl_section', $dropdown_elements, '', $js)."</td></tr>";

echo "<tr><td colspan='2'>".form_submit('submit', 'Add')."</td><tr />";

echo "</table>";

echo form_close();

?>
