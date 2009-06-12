<?php
$menu_elements = array('' => 'Select One');
if ( isset ($menu))
{
    foreach ($menu as $m)
    {
        $menu_elements[$m['name']] = $m['name'];
    }
}

$quantity = array('' => 'Select One');
for ($i = 1; $i < 51; $i++)
{
    $quantity[$i] = $i;
}

$source_type = $this->session->userdata('source_type');
if ($source_type == 'table')
{
    $source_elements = array('' => 'Select One');
    for ($i = 1; $i < 51; $i++)
    {
        $source_elements['Table No. '.$i] = 'Table No. '.$i;
    }
    $source_label = "Tables";
}
elseif ($source_type == 'room')
{
    $source_elements = array ('' => 'Select One',
    'Room No. 5'=>'Room No. 5', '6'=>'Room No. 6', 'Room No. 7'=>'Room No. 7', 'Room No. 8'=>'Room No. 8', 'Room No. 9'=>'Room No. 9', 'Room No. 10'=>'Room No. 10', 'Room No. 11'=>'Room No. 11', 'Room No. 12'=>'Room No. 12',
    'Room No. 101'=>'Room No. 101', 'Room No. 102'=>'Room No. 102', 'Room No. 103'=>'Room No. 103', 'Room No. 104'=>'Room No. 104', 'Room No. 105'=>'Room No. 105', 'Room No. 106'=>'Room No. 106', 'Room No. 107'=>'Room No. 107', 'Room No. 108'=>'Room No. 108', 'Room No. 109'=>'Room No. 109', 'Room No. 110'=>'Room No. 110', 'Room No. 111'=>'Room No. 111', 'Room No. 112'=>'Room No. 112',
    'Room No. 201'=>'Room No. 201', 'Room No. 202'=>'Room No. 202', 'Room No. 203'=>'Room No. 203', 'Room No. 204'=>'Room No. 204', 'Room No. 205'=>'Room No. 205', 'Room No. 206'=>'Room No. 206', 'Room No. 207'=>'Room No. 207', 'Room No. 208'=>'Room No. 208', 'Room No. 209'=>'Room No. 209', 'Room No. 210'=>'Room No. 210', 'Room No. 211'=>'Room No. 211', 'Room No. 212'=>'Room No. 212',
    'Room. Boss'=>'Room. Boss');
    $source_label = "Rooms";
}

echo "<script language='javascript'>";
echo "function checkoptions(form)";
echo "{";
echo "if (form.ddl_menu.value == '') { alert('Please select a menu item'); return false; };";
echo "if (form.txt_quantity.value == '') { alert('Please select a quantity'); return false; };";
echo "if (form.ddl_source.value == '') { alert('Please select a $source_type'); return false; };";
echo "return true;";
echo "}";
echo "</script>";
echo form_open('order_c/main', array ('name'=>'frm_orders', 'onsubmit'=>'return checkoptions(this)'));
echo "<table cellspacing=5 cellpadding=5 id='tbl_options'>";
echo "<strong>Options</strong><br />";
echo "<tr>";
echo "<td>Items<br />" . form_dropdown('ddl_menu', $menu_elements, '')."</td>";
echo "<td>Qnty<br />" . form_dropdown('txt_quantity', $quantity, '')."</td>";
echo "<td>$source_label<br />" . form_dropdown('ddl_source', $source_elements, '')."</td>";
echo "<td colspan='2' valign='bottom'>".form_submit('btn_order', 'Order')."</td>";
echo "</tr>";
echo "</table>";
echo form_close();
?>