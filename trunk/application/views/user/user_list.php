<?php

echo "<h2>User List</h2><small>".anchor('loader_c/load_user_add','New User')."</small><br /><br />";

if (isset($users))
{
    echo "<table cellpadding='3' cellspacing='3' class='border_set' style=\"border-collapse: collapse;\">";
	echo "<tr><th class='border_set' >Name</th>";
	echo "<th class='border_set' >Username</th>";
	echo "<th class='border_set' >Order</th>";
	echo "<th class='border_set' >Menu</th>";
	echo "<th class='border_set' >Database</th>";
	echo "<th class='border_set' >Report</th>";
	echo "<th class='border_set' >User</th>";
	echo "<th class='border_set' >Select</th></tr>";
    foreach ($users as $user)
    {
    	echo "<tr><td class='border_set' ><b><i>".$user['name']."</i></b></td>";
		echo "<td class='border_set' >".$user['username']."</td>";
		echo "<td class='border_set' >".$user['order_manage']."</td>";		
		echo "<td class='border_set' >".$user['menu_manage']."</td>";
		echo "<td class='border_set' >".$user['database_manage']."</td>";
		echo "<td class='border_set' >".$user['report_manage']."</td>";
		echo "<td class='border_set' >".$user['user_manage']."</td>";
		echo "<td class='border_set' >".anchor('user_c/user_manage/'.$user['id'],'Select')."</td></tr>";
    }
	echo "</table>";
	echo $this->pagination->create_links();
}
else
echo "No User Exist&nbsp;&nbsp<small>".anchor('loader_c/load_user_add','Add user')."</small>";

if($this->session->userdata('message'))
	echo "<br /><h3>".$this->session->userdata('message')."</h3>";

?>