<?php
$attributes = array ('name'=>'frm_user_manage');
echo form_open('user_c/user_update', $attributes);

echo "<h2>Manage Exiting User</h2>";

echo "<hr /><br/>";

if ($user)
{
    echo "<table cellpadding='3' cellspacing='3'>";
    echo form_hidden('username', $user->username);

    echo "<tr><td>".form_label('Name', 'txt_name')."</td>";
    echo "<td>".form_input('txt_name', $user->name)."</td></tr>";

    echo "<tr><td>".form_label('Username', 'txt_username')."</td>";
	$data = array('name'=>'txt_username','disabled'=>'disabled','value'=>$user->username);
    echo "<td>".form_input($data)."</td></tr>";

    echo "<tr><td>".form_label('Password', 'txt_password')."</td>";
    echo "<td>".form_password('txt_password', $user->password)."</td><tr />";

    echo "<tr><td>".form_label('Designation', 'ddl_designation')."</td>";
    $designation_elements = array ('Owner'=>'Owner', 'Manager'=>'Manager', 'Waiter'=>'Waiter');
    $js = 'onchange="check_admin()"';
    echo "<td>".form_dropdown('ddl_designation', $designation_elements, $user->designation, $js)."</td></tr>";

    echo "<tr><td valign='top'>".form_label('User Privileges')."</td>";
    echo "<td>".form_checkbox('chk_order', 'yes', $user->order_manage)." Order Manage<br/>";
    echo form_checkbox('chk_menu', 'yes', $user->menu_manage)." Menu Manage<br/>";
    echo form_checkbox('chk_database', 'yes', $user->database_manage)." Database Manage<br/>";
    echo form_checkbox('chk_report', 'yes', $user->report_manage)." Report Manage<br/>";
    echo form_checkbox('chk_user', 'yes', $user->user_manage)." User Manage<br/></td></tr>";


    echo "<tr><td colspan='2'>".form_submit('btn_user_update', 'Update')."&nbsp";
    echo anchor('user_c/user_delete/'.$user->username, 'Delete')."</td></tr>";
    echo "</table>";
}

echo form_close();
?>
