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
        <script type="text/javascript" src="<?=base_url()?>resources/js/cal2.js"></script>
        <script type="text/javascript" src="<?=base_url()?>resources/js/cal_conf2.js"></script>
        <script language="JavaScript" type="text/javascript">
            function room(){
                document.frm_orders.ddl_room_no.disabled = false;
                document.frm_orders.ddl_table_no.disabled = true;
            }
            
            function table(){
                document.frm_orders.ddl_room_no.disabled = true;
                document.frm_orders.ddl_table_no.disabled = false;
            }
            
            function DisableEnableForm(xForm){
                objElems = xForm.elements;
                for (i = 0; i < objElems.length; i++) {
                    switch (objElems[i].name) {
                        case "btn_add":
                            break;
                        case "txt_quantity":
                            break;
                        case "ddl_bill_dropdown":
                            break;
                        case "check_ordered_by":
                            break;
						case "txt_discount":
                            break;
						case "txt_tax":
                            break;
                        default:
                            objElems[i].disabled = true;
                            break;
                    }
                }
            }
			
			function createbill()
			{
				document.cookie = 'discount='+document.frm_orders.txt_discount.value
				document.cookie = 'tax='+document.frm_orders.txt_tax.value
				window.showModalDialog('bill_print');
			}
        </script>
    </head>
    <body onload= DisableEnableForm(document.frm_orders)>
        <div id='container'>
            <div id='menu'>
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
