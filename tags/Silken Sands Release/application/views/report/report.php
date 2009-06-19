<?php
$attributes = array ('name'=>'frm_report');
echo form_open('report_c/main', $attributes);

echo "<span id='topic'>Report</span>";
echo "<br/><p>Daily Report : ".form_submit('btn_daily','Daily')."</p><hr /><br />";
echo "<strong>Select Report Type</strong>&nbsp;".form_dropdown('ddl_report_type', array ('Sales'=>'Sales','Bills'=>'Bills'))."<br /><br />";

echo "<table cellpadding='3' cellspacing='3'><tr>";
echo "<td>From : <input type='text' name='txt_from_date' onclick=\"displayDatePicker('txt_from_date');\" /></td><td>&nbsp;</td>";
echo "<td>To : <input type='text' name='txt_to_date' onclick=\"displayDatePicker('txt_to_date');\"/></td></tr></table><br />";

echo form_submit('btn_create_report', 'Create');


echo form_close();
?>
