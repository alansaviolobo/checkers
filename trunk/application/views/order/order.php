<?php

echo "<p><span style=\"font-size:large;\">Order</span>&nbsp;&nbsp;|&nbsp;";
echo anchor('order_c/order_list_table', 'Table')."&nbsp;|&nbsp;";
echo anchor('order_c/order_list_room', 'Room')."&nbsp;|</p>";

$attributes = array ('name'=>'frm_orders');
echo form_open('order_c/order_add', $attributes);

/**********************************
 *options to put an order
 **********************************/

unset ($dropdown_elements);
echo "<div id='wrapper' style=\"float:left;margin-left:7px;\">";
echo "<div id='order_options' style=\"background-color:#C3D9FF;width:365px;padding:10px;\">";
echo "<strong>Order Options<br /></strong>";
if ( isset ($categories))
{
    echo "<table cellpadding='3' cellspacing='3'>";
    echo "<tr><td>Items";
    if ( isset ($menu_items))
    {
        foreach ($menu_items as $item)
        {
            $dropdown_elements[$item['name']] = $item['name'];
        }
    }
    echo form_dropdown('ddl_items', $dropdown_elements, '')."</td>";
    unset ($dropdown_elements);
}
echo "<td>".form_label('Quantity', 'txt_quantity');
for ($i = 1; $i < 51; $i++)
{
    $quantity[$i] = $i;
}
echo form_dropdown('txt_quantity', $quantity)."</td>";

$order_type = $this->session->userdata('order_type');
if ($order_type == 'table')
{
    unset ($dropdown_elements);
    for ($i = 1; $i < 51; $i++)
    {
        $dropdown_elements['Table No. '.$i] = 'Table No. '.$i;
    }
    echo "<td>Table No&nbsp;&nbsp;";
}
else if ($order_type == 'room')
{
    unset ($dropdown_elements);
    /*for ($i = 100; $i < 151; $i++)
    {
        $dropdown_elements['Room No. '.$i] = 'Room No. '.$i;
    }*/
	$dropdown_elements = array(5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,11=>11,12=>12,
	101=>101,102=>102,103=>103,104=>104,105=>105,106=>106,107=>107,108=>108,109=>109,110=>110,111=>111,112=>112,
	201=>201,202=>202,203=>203,204=>204,205=>205,206=>206,207=>207,208=>208,209=>209,210=>210,211=>211,212=>212);
    echo "<td>Room No&nbsp;&nbsp;";
}
echo form_dropdown('ddl_ordered_by', $dropdown_elements)."</td>";
echo "<td colspan='2' valign='bottom'>".form_submit('btn_add', 'Add')."</td><tr />";
echo "</table></div>";

/**********************************
 *fills the orders
 **********************************/

$ordered_by = array ();
echo "<div id='order_list' style=\"background-color:#FDBC9F;margin-top:10px;padding:10px;\">";
echo "<strong>Orders</strong><br /><br />";
if ( isset ($order_list))
{
    echo "<table class='border_set' style=\"border-collapse: collapse;\">";
    echo "<tr><th class='back_color'>Item name</th>";
    echo "<th class='back_color'>Qnty</th>";
    echo "<th class='back_color'>Ordered By</th>";
    echo "<th class='back_color' colspan='2'>Select</th></tr>";
    foreach ($order_list as $order)
    {
        echo "<tr><td class='border_set'>".$order['item_name']."</td>";
        echo "<td class='border_set'>".$order['quantity']."</td>";
        echo "<td class='border_set'>".$order['ordered_by']."</td>";
        echo "<td class='border_set' width='25px' align='center'>".anchor('order_c/order_delete/'.$order['id'], 'Del')."</td></tr>";
        //echo "<td class='border_set' width='25px' align='center'>".anchor('order_c/order_delete/'.$order['id'], 'Upd')."</td></tr>";
    }
    echo "</table>";
    echo $this->pagination->create_links();
}
else
{
    echo "No Menu Items Exist";
}
echo "</div>";
echo "</div>";

if ( isset ($orders))
{
    $room = array ();
    $table = array ();
    $c_tab = '';
    $c_rom = '';
    foreach ($orders as $o)
    {
        $c_tab = strpos(strtolower($o['ordered_by']), strtolower('Table'));
        $c_rom = strpos(strtolower($o['ordered_by']), strtolower('Room'));
        if ($c_tab !== false)
        {
            $table[$o['ordered_by']] = $o['ordered_by'];
        }
        if ($c_rom !== false)
        {
            $room[$o['ordered_by']] = $o['ordered_by'];
        }
    }
    $ordered_by = array_merge($table, $room);
}

/**********************************
 *bill section filled
 **********************************/

echo "<div style=\"float:left;margin-left:7px;background-color:#91BF36;padding:10px;\">";
echo "<strong>Bill<br /></strong>";
echo "<p>Ordered By :&nbsp;".form_dropdown('ddl_bill_dropdown', array_unique($ordered_by))."&nbsp;&nbsp;";
echo form_submit('check_ordered_by', 'Check')."</p>";
$cost = '';
$data = array (
'name'=>'txt_name',
'size'=>'40'
);

$w_list = array ();
if ( isset ($waiter_list))
{
    foreach ($waiter_list as $w)
    {
        $w_list[$w['name']] = $w['name'];
    }
}

if ( isset ($order_bill))
{
    echo "<p>Name :<br>".form_input($data)."</p>";
    echo "<p>Waiter No :&nbsp;".form_dropdown('ddl_waiter_name', $w_list)."<p/>";
    echo "<table cellpadding='3' cellspacing='3' align='center' class='border_set' style=\"border-collapse: collapse;\">";
    echo "<tr><th class='back_color'>Item name</th>";
    echo "<th class='back_color'>Quantity</th>";
    echo "<th class='back_color'>Cost</th>";
    echo "<th class='back_color'>Select</th></tr>";
    foreach ($order_bill as $order_b)
    {
        echo "<tr><td class='border_set'>".$order_b['item_name']."</td>";
        echo "<td class='border_set'>".$order_b['quantity']."</td>";
        echo "<td class='border_set'>".$order_b['cost']."</td>";
        echo "<td class='border_set'><small>".anchor('order_c/order_delete/'.$order_b['id'], 'Delete')."</small></td></tr>";
        $cost = $cost+intval($order_b['cost']);
    }
    echo "</table><br /><br /><table>";
    echo "<tr><td>Subtotal: </td><td>".$cost."</td><tr>";
    echo "<tr><td>Discount: </td><td>".form_input('txt_discount', '0')." %</td></tr>";
    echo "<tr><td>Tax: </td><td>".form_input('txt_tax', '0')." %</td></tr>";
    echo "<tr><td>Pay By: </td><td>".form_dropdown('ddl_pay_by', array ('Cash'=>'Cash', 'Credit Card'=>'Credit Card', 'Room Sales'=>'Room Sales'))." </td></tr>";
    echo "</table><p>";
    $this->session->set_userdata('sub_total', $cost);
    echo "<a href='#' onclick=\"createbill();\">Print</a></p>";
}
echo "</div>";
echo form_close();
?>
