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