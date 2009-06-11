<?php
$attributes = array ('name'=>'frm_report');
echo form_open('report_c/main', $attributes);

echo "<h2>Report</h2>";
echo "<br/><p>".form_submit('btn_daily','Daily')."</p>";
echo "<br/><strong>Select Report Type</strong>&nbsp;".form_dropdown('ddl_report_type', array ('Sales'=>'Sales','Bills'=>'Bills'))."<br />";

echo "<table cellpadding='3' cellspacing='3'><tr>";
echo "<td><input type='text' name='txt_from_date' onclick=\"displayDatePicker('txt_from_date');\" /></td><td>&nbsp;&nbsp;&nbsp;</td>";
echo "<td><input type='text' name='txt_to_date' onclick=\"displayDatePicker('txt_to_date');\"/></td></tr></table>";

echo form_submit('btn_create_report', 'Create');


echo form_close();
?>
