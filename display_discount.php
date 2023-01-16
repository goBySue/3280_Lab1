<?php

//get the data from index.html 

$product_description = filter_input(INPUT_POST, 'product_description'); 
$list_price = filter_input(INPUT_POST, 'list_price');
$discount_percent = filter_input(INPUT_POST, 'discount_percent'); 

// calculate the discount and discounted amount 

$discount_amount = $list_price * $discount_percent *.01;
$discount_price = $list_price - $discount_amount;

// applying currency formatting to the dollar and percent amounts
$list_price_formatted = "$".number_format($list_price,2);
$discount_percent_formatted = $discount_percent."%";
$discount_amount_formatted = "$".number_format($discount_amount,2);
$discount_price_formatted = "$".number_format($discount_price,2);

?> 



<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description) ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Discount Percent:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amount_formatted ; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted ; ?></span><br>
    </main>
</body>
</html>