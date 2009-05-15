<?php

echo "<span style=\"font-size: large;border-bottom:medium dotted pink;\">User List</span>&nbsp;&nbsp;&nbsp;".anchor('loader_c/load_user_add','New User')."<br /><br />";

if (isset($users))
{
    echo "<table cellpadding='3' cellspacing='3' class='border_set' style=\"border-collapse: collapse;\">";
	echo "<tr><th class='back_color' rowspan='2'>Name</th>";
	echo "<th class='back_color' rowspan='2'>Username</th>";
	echo "<th class='back_color' colspan='6'>Access Privileges</th></tr>";
	echo "<tr>";
	echo "<th class='back_color_1' >Order</th>";
	echo "<th class='back_color_1' >Menu</th>";
	echo "<th class='back_color_1' >Database</th>";
	echo "<th class='back_color_1' >Report</th>";
	echo "<th class='back_color_1'>User</th>";
	echo "<th class='back_color_1'>Select</th></tr>";
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
echo "No User Exist&nbsp;&nbsp".anchor('loader_c/load_user_add','Add user')."";

if($this->session->userdata('message'))
	echo "<br /><h3>".$this->session->userdata('message')."</h3>";

?>