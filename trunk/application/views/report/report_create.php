<?php

$attributes = array ('name'=>'frm_report_create');
echo form_open('report_c/report_create', $attributes);

echo "<h2>Create Report</h2>";
$js = 'onchange="check_daily()"';
echo "<strong>Select Report Type</strong>&nbsp;".form_dropdown('ddl_report_type',array('Daily'=>'Daily','Bills'=>'Bills','Sales'=>'Sales','Bar'=>'Bar','Beverages'=>'Beverages','Food'=>'Food'),'',$js);
$js_from = "onclick=\"javascript:showCal('cal_from_date')\"";
$js_to = "onclick=\"javascript:showCal('cal_to_date')\"";
echo "<p>From&nbsp;:&nbsp;";
echo form_input('txt_from_date',date('Y-m-d'),$js_from)."&nbsp;&nbsp;&nbsp;";
echo "To&nbsp;:&nbsp;";
echo form_input('txt_to_date',date('Y-m-d'),$js_to)."</p>";

echo form_submit('btn_create_report', 'Create');


echo form_close();

?>
