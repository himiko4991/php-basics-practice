<?php
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo "割引価格: " . $discount_amount . "<br>";
echo "最終価格: " . $final_price;

?>

