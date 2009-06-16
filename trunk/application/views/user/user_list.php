<?php

echo "<span id='topic'>User</span>&nbsp;&nbsp;&nbsp;".anchor('loader_c/user_add', 'New User')."<br /><br />";

if ( isset ($users))
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
    echo "<th class='back_color_1'>&nbsp;</th></tr>";
    foreach ($users as $u)
    {
        echo "<tr><td class='border_set' ><b><i>".$u['name']."</i></b></td>";
        echo "<td class='border_set' >".$u['username']."</td>";
        echo "<td class='border_set' >".$u['order_manage']."</td>";
        echo "<td class='border_set' >".$u['menu_manage']."</td>";
        echo "<td class='border_set' >".$u['database_manage']."</td>";
        echo "<td class='border_set' >".$u['report_manage']."</td>";
        echo "<td class='border_set' >".$u['user_manage']."</td>";
        echo "<td class='border_set' >".anchor('user_c/user_manage/'.$u['username'], 'Edit')."</td></tr>";
    }
    echo "</table>";
    echo $this->pagination->create_links();
}
else
    echo "No User Exist&nbsp;&nbsp".anchor('loader_c/user_add', 'Add user')."";
?>