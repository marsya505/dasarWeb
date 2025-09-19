<?php
$price = 120000;
$discountRate = 0.20;
$finalPrice = $price;

if ($price > 100000) {
    $discount = $price * $discountRate;
    $finalPrice = $price - $discount;
}

echo "Product Price: Rp " . $price . "<br>";
echo "Discount: 20%<br>";
echo "Price after discount: Rp $finalPrice";
?>
