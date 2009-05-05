<?php

$attributes = array ('name'=>'frm_login');
echo form_open('user_c/user_login', $attributes);

echo "<div style=\"padding-left:40%;padding-top:17%;\">";
echo "<h2>Login</h2>";
echo "<table cellpadding='3' cellspacing='3'>";
echo "<tr><td>".form_label('Username', 'txt_username')."</td>";
echo "<td>".form_input('txt_username')."</td></tr>";

echo "<tr><td>".form_label('Password', 'txt_password')."</td>";
echo "<td>".form_password('txt_password')."</td></tr>";

echo "<tr><td colspan='2' align='right'>".form_submit('submit', 'Login')."</td><tr />";

echo "</table>";

if($this->session->userdata('message'))
{
	echo $this->session->userdata('message');
}

echo "</div>";

echo form_close();

?>