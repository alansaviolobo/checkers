<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            <?php
            echo $title;
            ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>resource/stylesheet/common.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>resource/stylesheet/calendar.css" />
        <script type="text/javascript" src="<?=base_url()?>resource/script/calendar.js">
        </script>
    </head>
    <body>
        <div id='container'>
            <table id='menu'><tr>
	        	<td valign='bottom'><img src="../../resource/image/Silken Sands Logo.png" width=200 height=100/></td>
                <td valign='bottom'><?php if ( isset ($section_menu)) $this->load->view($section_menu); ?></td>
                <td valign='top'><img src="../../resource/image/checkers_small.png" /></td>
            </tr></table>
            <div id='content'>
                <?php
                if ( isset ($section_content))
                {
                    $this->load->view($section_content);
                }
                ?>
            </div>
            <p>
                <?php
                if ( isset ($message))
                {
                    echo "<span style=\"font-size:small; color: green; padding:10px;\">".$message."</span>";
                }
                ?>
            </p>
        </div>
    </body>
</html>
