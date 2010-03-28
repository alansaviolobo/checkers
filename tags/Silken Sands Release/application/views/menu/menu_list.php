<?php
$attributes = array ('name' => 'frm_menu_list' );
echo form_open ( 'menu_c/main', $attributes );

echo "<p><span id='topic'>Menu<span>&nbsp;&nbsp;|&nbsp;";
echo anchor ( 'loader_c/menu_add', 'New' ) . "&nbsp;|&nbsp;";
echo anchor ( 'menu_c/menu_purchase', 'Purchase' ) . "&nbsp;|</p>";
echo "<p>Select Section : " . form_dropdown ( 'ddl_source_type', array ('Food' => 'Food', 'Beverages' => 'Beverages', 'Bar' => 'Bar' ), $source_type, "onchange='this.form.submit()'," ) . "</p>";

if (isset ( $results ) && isset ( $source_type )) {
	echo "<p>" . $source_type . " Items : &nbsp;" . $results . "</p>";
}

if (isset ( $menu_items )) {
	$quantity = 0;
	echo "<table cellpadding='3' cellspacing='3' class='border_set' style=\"border-collapse: collapse;\">";
	echo "<tr><th class='back_color'>Item name</th>";
	if (isset ( $source_type )) {
		if ($source_type == 'Bar') {
			echo "<th class='back_color'>Quantity</th>";
		}
	}
	echo "<th class='back_color'>Cost</th>";
	echo "<th class='back_color'>&nbsp;</th></tr>";
	foreach ( $menu_items as $m ) {
		echo "<tr><td class='border_set'><b><i>" . $m ['name'] . "</i></b></td>";
		if (isset ( $source_type )) {
			if ($source_type == 'Bar') {
				$quantity = 0;
				foreach ( $ticket as $t ) {
					if ($m ['name'] == $t ['menu']) {
						$quantity = $t ['total'];
					}
				}
				echo "<td class='border_set'>" . $quantity . "</td>";
			}
		}
		echo "<td class='border_set'>" . $m ['cost'] . "</td>";
		echo "<td class='border_set'>" . anchor ( 'menu_c/menu_manage/' . $m ['name'], 'Edit' ) . "</td></tr>";
	}
	echo "</table>";
	echo $this->pagination->create_links ();
} else
	echo "No Menu Items Exist  <small>" . anchor ( 'loader_c/menu_add', 'Add Item' ) . "</small>";

echo form_close ();

?>
