<?php

echo "<h2>Order</h2>";

$attributes = array ('name'=>'frm_orders');
//$js = 'onload= DisableEnableForm(document.frm_orders);';
echo form_open('order_c/order_add', $attributes);
//, $js);
// fill the categories
$dropdown_elements = array ();
echo "<div id='categories' style=\"float:left;border:thin black solid;padding-right:10px;padding-left:5px;padding-top:5px;\">";
echo "<strong>Menu Items<br /><br /></strong>";
if ( isset ($categories))
{
	echo "<table cellpadding='3' cellspacing='3'>";
	foreach ($categories as $category)
	{
		echo "<tr><td><a href=\"\" onmouseover=\"javascript:DisableEnableForm(frm_orders);document.frm_orders.ddl_".$category['section'].".disabled=false;\">".$category['section']."<a/>&nbsp;</td>";
		if ( isset ($menu_items))
		{
			foreach ($menu_items as $item)
			{
				if ($item['section'] == $category['section'])
				{
					$dropdown_elements[$item['name']] = $item['name'];
				}
			}
		}
		echo "<td>:&nbsp;".form_dropdown('ddl_'.$category['section'], $dropdown_elements, '', 'disabled')."</td></tr>";
		unset ($dropdown_elements);
	}
	echo "</table>";
}
echo "</div>";
// the top menu
unset ($dropdown_elements);
echo "<div id='wrapper' style=\"float:left;margin-left:20px;margin-top:-10px;\">";
echo "<div id='menu' style=\"border:thin solid black;width:355px;padding-left:5px;padding-top:5px;\">";
echo "<strong>Menu Options<br /><br /></strong>";
echo "<table cellpadding='3' cellspacing='3'>";
echo "<tr><td>".form_label('Quantity', 'txt_quantity')."<br />";
for ($i = 1; $i < 50; $i++)
{
	$quantity[$i] = $i;
}
echo form_dropdown('txt_quantity', $quantity)."</td>";
echo "<td><a href=\"\" onmouseover=\"room(document.frm_orders)\">Room No<a/><br />";
for ($i = 100; $i < 150; $i++)
{
	$dropdown_elements['Room No. '.$i] = 'Room No. '.$i;
}
echo form_dropdown('ddl_room_no', $dropdown_elements)."</td>";
unset ($dropdown_elements);
for ($i = 1; $i < 50; $i++)
{
	$dropdown_elements['Table No. '.$i] = 'Table No. '.$i;
}
echo "<td><a  href=\"\" onmouseover=\"table(document.frm_orders)\">Table No<a/><br />";
echo form_dropdown('ddl_table_no', $dropdown_elements)."</td>";
echo "<td colspan='2' valign='bottom'>".form_submit('btn_add', 'Add')."</td><tr />";
echo "</table></div>";
// fill orders
$ordered_by = array ();
echo "<div id='order_list' style=\"margin-top:20px;padding-top:5px;padding-left:10px;\">";
echo "<strong><p>Orders</p></strong>";
echo "<table cellpadding='3' cellspacing='3'>";
if ( isset ($orders))
{
	echo "<table cellpadding='3' cellspacing='3' border='1'>";
	echo "<tr><th>Item name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Ordered By</th>";
	echo "<th>Select</th></tr>";
	foreach ($orders as $order)
	{
		echo "<tr><td>".$order['item_name']."</td>";
		echo "<td>".$order['quantity']."</td>";
		echo "<td>".$order['ordered_by']."</td>";
		echo "<td><small>".anchor('order_c/order_delete/'.$order['id'], 'Delete')."</small></td></tr>";
		$ordered_by[$order['ordered_by']] = $order['ordered_by'];
	}
	echo "</table>";
}
else
{
	echo "No Menu Items Exist";
}
echo "</table></div>";
echo "</div>";
// fill left hand side order check
echo "<div style=\"float:left;margin-left:20px;border:thin black solid;padding-left:5px;padding-top:5px;padding-right:5px;\">";
echo "<strong>Bill<br /></strong>";
echo "<p>Ordered By :&nbsp;".form_dropdown('ddl_bill_dropdown', array_unique($ordered_by))."&nbsp;&nbsp;";
echo form_submit('check_ordered_by', 'Check')."</p>";
$cost = '';
if ( isset ($order_bill))
{
	echo "<table cellpadding='3' cellspacing='3' border='1'>";
	echo "<tr><th>Item name</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost</th>";
	echo "<th>Select</th></tr>";
	foreach ($order_bill as $order_b)
	{
		echo "<tr><td>".$order_b['item_name']."</td>";
		echo "<td>".$order_b['quantity']."</td>";
		echo "<td>".$order_b['cost']."</td>";
		echo "<td><small>".anchor('order_c/order_delete/'.$order_b['id'], 'Delete')."</small></td></tr>";
		$cost = $cost+intval($order_b['cost']);
	}
	echo "</table><br /><table>";
	echo "<tr><td>Subtotal: </td><td>".$cost."</td><tr>";
	echo "<tr><td>Discount: </td><td>".form_input('txt_discount')." %</td></tr>";
	echo "<tr><td>Tax: </td><td>".form_input('txt_tax')." %</td></tr>";
	echo "</table><p>";
	$this->session->set_userdata('sub_total', $cost);
	echo "<a href='#' onclick=\"createbill();\">Print</a></p>";
}
echo "</div>";
echo form_close();
?>