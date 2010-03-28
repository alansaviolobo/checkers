<?php
echo "<script language='javascript'>";
echo "function checkform(form) {";
echo "if (form.ddl_source_bar.value == '') { alert('Please select Category'); return false; };";
echo "if (form.txt_quantity.value == '') { alert('Please enter a quantity'); return false; };";
echo "return true;";
echo "}";
echo "</script>";
$bar_items = array ('' => 'Select One' );
foreach ( $menu as $m )
	$bar_items [$m ['name']] = $m ['name'];

$jsarray = 'var ticket = {';
foreach ( $ticket as $t )
	$jsarray .= "'{$t['menu']}':{$t['total']},";
$jsarray .= '};';

echo "<script>";
echo "function changeqty(item) {";
echo "$jsarray\n";
echo "document.getElementById('current').value = ticket[item]|0;";
echo "}";
echo "</script>";
echo form_open ( 'menu_c/menu_purchase_insert', array ('name' => 'frm_menu_purchase', 'onsubmit' => 'return checkform(this)' ) );
echo "<h2>Purchase Menu Items</h2>";
echo "<table cellpadding='3' cellspacing='3'>";
echo "<tr><td>" . form_label ( 'Item', 'ddl_source_bar' ) . "</td>";
echo "<td>" . form_dropdown ( 'ddl_source_bar', $bar_items, '', "onchange='changeqty(this.value)'" ) . "</td></tr>";
echo "<tr><td>" . form_label ( 'Current Quantity', 'current' ) . "</td>";
echo "<td>" . form_input ( 'current', '', "id='current' size='5' readonly" ) . "</td></tr>";
echo "<tr><td>" . form_label ( 'Quantity', 'txt_quantity' ) . "</td>";
echo "<td>" . form_input ( array ('name' => 'txt_quantity', 'size' => '5' ) ) . "</td></tr>";
echo "<tr><td colspan='2'>" . form_submit ( 'btn_purchase', 'Update' ) . "</td></tr>";
echo "</table>";
echo form_close ();
?>