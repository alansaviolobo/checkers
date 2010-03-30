<?php
$form = array ('formOpen' => form_open ( 'BillArchive' ), 'rest' => form_radio ( 'bill_cat', 'rest', TRUE ), 'room' => form_radio ( 'bill_cat', 'room' ), 'fromdate' => form_input ( 'from_date', date ( 'Y-m-d' ), "onclick=\"displayDatePicker('from_date')\"" ), 'todate' => form_input ( 'to_date', date ( 'Y-m-d' ), "onclick=\"displayDatePicker('to_date')\"" ), 'submit' => form_submit ( 'btn_create_report', 'View' ), 'formClose' => form_close () );
$body = null;
if (isset ( $bills ))
	foreach ( $bills as $onebill ) {
		$dellink = $editlink = null;
		if($stealth)
		{
			$dellink = '<td>' . anchor ( 'BillArchive/editbill/' . $onebill ['number'], 'edit' ) . '</td>';
			$editlink = '<td>' . anchor ( 'BillArchive/delbill/' . $onebill ['number'], 'delete' ) . '</td>';
		}
		$print = "<a href=# onclick=\"window.showModalDialog('BillArchive/printbill/{$onebill['number']}');return false;\">print</a>";
		$body .= "<tr align=center>
					<td>{$onebill['disp_no_cat']}{$onebill['disp_no_num']}</td>
					<td>{$onebill['dated']}</td>
					<td>{$onebill['beverages']}</td>
					<td>{$onebill['food']}</td>
					<td>{$onebill['bar']}</td>
					<td>{$onebill['subtotal']}</td>
					<td>{$onebill['discount']}</td>
					<td>{$onebill['tax']}</td>
					<td>{$onebill['total']}</td>
					<td>{$onebill['paid']}</td>
					<td>$print</td>
					$dellink
					$editlink
				</tr>";
	}
?>
<span id='topic'>Bill Archive</span>
<br />
<?=@$message;?>
<br />
<?=$form ['formOpen'];?>
Show :
<?=$form ['rest'];?> Restaurant
&nbsp;&nbsp;&nbsp;
<?=$form ['room'];?> Rooms
&nbsp;&nbsp;&nbsp;
bills from :
&nbsp;&nbsp;&nbsp;
<?=$form ['fromdate'];?>
&nbsp;&nbsp;&nbsp;
To : <?=$form ['todate'];?>
&nbsp;&nbsp;&nbsp;
<?=$form ['submit'];?>
<?=$form ['formClose'];?>
<? if (!is_null($body)) : ?>
<hr />
<table border=1 cellspacing=0 cellpadding=5>
	<tr>
		<th>id</th>
		<th>date</th>
		<th>beverages</th>
		<th>food</th>
		<th>bar</th>
		<th>subtotal</th>
		<th>discount</th>
		<th>tax</th>
		<th>total</th>
		<th>paid</th>
		<th>&nbsp;</th>
		<?php
		if (isset($stealth) and $stealth)
			echo "<th>&nbsp;</th><th>&nbsp;</th>";
		?>
	</tr>
<?=$body;?>
</table>
<?php endif; ?>
<hr />
<?php if (isset($bill)) : ?>
<form method="post">
<input type="hidden" name="bill_number" value="<?= $bill->number; ?>" />
<table id='bill'>
<tr>
<td style="border-left: 1px solid;border-top: 1px solid">Bill No.</td>
<td style="border-right: 1px solid;border-top: 1px solid"><?= $bill->dispnocat.$bill->dispnonum ?></td>
</tr>
<tr>
<td style="border-left: 1px solid;">Date</td>
<td style="border-right: 1px solid;"><?= current(split(' ', $bill->date)); ?></td>
</tr>
<tr>
<td style="border-left: 1px solid;">Payment Mode</td>
<td style="border-right: 1px solid;"><?= $bill->paymentmode ?></td>
</tr>
<tr>
<td style="border-left: 1px solid;">Subtotal</td>
<td style="border: 1px solid;"><?= $bill->subtotal ?></td>
</tr>
<tr>
<td style="border-left: 1px solid;">Discount</td>
<td style="border-left: 1px solid;border-right: 1px solid;"><?= $bill->discount ?></td>
</tr>
<tr>
<td style="border-left: 1px solid;">Tax</td>
<td style="border-left: 1px solid;border-right: 1px solid;"><?= $bill->tax ?></td>
</tr>
<tr>
<td style="border-left: 1px solid;border-bottom: 1px solid;">Total</td>
<td style="border: 1px solid;"><?= $bill->subtotal - $bill->discount + $bill->tax ?></td>
</tr>
<?php foreach($bill->items as $item) { ?>
<tr>
<td style="border: 1px solid;">
	<select name="item[]">
	<? foreach($menu_items as $menuitem)
		{
			$selected = $item->name == $menuitem['name'] ? " selected " : "";
			echo "<option $selected value='{$menuitem['name']}'>{$menuitem['name']}</option>";
		}
	?>
	</select>
</td>
<td style="border: 1px solid;">
	x <input size="2" type="text" name="qty[]" value="<?=$item->quantity; ?>" /> = <?= $item->cost; ?>/-
</td>
</tr>
<?php } ?>
</table>
<a href=# onclick="addRow();return false;">Add items</a>
<input type="submit" name="edit_submit" value="submit" />
</form>
<script>
function addRow()
{
	var tr = document.createElement('tr');
	tr.innerHTML = "<td colspan=2 style='border: 1px solid;'><select name='item[]'>"+
		"<? foreach($menu_items as $menuitem) echo "<option $selected value='{$menuitem['name']}'>{$menuitem['name']}</option>"; ?>"+
		"</select> x <input size='2' type='text' name='qty[]' value='' /></td>";
	document.getElementById('bill').appendChild(tr);
}
</script>
<?php endif; ?>