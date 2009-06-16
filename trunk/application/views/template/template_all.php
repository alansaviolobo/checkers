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
            <div id='menu'>
                <?php
                if ( isset ($section_menu))
                {
                    $this->load->view($section_menu);
                }
                ?>
            </div>
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
                    echo $message;
                }
                ?>
            </p>
        </div>
    </body>
</html>
