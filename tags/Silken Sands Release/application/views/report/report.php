<?php echo form_open('report_c/generate_report', array ('name'=>'frm_report')); ?>
<span id='topic'>Report</span>
<br/><br />
<strong>Select Report Type : </strong>
<?php echo form_radio('report_type', 'Sales', true); ?> Sales
&nbsp;&nbsp;&nbsp;
<?php echo form_radio('report_type', 'Purchases'); ?> Purchases
<br /><br />
From : <?php echo form_input('from_date', date('Y-m-d'), "onclick=\"displayDatePicker('from_date')\""); ?>
&nbsp;&nbsp;&nbsp;
To : <?php echo form_input('to_date', date('Y-m-d'), "onclick=\"displayDatePicker('to_date')\""); ?>
<br /><br />
<?php echo form_submit('btn_create_report', 'Create'); ?>
<?php echo form_close(); ?>
<hr/>
<?php echo form_open('report_c/show_bill_details'); ?>
<span id='topic'>Bill Details</span>
<br/>
<strong>Show Bill Details for Bill Number: </strong>
<?php echo form_input('bill_number', null, "size=5") . form_submit('btn_bill_details', 'Display') . form_close(); ?>
<?php if (isset($bill) and !empty($bill)) : ?>
<table>
<tr>
<td style="border-left: 1px solid;border-top: 1px solid">Bill No.</td>
<td style="border-right: 1px solid;border-top: 1px solid"><?= $bill->number ?></td>
</tr>
<tr>
<td style="border-left: 1px solid;">Date</td>
<td style="border-right: 1px solid;"><?= $bill->date ?></td>
</tr>
<tr>
<td style="border-left: 1px solid;">KOT</td>
<td style="border-right: 1px solid;"><?= $bill->kots ?>&nbsp;</td>
</tr>
<tr>
<td style="border-left: 1px solid;">Payment Mode</td>
<td style="border-right: 1px solid;"><?= $bill->paymentmode ?></td>
</tr>
<?php if (isset($bill->items)) foreach($bill->items as $item) { ?>
<tr>
<td style="border: 1px solid;"><?= $item->name . ' x ' . $item->quantity ?></td>
<td style="border: 1px solid;"><?= $item->cost ?></td>
</tr>
<?php } ?>
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
</table>
<?php
elseif (isset($bill)) :
	echo "Bill does not exist!";
endif;
?>