<?php
  $password = $_POST["password"];
  $cat1 = $_POST["cat1"];
  $cat2 = $_POST["cat2"];
  $cat3 = $_POST["cat3"];
  $shipping = $_POST["shipping"];

  if($shipping == "1")
  {
    $shipping = "Free 7 Day";
    $shipPrice = 0;
  }
  else if($shipping == "2")
  {
    $shipping = "Over night";
    $shipPrice = 50;
  }
  else if($shipping == "3")
  {
    $shipping = "Three day";
    $shipPrice = 5;
  }
  $cat1Total = $cat1*10;
  $cat2Total = $cat2*20;
  $cat3Total = $cat3*30;
  $total = $cat1*10 + $cat2*20 + $cat3*30 + $shipPrice;
  echo "Welcome to the Receipt Printing Service!<br><br>";
  echo "Here is your totally not secure password: " . $password . "<br><br>";
  echo "--------------------RECEIPT--------------------<br>";
  echo "------------------------------------------------------<br>";

  echo "<table>";
  echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
  echo "<tr><td>Cat 1</d><td>$cat1</td><td>$10</td><td>$$cat1Total</td></tr>";
  echo "<tr><td>Cat 2</td><td>$cat2</td><td>$20</td><td>$$cat2Total</td></tr>";
  echo "<tr><td>Cat 3</td><td>$cat3</td><td>$30</td><td>$$cat3Total</td></tr>";
  echo "<tr><td>Shipping</td><td>$shipping</td><td></td><td>$$shipPrice</td></tr>";
  echo "<tr><td>Total Cost</td><td></td><td></td><td>$$total</td></tr></table>";
 ?>
