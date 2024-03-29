<?php
echo "<script language='JavaScript' type='text/javascript'>";
echo "function print_bill() {";
echo "var discount = document.frm_bill_view.txt_discount.value;";
echo "var tax = document.frm_bill_view.txt_tax.value;";
echo "var waiter = document.frm_bill_view.ddl_waiters.value|'-';";
echo "var name = document.frm_bill_view.txt_name.value|'-';";
echo "var source = document.frm_bill_view.ddl_order_hidden.value;";
echo "window.showModalDialog('bill_print/' + discount + '/' + tax + '/' + waiter + '/' + source + '/' + name);";
echo "}";
echo "</script>";

$source_list = array('' => 'Change');
if ( isset ($sources))
{
    $source_list += array_unique($sources);
}
echo "<strong>Bill</strong><br />";
echo form_open('order_c/main', array('name' => 'frm_bill_view'));
echo "<input type='hidden' name='ddl_order_hidden' value='$source'>";
echo "<p>Ordered By : $source ".form_dropdown('ddl_order_source', $source_list, '', "onChange='this.form.submit()'");

$cost = 0;

$w_list = array ();
if ( isset ($waiters))
{
    foreach ($waiters as $w)
    {
        $w_list[$w['name']] = $w['name'];
    }
}

if ( isset ($orders_source))
{
    echo "<p>&nbsp;Name :&nbsp;".form_input( array ('name'=>'txt_name', 'size'=>'30'))."</p>";
    echo "<p>Waiter :&nbsp;".form_dropdown('ddl_waiters', $w_list)."<p/>";
    echo "<table cellpadding=5 cellspacing=5 align='center' class='border_set' style=\"border-collapse: collapse;\">";
    echo "<tr><th class='back_color'>Item name</th>";
    echo "<th class='back_color'>Quantity</th>";
    echo "<th class='back_color'>Cost</th>";
    echo "<th class='back_color'>&nbsp;</th></tr>";
    foreach ($orders_source as $o)
    {
        echo "<tr><td class='border_set'>".$o['menu']."</td>";
        echo "<td class='border_set'>".$o['quantity']."</td>";
        echo "<td class='border_set'>".$o['cost']."</td>";
        echo "<td class='border_set'><small>".anchor('order_c/order_delete/'.$o['id'], 'Delete')."</small></td></tr>";
        $cost = $cost+intval($o['cost']);
    }
    echo "</table><br /><br /><table>";
    echo "<tr><td align='right'>Subtotal :&nbsp;</td><td><label id='lbl_cost'>".$cost."</label></td><tr>";
    echo "<tr><td align='right'>Discount :&nbsp;</td><td>".form_input('txt_discount', '0')." %</td></tr>";
    echo "<tr><td align='right'>Tax :&nbsp;</td><td>".form_input('txt_tax', '0')." %</td></tr>";

    echo "</table>";
    $this->session->set_userdata('subtotal', $cost);
    echo "<p align='center'><a id='btn_print' href='#' onclick=\"print_bill();\">Print</a></p>";

    if ($this->session->userdata('source_type') == 'table')
    {
        echo "<hr />";
        $pay_by = array ('Cash'=>'Cash', 'Credit Card'=>'Credit Card');
        echo "<p align='center'>Pay By :&nbsp;".form_dropdown('ddl_pay_by', $pay_by)."&nbsp;&nbsp;".form_submit('btn_close_bill', 'Close Bill')."</p>";
    }
}
echo form_close();
?>
