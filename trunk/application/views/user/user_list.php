<?php

echo "<h2>User List</h2><small>".anchor('loader_c/load_user_add','New User')."</small><br /><br />";

if (isset($users))
{
    echo "<table cellpadding='3' cellspacing='3' style=\"text-align:left;\">";
	echo "<tr><th>Name</th>";
	echo "<th>Username</th>";
	echo "<th>Order</th>";
	echo "<th>Menu</th>";
	echo "<th>Database</th>";
	echo "<th>Report</th>";
	echo "<th>User</th>";
	echo "<th>Select</th></tr>";
    foreach ($users as $user)
    {
    	echo "<tr><td>".$user['name']."</td>";
		echo "<td>".$user['username']."</td>";
		echo "<td>".$user['order_manage']."</td>";		
		echo "<td>".$user['menu_manage']."</td>";
		echo "<td>".$user['database_manage']."</td>";
		echo "<td>".$user['report_manage']."</td>";
		echo "<td>".$user['user_manage']."</td>";
		echo "<td>".anchor('user_c/user_manage/'.$user['id'],'Select')."</td></tr>";
    }
	echo "</table>";
}
else
echo "No User Exist&nbsp;&nbsp<small>".anchor('loader_c/load_user_add','Add user')."</small>";

if($this->session->userdata('message'))
	echo "<h3>".$this->session->userdata('message')."</h3>";

?>