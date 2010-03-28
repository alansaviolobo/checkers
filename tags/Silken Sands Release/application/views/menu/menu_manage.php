<?php
echo "<script language='javascript'>";
echo "function checkform(form) {";
echo "if (form.ddl_source_type.value == '') { alert('Please select Category'); return false; };";
echo "if (form.txt_name.value == '') { alert('Please enter a name'); return false; };";
echo "if (form.txt_cost.value == '') { alert('Please enter the cost'); return false; };";
echo "return true;";
echo "}";
echo "</script>";
echo form_open ( 'menu_c/menu_update', array ('name' => 'frm_menu_manage', 'onsubmit' => 'return checkform(this)' ) );

echo "<h2>Manage Exiting Menu Items</h2>";
if ($menu) {
	echo "<table cellpadding='3' cellspacing='3'>";
	echo form_hidden ( 'name', $menu->name );

	echo "<tr><td>" . form_label ( 'Section', 'ddl_source_type' ) . "</td>";
	$dropdown_elements = array ('Food' => 'Food', 'Beverages' => 'Beverages', 'Bar' => 'Bar' );
	echo "<td>" . form_dropdown ( 'ddl_source_type', $dropdown_elements, $menu->section ) . "</td></tr>";

	echo "<tr><td>" . form_label ( 'Name', 'txt_name' ) . "</td>";
	$data = array ('name' => 'txt_name', 'disabled' => 'disabled', 'value' => $menu->name );
	echo "<td>" . form_input ( $data ) . "</td></tr>";

	if ($menu->section == 'Bar') {
		if (isset ( $ticket )) {
			foreach ( $ticket as $t ) {
				if ($t ['menu'] == $menu->name) {
					echo "<tr><td>" . form_label ( 'Quantity' ) . "</td>";
					echo "<td>" . form_label ( $t ['total'] ) . "</td></tr>";
				}
			}
		}
	}

	echo "<tr><td>" . form_label ( 'Cost (Per Unit)', 'txt_cost' ) . "</td>";
	echo "<td>" . form_input ( 'txt_cost', $menu->cost ) . "</td><tr />";

	echo "<tr><td colspan='2'>" . form_submit ( 'btn_menu_update', 'Update' ) . "&nbsp";
	echo anchor ( 'menu_c/menu_delete/' . $menu->name . '/' . $menu->section, 'Delete', "onclick=\"return confirm('ARE YOU SURE YOU WANT TO DELETE THIS ITEM?\\nDeleting this item will also delete all related inventory.')\"" );
	echo "</td></tr></table>";
}
echo form_close ();
?>