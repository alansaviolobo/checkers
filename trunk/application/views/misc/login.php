<?php

$attributes = array ('name'=>'frm_login');
echo form_open('user_c/user_login', $attributes);

echo "<div id='div_login' style=\"font-family:Trebuchet MS;height:490px;text-align:center;padding-top:10%;background: url(".base_url()."resources/image/technotrix.png) 100% 100% no-repeat;\">";
echo "<p><img src='".base_url()."/resources/image/checkers.png'></img></p><br />";
echo "<table cellpadding='3' cellspacing='3' align='center'>";
echo "<tr><td>".form_label('Username', 'txt_username')."</td>";
echo "<td>".form_input('txt_username')."</td></tr>";

echo "<tr><td>".form_label('Password', 'txt_password')."</td>";
echo "<td>".form_password('txt_password')."</td></tr>";

echo "<tr><td colspan='2' align='right'>".form_submit('submit', 'Login')."</td><tr />";

echo "</table>";

if($this->session->userdata('message'))
	echo "<br /><h3>".$this->session->userdata('message')."</h3>";

echo "</div>";

echo form_close();

?>