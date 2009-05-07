<?php
  if($this->session->userdata('user_info'))
  {
	$user_data = array();
	$user_data = $this->session->userdata('user_info');
	
	echo "<table cellspacing='3' cellpadding='3'><tr>";
	foreach($user_data as $key => $value)
	{
		if($key == 'username')
			echo "<td>Logged In As: <strong>".$value."</strong> (<i>";
		if($key == 'designation')
			echo $value."</i>)&nbsp;&nbsp;<small>".anchor('user_c/user_logout','Logout')."<small><td style=\"border-right:medium solid #D12EA3;\">&nbsp;&nbsp;&nbsp;</td><td><strong>MENU >></strong></td>";
		if($value == 'yes')
		{
			echo "<td>".anchor($key.'_c',ucwords($key))."</td>";
		}
	}
	echo "<tr></table>";
  }
?>