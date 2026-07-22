<?php

$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;
echo "商品名: $product_name<br>";
echo "単価: " . $price . "円<br>";
echo "数量: " . $quantity . "個<dr>";
echo "小計: " . $subtotal . "円<dr>";
echo "消費税: " . ($tax_rate * 100) . "%): " . $tax_amount . "円<dr>";
echo "合計金額: " . $total . "円<dr>";

?>

<?php

$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price*$discount_rate;
$final_price = $original_price-$discount_amount;

echo "割引価格: " . $discount_amount;
echo "最終価格: " . $final_price;



?>



