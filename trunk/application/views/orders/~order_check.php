<?php
$attributes = array ('name'=>'frm_order_check');
echo form_open('orders_controller/get_order_by', $attributes);

echo "<strong>Bill<br /></strong>";
$ordered = array ();
if ( isset ($ordered_by))
{
    foreach ($ordered_by as $ob)
    {
        $ordered[$ob['ordered_by']] = $ob['ordered_by'];
    }
}
echo "<p>Ordered By :&nbsp;".form_dropdown('ddl_bill_dropdown', array_unique($ordered))."&nbsp;&nbsp;";
echo form_submit('check_ordered_by', 'Check')."</p>";
if ( isset ($order_bill))
{
    echo "<table cellpadding='3' cellspacing='3' border='1'>";
    echo "<tr><th>Item name</th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost</th></tr>";
    foreach ($order_bill as $order_b)
    {
        echo "<tr><td>".$order_b['item_name']."</td>";
        echo "<td>".$order_b['quantity']."</td>";
        echo "<td>".$order_b['cost']."</td></tr>";
    }
    echo "</table>";
}

echo form_close();
?>
