<?php

$attributes = array('name'=>'frm_new_user');
echo form_open('user_c/user_add',$attributes);

echo "<h2>Add New User</h2>";

echo "<hr /><br/>";

echo "<table cellpadding='3' cellspacing='3'>";
echo "<tr><td>".form_label('Name', 'txt_name')."</td>";
echo "<td>".form_input('txt_name')."</td></tr>";

echo "<tr><td>".form_label('Username', 'txt_username')."</td>";
echo "<td>".form_input('txt_username')."</td></tr>";

echo "<tr><td>".form_label('Password', 'txt_password')."</td>";
echo "<td>".form_password('txt_password')."</td><tr />";

echo "<tr><td>".form_label('Designation','ddl_designation')."</td>";
$designation_elements = array('Manager'=>'Manager','Administrator'=>'Administrator','User'=>'User');
echo "<td>".form_dropdown('ddl_designation',$designation_elements)."</td></tr>";

echo "<tr><td valign='top'>".form_label('User Privileges')."</td>";
echo "<td>".form_checkbox('chk_order','yes')." Order<br/>";
echo form_checkbox('chk_menu','yes')." Menu<br/>";
echo form_checkbox('chk_database','yes')." Database<br/>";
echo form_checkbox('chk_report','yes')." Report<br/>";
echo form_checkbox('chk_user','yes')." User<br/></td></tr>";

echo "<tr><td colspan='2'>".form_submit('submit', 'Add')."</td><tr />";

echo "</table>";

echo form_close();

?>