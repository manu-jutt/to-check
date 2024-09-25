<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Quantity:</label><br>
        <input type="number" name="quantity"><br>
        <input type="submit" value="Total">    
    </form>
</body>
</html>
<?php
    $item = "Pizza";
    $price = 1680;
    $quantity = $_POST["quantity"];

    echo "You have ordered {$quantity} {$item} <br>";

    $total = $quantity * $price;

    echo "Your total is Rs.{$total}";
?>