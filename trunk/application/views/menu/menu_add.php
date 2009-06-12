<?php
echo "<script language='javascript'>";
echo "function checkform(form) {";
echo "if (form.ddl_source_type.value == '') { alert('Please select Category'); return false; };";
echo "if (form.txt_name.value == '') { alert('Please enter a name'); return false; };";
echo "if (form.txt_cost.value == '') { alert('Please enter the cost'); return false; };";
echo "return true;";
echo "}";
echo "</script>";
echo form_open('menu_c/menu_add', array ('name'=>'frm_menu_add', 'onsubmit'=>'return checkform(this)'));
echo "<h2>Add New Menu</h2>";
echo "<hr /><br/>";
echo "<table cellpadding='3' cellspacing='3'>";
echo "<tr><td>".form_label('Section', 'ddl_section')."</td>";
echo "<td>".form_dropdown('ddl_source_type', array ('' =>'Select', 'Food'=>'Food', 'Beverages'=>'Beverages', 'Bar'=>'Bar'), '', 'onchange="check_quantity(this)"')."</td></tr>";
echo "<tr><td>".form_label('Name', 'txt_name')."</td>";
echo "<td>".form_input('txt_name')."</td></tr>";
echo "<tr><td>".form_label('Cost (Per Unit)', 'txt_cost')."</td>";
echo "<td>".form_input('txt_cost')."</td><tr />";
echo "<tr><td colspan='2'>".form_submit('btn_menu_add', 'Add')."</td><tr />";
echo "</table>";
echo form_close()
?>