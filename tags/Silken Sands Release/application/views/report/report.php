<?php
$form = array (
	'formOpen' => form_open ( 'report_c', array ('name' => 'frm_report' ) ),
	'sales' => form_radio ( 'report_type', 'Sales', TRUE ),
	'purchases' => form_radio ( 'report_type', 'Purchases' ),
	'fastMoving' => form_radio ( 'report_type', 'FastMoving' ),
	'taxvalue' => form_input ( 'taxvalue', 0, "size=2" ),
	'fromdate' => form_input ( 'from_date', date ( 'Y-m-d' ), "onclick=\"displayDatePicker('from_date')\"" ),
	'todate' => form_input ( 'to_date', date ( 'Y-m-d' ), "onclick=\"displayDatePicker('to_date')\"" ),
	'submit' => form_submit ( 'btn_create_report', 'View' ),
	'formClose' => form_close () );
?>
<span id='topic'>Report</span>
<br />
<br />
<?=$form ['formOpen'];?>
<strong>Select Report Type : </strong>
<?=$form ['fastMoving'];?> Fast Moving
&nbsp;&nbsp;&nbsp;
<?=$form ['purchases'];?> Purchases
&nbsp;&nbsp;&nbsp;
<?=$form ['sales'];?> Sales with tax @ <?=$form ['taxvalue'];?> %
<br />
<br />
From : <?=$form ['fromdate'];?>
&nbsp;&nbsp;&nbsp;
To : <?=$form ['todate'];?>
<br />
<br />
<?=$form ['submit'];?>
<?=$form ['formClose']; ?>