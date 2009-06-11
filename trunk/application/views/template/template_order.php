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
                document.cookie = 'discount=' + document.frm_orders.txt_discount.value
                document.cookie = 'tax=' + document.frm_orders.txt_tax.value
                var get_index = document.frm_orders.ddl_waiters.selectedIndex
                document.cookie = 'waiter=' + document.frm_orders.ddl_waiters[get_index].value
                document.cookie = 'name=' + document.frm_orders.txt_name.value
				var get_index = document.frm_orders.ddl_order_source.selectedIndex
				document.cookie = 'source=' + document.frm_orders.ddl_order_source[get_index].value

                window.showModalDialog('bill_print');
            }
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
            <?php
            $attributes = array ('name'=>'frm_orders');
            echo form_open('order_c/main', $attributes);
            echo "<p><span id='topic'>Orders<span>&nbsp;&nbsp;|&nbsp;";
            echo anchor('order_c/select_source/table', 'Table')."&nbsp;|&nbsp;";
            echo anchor('order_c/select_source/room', 'Room')."&nbsp;|</p>";
            ?>
            <p>
                <?php
                if(isset($message))
                {
                    echo $message;
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
                </div>
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
