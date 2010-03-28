<?php
echo "<strong>Orders</strong><br /><br />";
if (isset ( $orders ) && $orders != null) {
	echo "<table cellspacing=5 cellpadding=5 class='border_set' id='tbl_orders'>";
	echo "<tr><th class='back_color'>Item name</th>";
	echo "<th class='back_color'>Qnty</th>";
	echo "<th class='back_color'>Ordered By</th>";
	echo "<th class='back_color' colspan='2'>&nbsp;</th></tr>";
	foreach ( $orders as $o ) {
		echo "<tr><td class='border_set'>" . $o ['menu'] . "</td>";
		echo "<td class='border_set'>" . $o ['quantity'] . "</td>";
		echo "<td class='border_set'>" . $o ['source'] . "</td>";
		echo "<td class='border_set' width='25px' align='center'>" . anchor ( 'order_c/order_delete/' . $o ['id'], 'Del' ) . "</td>";
	}
	echo "</table>";
	echo $this->pagination->create_links ();
} else {
	echo "No Menu Items Exist";
}
?>
