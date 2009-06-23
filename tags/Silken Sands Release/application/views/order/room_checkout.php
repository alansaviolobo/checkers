<?php
echo form_open('order_c/room_checkout', array ('name'=>'frm_room_checkout'));
echo "<strong>Checkout</strong><br /><hr>";
echo "<p>Room No : ";
if ( isset ($sources))
{
	$data = array();
    foreach($sources as $s)
	{
		$data[$s['source']] = $s['source'];
	}echo form_dropdown('ddl_sources', $data);
}
echo "<br />";
echo "Payment Mode : ";
$data = array ('Room Sales'=>'Room Sales', 'Credit Card'=>'Credit Card', 'Cash'=>'Cash');
echo form_dropdown('ddl_payment_mode', $data);

echo form_submit('btn_checkout', 'Checkout');

if ( isset ($message))
{
    echo "<p>".$message."</p>";
}
echo form_close();
?>
