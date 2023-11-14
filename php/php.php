<?php
$exchangeRate = array("USD"=>22380, "EUR"=>27308, "SGD"=>17088, "JPY"=>120);
if (isset($_GET['amount'])) {
  $amount = $_GET['amount'];
  $currency = $_GET['currency'];
  echo "$amount USD is equal to " . number_format($amount * $exchangeRate[$currency], 0) . " VND";
}
?>
