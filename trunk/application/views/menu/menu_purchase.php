<?php
echo form_open('menu_c/menu_purchase_insert', array ('name'=>'frm_menu_purchase'));

echo "<h2>Purchase Menu Items</h2>";
if ( isset ($menu))
{
    echo "<table cellpadding='3' cellspacing='3'>";
	
	$quantity = 0;
	
    echo "<tr><td>".form_label('Section', 'ddl_source_type')."</td>";
    $dropdown_elements = array ();
    foreach ($menu as $m)
    {
        $dropdown_elements[$m['name']] = $m['name'];
		if(isset($ticket))
		{
			foreach($ticket as $t)
			{
				if($m['name']==$t['menu'])
				{
					$quantity = $t['total'];
				}
			}
		}
    }
    echo "<td>".form_dropdown('ddl_source_bar', $dropdown_elements)."</td></tr>";
	
    echo "<tr><td>".form_label('Existing Quantity')."</td>";
    echo "<td>".form_label($quantity)."</td></tr>";

    echo "<tr><td>".form_label('Quantity', 'txt_quantity')."</td>";
    echo "<td>".form_input( array ('name'=>'txt_quantity', 'size'=>'5'))."</td></tr>";

    echo "<tr><td colspan='2'>".form_submit('btn_purchase', 'Update')."</td></tr>";
    echo "</table>";
}

echo form_close();
?>
