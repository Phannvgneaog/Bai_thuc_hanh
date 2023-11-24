<?php

$exchangeRate = array(
  "USD" => 22,360,
  "EUR" => 27,368,
  "SGD" => 17,689,
  "JPY" => 120
);

$amount = $_GET["amount"];
$currency = $_GET["currency"];

echo "<h3>Exchange rate to VND</h3>";
echo "<table border='1'>
  <tr>
    <th>Currency</th>
    <th>Exchange rate</th>
  </tr>";
foreach ($exchangeRate as $currency => $rate) {
  echo "<tr>
    <td>$currency</td>
    <td>$rate</td>
  </tr>";
}
echo "</table>";

echo "<p>Số tiền $amount $currency là: <b>" . number_format($amount * $exchangeRate[$currency], 0, ',', '.') . " VND</b></p>";

?>
