<?php
$form = array(
	'formOpen' => form_open('BillArchive'),
	'rest' => form_radio('bill_cat', 'rest', TRUE),
	'room' => form_radio('bill_cat', 'room'),
	'fromdate' => form_input('from_date', date('Y-m-d'), "onclick=\"displayDatePicker('from_date')\""),
	'todate' => form_input('to_date', date('Y-m-d'), "onclick=\"displayDatePicker('to_date')\""),
	'submit' => form_submit('btn_create_report', 'View'),
	'formClose' => form_close()
);
$body = null;
if (isset($bills))
	foreach($bills as $bill)
	{
		$dellink = $stealth ? '<td>'.anchor('BillArchive/delbill/'.$bill['number'], 'delete').'</td>' : null;
		$print = "<a onclick=\"window.showModalDialog('BillArchive/printbill/{$bill['number']}');\">print</a>";
		$body .= "<tr align=center>
					<td>{$bill['disp_no_cat']}{$bill['disp_no_num']}</td>
					<td>{$bill['dated']}</td>
					<td>{$bill['beverages']}</td>
					<td>{$bill['food']}</td>
					<td>{$bill['bar']}</td>
					<td>{$bill['subtotal']}</td>
					<td>{$bill['discount']}</td>
					<td>{$bill['tax']}</td>
					<td>{$bill['total']}</td>
					<td>{$bill['paid']}</td>
					<td>$print</td>
					$dellink</td>
				</tr>";
	}
?>
<span id='topic'>Bill Archive</span>
<br/>
<?=@$message; ?>
<br />
<?=$form['formOpen']; ?>
Show :
<?=$form['rest']; ?> Restaurant
&nbsp;&nbsp;&nbsp;
<?=$form['room']; ?> Rooms
&nbsp;&nbsp;&nbsp;
bills from :
&nbsp;&nbsp;&nbsp;
<?=$form['fromdate']; ?>
&nbsp;&nbsp;&nbsp;
To : <?=$form['todate']; ?>
&nbsp;&nbsp;&nbsp;
<?=$form['submit']; ?>
<?=$form['formClose']; ?>
<hr/>
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
		<?php if($stealth) echo "<th>&nbsp;</th>"; ?>
	</tr>
<?=$body; ?>
</table>