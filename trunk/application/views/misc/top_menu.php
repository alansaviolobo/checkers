<?php
if ($this->session->userdata('user_info'))
{
    $user_info = array ();
    $user_info = $this->session->userdata('user_info');

    echo "<table id='tbl_menu'><tr>";
    foreach ($user_info as $key=>$value)
    {
        if ($key == 'username')
        {
            echo "<td>Logged In As: <strong>".$value."</strong> (<i>";
        }
        if ($key == 'designation')
        {
            echo $value."</i>)&nbsp;&nbsp;<u>".anchor('user_c/user_logout', 'Logout')."<td id='userinfo'>&nbsp;&nbsp;&nbsp;</td><td></td>";
        }
        if ($value == 'yes')
        {
            echo "<td id='menuinfo'>".anchor($key.'_c/index', "<div>".ucwords($key)."</div>")."</td>";
        }
    }
    echo "<tr></table>";
}
?>
