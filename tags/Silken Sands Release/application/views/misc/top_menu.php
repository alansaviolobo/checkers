<?php
if ($this->session->userdata('user_info'))
{
    $user_info = array ();
    $user_info = $this->session->userdata('user_info');

    echo "<div>";
    foreach ($user_info as $key=>$value)
        if ($key == 'username')
            echo "<span class='userinfo'>Logged In as: <strong>".$value."</strong>&nbsp;";
        elseif ($key == 'designation')
            echo  "(<i>$value</i>)&nbsp;&nbsp;".anchor('user_c/user_logout', 'Logout').'</span><br/><br/>';
        elseif ($value == 'yes')
            echo "<span class='menuinfo'>".anchor($key.'_c/index', ucwords($key))."</span>";
	echo "</div>";
}
?>