<?php
echo "<link rel='stylesheet' type='text/css' href='".base_url()."resource/stylesheet/common.css' />";
echo form_open('user_c/login', array ('name'=>'frm_login'));
echo "<br><br><br><br><br><br><br><br>";
echo "<div class='style1'>";
echo "<p align='center'><img src='".base_url()."/resource/image/checkers.png'></img></p><br />";
echo "<table cellpadding='3' cellspacing='3' align='center'>";
echo "<tr><td>".form_label('Username', 'txt_username')."</td>";
echo "<td>".form_input('txt_username')."</td></tr>";
echo "<tr><td>".form_label('Password', 'txt_password')."</td>";
echo "<td>".form_password('txt_password')."</td></tr>";
echo "<tr><td colspan='2' align='right'>".form_submit('submit', 'Login')."</td><tr />";
echo "</table>";
if (isset($error))
echo "<h5>".$error."</h5>";
echo "</div>";
echo form_close();
?>