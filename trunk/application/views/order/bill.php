<div align='left' style="border:thin black solid; width:400px; overflow:visible;">
    <div align='center' style="width:400px;">
        <span style="font-size:28px">MANHATTAN</span>
        <br>
        <strong>Restaurant & Bar</strong>
        <br>
        <div style="font-size:10px; width:390px; border-bottom:thin black solid;padding-top:5px;padding-left:5px;">
            Plot No. 22 & 23, Adsurlim, Dando Ground, P.O. Benaulim
            <br>
            Salcete, Goa 403716
            <br>
            Tel: 0832-2789786-69-70  Email: silkensands@sancharnet.in
        </div>
    </div>
    <div align='left' style="padding-top:25px;width:400px;">
        <table cellpadding='3' style="width:inherit;">
            <tr>
                <td align='left'>
                    <strong>Date: </strong>
                    <u>
                        <?= date('d-m-y') ?>
                    </u>
                </td>
                <td align='right'>
                    <strong>Bill Number: </strong>
                    <u>
                        <?= $this->session->userdata('bill_number') ?>
                    </u>
                </td>
            </tr>
            <tr>
                <td colspan='2' style="padding-top:10px;padding-bottom:10px;border-collapse:collapse; border-bottom: thin black solid;">
                    <strong>Name: </strong>
                    <u>
                        <?= get_cookie('name'); ?>
                    </u>
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <u>
                        <?
                        if ( isset ($orders))
                        {
                            foreach ($orders as $order)
                            {
                                echo $order['ordered_by'];
                                break;
                            }
                        }
                        ?>
                    </u>
                </td>
                <td align='right'>
                    <strong>Waiter Name: </strong>
                    <u>
                        <?= get_cookie('waiter_name'); ?>
                    </u>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <div align='center' style="width:400px;">
        <table border='1' cellpadding='2' style="border-collapse: collapse;width:inherit;">
            <?
            $i = 0;
            if ( isset ($orders))
            {
                echo "<tr><th width=50>Sr. No.</th>";
                echo "<th>Item name</th>";
                echo "<th width=60>Quantity</th>";
                echo "<th width=50>Cost</th></tr>";
                foreach ($orders as $order)
                {
                    echo "<tr><td align='center'>".++$i."</td>";
                    echo "<td>".$order['item_name']."</td>";
                    echo "<td align='center'>".$order['quantity']."</td>";
                    echo "<td align='center'>".$order['cost']."</td></tr>";
                }
            }
            ?>
        </table>
    </div>
    <br>
    <div style="width:400px;height:150px;">
        <div style="width:200px; float:left;text-align:center">
            <span style="font-size:15px;">TIN NO: 30181105939</span>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <label style="border-top: thin black solid;">
                Prepared By
            </label>
        </div>
        <div style="width:200px; float:right;">
            <?
            echo "<table cellpadding='3' style=\"border-collapse:collapse;\">";
            if ( isset ($bill_details))
            {
                foreach ($bill_details as $b_d)
                {
                    echo "<tr><td align='right'><b>Sub Total: </b></td><td><u>Rs. ".$b_d['sub_total']."</u><br></td></tr>";
                    $after_discount = floatval(($b_d['sub_total']*$b_d['discount'])/100);
                    echo "<tr><td align='right'><b>Amt. Less Discount: </b></td><td><u>".$after_discount." </u><br></td></tr>";
					$dis = $b_d['sub_total'] - $after_discount;
					$tax_amount = floatval(($dis*$b_d['tax'])/100);
                    echo "<tr><td align='right'><b>Tax: </b></td><td><u>".$tax_amount." </u><br></td></tr>";
                    echo "<tr><td>&nbsp;</td></tr>";
                    echo "<tr><td align='right'><b>TOTAL: </b></td><td style=\"border-bottom: medium double black;\">Rs. ".intval($b_d['total'])."<br></td></tr>";
                    break;
                }
            }
            echo "</table>";
            ?>
        </div>
    </div>
	<br>
</div>
<!--script language='javascript'>
    window.print();
    window.close();
</script-->