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
			echo $value."</i>)&nbsp;&nbsp;<u>".anchor('user_c/user_logout','Logout')."<td style=\"border-right:medium solid #D12EA3;\">&nbsp;&nbsp;&nbsp;</td><td></td>";
		if($value == 'yes')
		{
			echo "<td style=\"background-color:#CDEB8B;width:70px;text-align:center;height:30px;font-weight:bold;\">".anchor($key.'_c',"<div>".ucwords($key)."</div>")."</td>";
		}
	}
	echo "<tr></table>";
  }
?>