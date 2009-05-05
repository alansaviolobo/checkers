<?php
echo "<table cellpadding='3' cellspacing='3' border='1'>";
echo "<tr><td colspan='4' valign='center'><h2>MANHATTAN</h2><br />";
echo "Restaurant and Bar</td></tr>";
echo "<tr><td>Bill Number: </td><td>" . $this->session->userdata('bill_number') . "</td></tr>";
echo "<tr><td>Name: </td><td></td></tr>";
echo "<tr><td>Ordered By: </td><td></td></tr>";
echo "<tr><td>Date: </td><td></td>";
echo "<td>Time: </td><td></td></tr>";
if (isset ($orders))
{
  echo "<tr><th>Item name</th>";
  echo "<th>Quantity</th>";
  echo "<th>Ordered By</th>";
  echo "<th>Cost</th></tr>";
  foreach ($orders as $order)
  {
    echo "<tr><td>" . $order['item_name'] . "</td>";
    echo "<td>" . $order['quantity'] . "</td>";
    echo "<td>" . $order['ordered_by'] . "</td>";
    echo "<td>" . $order['cost'] . "</td></tr>";
  }
}
echo "<tr><td colspan='2'></td></tr>";
if (isset ($bill_details))
{
  foreach ($bill_details as $b_d)
  {
    echo "<tr><td>Sub Total: </td><td>" . $b_d['sub_total'] . "</td></tr>";
    echo "<tr><td>Discount: </td><td>" . $b_d['discount'] . " %</td></tr>";
    echo "<tr><td>Tax: </td><td>" . $b_d['tax'] . " %</td></tr>" ;
    break;
  }
}
echo "</table>";
?>