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
        <script language="JavaScript" type="text/javascript">
            function print_bill(){
                var      tax = document.frm_bill_view.txt_tax.value;
                var     name = document.frm_bill_view.txt_name.value|"-";
                var discount = document.frm_bill_view.txt_discount.value;
                var   waiter = document.frm_bill_view.ddl_waiters.value|"-";
                var   source = document.frm_bill_view.ddl_order_hidden.value;
                window.showModalDialog('bill_print/' + discount + '/' + tax + '/' + waiter + '/' + source + '/' + name,null, 'dialogWidth:300px; dialogHeight:200px; center:yes; scroll:no; status:no');
            }
			
			function checkout(){
				window.showModalDialog('<?php echo base_url(); ?>'+'index.php/loader_c/room_checkout/',null, 'dialogWidth:300px; dialogHeight:200px; center:yes; scroll:no; status:no');
			}
        </script>
    </head>
    <body>
        <div id='container'>
            <table id='menu'><tr>
	        	<td valign='bottom'><img src="<?php echo base_url();?>/resource/image/Silken Sands Logo.png" width=200 height=100/></td>
                <td valign='bottom'><?php if ( isset ($section_menu)) $this->load->view($section_menu); ?></td>
                <td valign='top'><img src="<?php echo base_url();?>/resource/image/checkers_small.png" /></td>
            </tr></table>
            <?php
            echo "<p><span style=\"padding-left:10px\" id='topic'>Orders<span>&nbsp;&nbsp;|&nbsp;";
            echo anchor('order_c/select_source/table', 'Table')."&nbsp;|&nbsp;";
            echo anchor('order_c/select_source/room', 'Room')."&nbsp;|</p>";
            ?>
            <p>
                <?php
                if ( isset ($message))
                {
                    echo "<span style=\"font-size:small; font-weight:bold; color: red; padding:10px;\">".$message."</span>";
                }
                ?>
            </p>
            <div id='wrapper'>
                <div id='options'>
                    <?php
                    if ( isset ($section_options))
                    {
                        $this->load->view($section_options);
                    }
                    ?>
                </div>
                <div id='orders'>
                    <?php
                    if ( isset ($section_orders))
                    {
                        $this->load->view($section_orders);
                    }
                    ?>
                </div><br />
            </div>
            <div id="bill_view">
                <?php
                if ( isset ($section_bill_view))
                {
                    $this->load->view($section_bill_view);
                }
                ?>
            </div>
        </div>
    </body>
</html>
