<?php

$attributes = array ('name'=>'frm_report_create');
echo form_open('report_c/report_create', $attributes);

echo "<h2>Create Report</h2>";

echo "<hr /><br/>";

echo "<strong>Report - Sales</strong><br/>";
$cat_elements = array();
if(isset($categories))
{
	foreach($categories as $cat)
	$cat_elements[$cat['section']] = $cat['section'];
}
echo "<p>Select Category : ".form_dropdown('ddl_category',$cat_elements)."</p>";

echo "<p><a href=\"javascript:showCal('cal_from_date')\">From</a>&nbsp;:&nbsp;";
echo form_input('txt_from_date')."&nbsp;&nbsp;&nbsp;";
echo "<a href=\"javascript:showCal('cal_to_date')\">To</a>&nbsp;:&nbsp;";
echo form_input('txt_to_date')."</p>";

echo form_submit('btn_create_report','Create');


echo form_close();

?>