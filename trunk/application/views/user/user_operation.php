<!--
	Project:
	Module:
	Author:
	Description:

	Associated Files:
-->

<?php

$attributes = array ('name'=>'frm_user_operation');
echo form_open('user/new_user', $attributes);

echo "<table cellpadding='2' style=\"text-align:left\">";

echo "<tr><td>".form_label('Empployee Id', 'txt_emp_id')."</td>";
echo "<td>".form_input('txt_emp_id')."</td><tr />";

echo "<tr><td>".form_label('Name', 'txt_name')."</td>";
echo "<td>".form_input('txt_name')."</td><tr />";

echo "<tr><td>".form_label('Phone', 'txt_phone')."</td>";
echo "<td>".form_input('txt_phone')."</td><tr />";

echo "<tr><td>".form_label('Address', 'txt_address')."</td>";
echo "<td>".form_input('txt_address')."</td></tr>";

echo "<tr><td>".form_label('Joining Date', 'txt_joining_date')."</td>";
echo "<td>".form_input('txt_joining_date', 'yyyy-mm-dd')."&nbsp";
echo "<a href=\"javascript:showCal('cal_joining_date')\">select</a>"."</td><tr />";

echo "<tr><td>".form_label('Designation', 'txt_designation')."</td>";
echo "<td>".form_input('txt_designation')."</td><tr />";

echo "<tr><td>".form_label('User Type', 'txt_user_type')."</td>";
echo "<td>".form_input('txt_user_type')."</td><tr />";

echo "<tr><td>".form_label('User Privileges', 'txt_user_privileges')."</td>";
echo "<td>".form_checkbox('chk_user_manage','User Manage')."<br />";
echo form_checkbox('chk_menu_manage','Menu Manage')."<br />";
echo form_checkbox('chk_database_manage','Database Manage')."<br />";
echo form_checkbox('chk_report_manage','Report Manage')."<br />";
echo form_checkbox('chk_billing','Billing')."</td><tr />";

echo "<tr><td>".form_submit('submit', 'Insert')."&nbsp;";
echo form_reset('reset', 'Clear')."</td></tr>";

echo "</table>";
echo form_close();
?>
