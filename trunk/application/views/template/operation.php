<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            <?php
            echo $title;
            ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/css/operation.css" />
        <script type="text/javascript" src="<?=base_url()?>resources/js/cal2.js">
        </script>
        <script type="text/javascript" src="<?=base_url()?>resources/js/cal_conf2.js">
        </script>
        <script language="JavaScript" type="text/javascript">         
            function createbill(){
                document.cookie = 'discount=' + document.frm_orders.txt_discount.value
                document.cookie = 'tax=' + document.frm_orders.txt_tax.value
                if (document.frm_orders.ddl_pay_by[0].selected) 
                    var pay = 'Cash';
                else 
                    if (document.frm_orders.ddl_pay_by[1].selected) 
                        var pay = 'Credit';
                document.cookie = 'pay_by=' + pay
                
                var get_index = document.frm_orders.ddl_waiter_no.selectedIndex
                document.cookie = 'waiter_no=' + document.frm_orders.ddl_waiter_no[get_index].value
                document.cookie = 'name=' + document.frm_orders.txt_name.value
				
                window.showModalDialog('bill_print');
            }
        </script>
    </head>
    <body>
        <div id='container'>
            <div id='menu' style="background: url(<?=base_url()?>resources/image/checkers_small.png) 100% 0 no-repeat;">
                <?php
                if ( isset ($menu))
                $this->load->view($menu);
                ?>
            </div>
            <div id='content'>
                <?php
                if ( isset ($content))
                $this->load->view($content);
                ?>
            </div>
        </div>
    </body>
</html>
