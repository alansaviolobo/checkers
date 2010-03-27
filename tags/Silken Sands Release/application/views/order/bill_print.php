<div align='left' style="width:760px; overflow:visible;">
    <div align='center' style="width:760px;">
        <span style="font-size:28px">MANHATTAN</span>
        <br>
        <strong>Restaurant & Bar</strong>
        <br>
        <div style="font-size:9px; width:755px; border-bottom:2px black solid;padding-top:5px;">
            Plot No. 22 & 23, Adsurlim, Dando Ground, P.O. Benaulim
            <br>
            Salcete, Goa 403716
            <br>
            Tel: 0832-2789786-69-70  Email: silkensands@sancharnet.in
        </div>
    </div>
    <div align='left' style="padding-top:15px;width:760px;font-size:12px">
        <table cellpadding='3' style="width:inherit;font-size:12px">
        	<tr>
                <td align='left'>
                <?= "<strong>$details->source</strong> served by <strong>$details->waiter</strong>" ?>
                </td>
                <td align='right'>
                	Name:
                    <strong><?= $details->name; ?></strong>
                </td>
            </tr>
            <tr>
                <td align='left'>
                    Date:
                    <strong><?= date('F j, Y', strtotime($details->dated)); ?></strong>
                </td>
                <td align='right'>
                    Bill Number:
                    <strong><?= $details->disp_no_cat.$details->disp_no_num;?></strong>
                </td>
            </tr>
            <tr>
                <td align='left' style="padding-top:8px;padding-bottom:12px;border-collapse:collapse; border-bottom: 2px black solid;font-size:12px">
                    Time:
                    <strong><?= date('g:i a', strtotime($details->dated)); ?></strong>
                </td>
                <td align='right'style="padding-top:8px;padding-bottom:12px;border-collapse:collapse; border-bottom: 2px black solid;font-size:12px">
                    KOT No.:
					<strong>
                	<?php
						$kots = null;
						foreach ($orders as $os) $kots .= $os['kot_numbers'] . ',';
						$kots = array_unique(array_filter(explode(',', $kots)));
						sort($kots);
						echo implode(',', $kots);
					?>
					</strong>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <div align='center' style="width:760px;font-size:12px">
        <table border='2' cellpadding='2' style="border: 1px black solid;border-collapse: collapse;width:inherit;font-size:12px">
            <?
            $i = 0;
            if ( isset ($orders))
            {
                echo "<tr><th style=\"width:12%\">Sr. No.</th>";
                echo "<th align='left'>Item name</th>";
                echo "<th style=\"width:12%\">Qnty</th>";
                echo "<th style=\"width:12%\">Cost</th></tr>";
                foreach ($orders as $o)
                {
                    echo "<tr><td align='center'>".++$i."</td>";
                    echo "<td align='left'>".$o['menu']."</td>";
                    echo "<td align='center'>".$o['quantity']."</td>";
                    echo "<td align='center'>".$o['cost']."</td></tr>";
                }
            }
            ?>
        </table>
    </div>
    <br>
    <div style="width:760px;height:150px;font-size:12px">
        <div style="width:125px; float:left;text-align:center">
            <span style="font-size:12px;">TIN NO: 30181125939</span>
            <br><br><br><br><br><br><br>
            <label style="border-top: thin black solid;">
                Prepared By
            </label>
        </div>
        <div style="width:300px; float:right;font-size:12px;">
            <?
            echo "<table cellpadding='3' style=\"border-collapse:collapse;font-size:12px\">";
            if ( isset ($details))
            {
                echo "<tr><td align='right'><b>Sub Total: </b></td><td><u>Rs. ".$details->subtotal."</u><br></td></tr>";
                echo "<tr><td align='right'><b>Amt. after Discount: </b></td><td><u>Rs. ".floatval($details->subtotal-$details->discount)." </u><br></td></tr>";
                echo "<tr><td align='right'><b>Tax: </b></td><td><u>Rs. ".$details->tax." </u><br></td></tr>";
                echo "<tr><td>&nbsp;</td></tr>";
                echo "<tr><td align='right'><b>TOTAL: </b></td><td style=\"border-bottom: medium double black;font-size:14px;\">Rs. ".intval($details->total)."<br></td></tr>";
            }
            echo "</table>";
            ?>
        </div>
    </div>
    <br>
</div>
<script language='javascript'>
//    window.print();
    <?php if(isset($url)) echo "window.onunload { this.opener.location = '$url' }"; ?>
//    window.close();
</script>
