<style type="text/css">
	.style1{
		font-family:Verdana;
		height:470px;
		text-align:center;
		padding-top:10%;
		background: url("./resource/image/technotrix.png") 100% 100% no-repeat;
	}

</style>
<?php

$attributes = array ('name'=>'frm_login');
echo form_open('user_c/login', $attributes);

echo "<div class=\"style1\">";
echo "<p><img src='".base_url()."/resource/image/checkers.png'></img></p><br />";
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
