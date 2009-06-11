<?php
$dropdown_elements = array();
echo "<strong>Options</strong><br />";

echo "<table cellspacing=5 cellpadding=5 id='tbl_options'>";
echo "<tr><td>Items<br />";
if ( isset ($menu))
{
    foreach ($menu as $m)
    {
        $dropdown_elements[$m['name']] = $m['name'];
    }
}
echo form_dropdown('ddl_menu', $dropdown_elements, '')."</td>";

echo "<td>Qnty<br />";
for ($i = 1; $i < 51; $i++)
{
    $quantity[$i] = $i;
}
echo form_dropdown('txt_quantity', $quantity)."</td>";

$source_type = $this->session->userdata('source_type');

if ($source_type == 'table')
{
    unset ($dropdown_elements);
    for ($i = 1; $i < 51; $i++)
    {
        $dropdown_elements['Table No. '.$i] = 'Table No. '.$i;
    }
    echo "<td>Tables&nbsp;&nbsp;<br/>";
}
else if ($source_type == 'room')
{
    unset ($dropdown_elements);
    $dropdown_elements = array ('Room No. 5'=>'Room No. 5', '6'=>'Room No. 6', 'Room No. 7'=>'Room No. 7', 'Room No. 8'=>'Room No. 8', 'Room No. 9'=>'Room No. 9', 'Room No. 10'=>'Room No. 10', 'Room No. 11'=>'Room No. 11', 'Room No. 12'=>'Room No. 12',
    'Room No. 101'=>'Room No. 101', 'Room No. 102'=>'Room No. 102', 'Room No. 103'=>'Room No. 103', 'Room No. 104'=>'Room No. 104', 'Room No. 105'=>'Room No. 105', 'Room No. 106'=>'Room No. 106', 'Room No. 107'=>'Room No. 107', 'Room No. 108'=>'Room No. 108', 'Room No. 109'=>'Room No. 109', 'Room No. 110'=>'Room No. 110', 'Room No. 111'=>'Room No. 111', 'Room No. 112'=>'Room No. 112',
    'Room No. 201'=>'Room No. 201', 'Room No. 202'=>'Room No. 202', 'Room No. 203'=>'Room No. 203', 'Room No. 204'=>'Room No. 204', 'Room No. 205'=>'Room No. 205', 'Room No. 206'=>'Room No. 206', 'Room No. 207'=>'Room No. 207', 'Room No. 208'=>'Room No. 208', 'Room No. 209'=>'Room No. 209', 'Room No. 210'=>'Room No. 210', 'Room No. 211'=>'Room No. 211', 'Room No. 212'=>'Room No. 212',
    'Room. Boss'=>'Room. Boss');
    echo "<td>Rooms&nbsp;&nbsp;<br/>";
}
echo form_dropdown('ddl_source', $dropdown_elements)."</td>";
echo "<td colspan='2' valign='bottom'>".form_submit('btn_order', 'Order')."</td><tr />";
echo "</table>";

?>
