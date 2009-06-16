<?php
if ($this->session->userdata('user_info'))
{
    $user_info = array ();
    $user_info = $this->session->userdata('user_info');

    echo "<table id='tbl_menu'><tr>";
    foreach ($user_info as $key=>$value)
        if ($key == 'username')
            echo "<td>Logged In as: <strong>".$value."</strong>";
        elseif ($key == 'designation')
            echo  "<td id='userinfo'>(<i>$value</i>)&nbsp;&nbsp;".anchor('user_c/user_logout', 'Logout').'</td>';
        elseif ($value == 'yes')
            echo "<td id='menuinfo'>".anchor($key.'_c/index', ucwords($key))."</td>";
    echo "<tr></table>";
}
?>