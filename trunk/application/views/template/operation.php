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
                
                var get_index = document.frm_orders.ddl_waiter_name.selectedIndex
                document.cookie = 'waiter_name=' + document.frm_orders.ddl_waiter_name[get_index].value
                document.cookie = 'name=' + document.frm_orders.txt_name.value
                
                window.showModalDialog('bill_print');
            }
            
            function check_daily(){
                if (document.frm_report_create.ddl_report_type[0].selected) {
                    var currentTime = new Date()
                    var month = currentTime.getMonth() + 1
                    var day = currentTime.getDate()
                    var year = currentTime.getFullYear()
                    if (month < 10) {
                        month = "0" + month
                    }
                    if (day < 10) {
                        day = "0" + day
                    }
                    var daily_date = year + "-" + month + "-" + day
                    
                    document.frm_report_create.txt_from_date.value = daily_date
                    document.frm_report_create.txt_to_date.value = daily_date
                    
                    document.frm_report_create.txt_from_date.onclick = null
                    document.frm_report_create.txt_to_date.onclick = null
                }
                else {
                    document.frm_report_create.txt_from_date.value = ""
                    document.frm_report_create.txt_to_date.value = ""
                }
            }
            
            function check_quantity(sample){
                if (sample.value == "Bar") {
                    document.frm_menu.txt_quantity.disabled = false
                }
                else {
                    document.frm_menu.txt_quantity.disabled = true
                }
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
