<?php
// 変数の定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

// 計算処理
$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;


// 結果の表示
echo "<div class='line'>商品名: {$product_name}</div>";
echo "<div class='line'>単価: {$price}円</div>";
echo "<div class='line'>数量: {$quantity}個</div>";
echo "<div class='line'>小計: {$subtotal}円</div>";
echo "<div class='line'>消費税(10%): {$tax_amount}円</div>";
echo "<div class='total'>合計金額: {$total}円</div>";
?>

