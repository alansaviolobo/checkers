<?php

$attributes = array ('name'=>'frm_user_manage');
echo form_open('user_c/user_update', $attributes);

echo "<h2>Manage Exiting User</h2>";

echo "<hr /><br/>";

if ($user_single)
{
    echo "<table cellpadding='3' cellspacing='3'>";
    foreach ($user_single as $user)
    {
        echo form_hidden('txt_id', $user['id']);

        echo "<tr><td>".form_label('Name', 'txt_name')."</td>";
        echo "<td>".form_input('txt_name', $user['name'])."</td></tr>";

        echo "<tr><td>".form_label('Username', 'txt_username')."</td>";
        echo "<td>".form_input('txt_username', $user['username'])."</td></tr>";

        echo "<tr><td>".form_label('Password', 'txt_password')."</td>";
        echo "<td>".form_password('txt_password', $user['password'])."</td><tr />";

        echo "<tr><td>".form_label('Designation', 'ddl_designation')."</td>";
        $designation_elements = array ('Waiter', 'Bartender', 'Manager');
        echo "<td>".form_dropdown('ddl_designation', $designation_elements, $user['designation'])."</td></tr>";

        echo "<tr><td valign='top'>".form_label('User Privileges')."</td>";
        echo "<td>".form_checkbox('chk_order', 'yes', $user['order_manage'])." Order<br/>";
        echo form_checkbox('chk_menu', 'yes', $user['menu_manage'])." Menu<br/>";
        echo form_checkbox('chk_database', 'yes', $user['database_manage'])." Database<br/>";
        echo form_checkbox('chk_report', 'yes', $user['report_manage'])." Report<br/>";
        echo form_checkbox('chk_user', 'yes', $user['user_manage'])." User<br/></td></tr>";


        echo "<tr><td colspan='2'>".form_submit('submit', 'Update')."&nbsp";
        echo "<small>".anchor('user_c/user_delete/'.$user['id'], 'Delete')."</td></tr>"."</small>";
    }
    echo "</table>";
}

echo form_close();

?>
