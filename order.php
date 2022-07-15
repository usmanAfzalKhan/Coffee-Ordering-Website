<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usman Khan Assignment 5</title>
        <link rel="stylesheet"type="text/css" href="style.css">
    </head>
    <body>
        <h1>Thanks for your order<h1>
        <?php
        $coffeeNum = $_POST['coffee'];
        $creamNum = $_POST['creams'];
        $sugarNum = $_POST['sugar'];
        $creamNumPrice = 0.10*$creamNum;
        $coffeeNumPrice = $coffeeNum*1.89 + $creamNumPrice;
        $size = $_REQUEST["size"];
        if ($size == "small"){
            for ($i=1; $i<=$creamNum; $i++){
                echo '<img src="cream.jpg" width="100" height="100">';}
            for ($i=1; $i<=$sugarNum; $i++){
                echo '<img src="sugar.jpg"  width="100" height="100">';}
            for ($i=1; $i<=$coffeeNum; $i++){
                echo '<img src="coffee.jpg"  width="100" height="100">';}
            echo "<br><br>";
            $coffeeSizePrice = 0;
            $beforeTax = $coffeeNumPrice * 0.13;
            $bill = $coffeeNumPrice + $beforeTax + $creamNumPrice;
            $billRounded =round($bill, 2);
            echo "Bill : <br>";
            echo "Coffee Price: $" . $coffeeNumPrice . "*" .$coffeeNum;
            echo "<br>";
            echo "TAX";
            echo "<br>";
            echo "Final Bill: $".$billRounded;}
        else if($size == "medium"){
            for ($i=1; $i<=$creamNum; $i++){
                echo '<img src="cream.jpg" width="200" height="200">';}
            for ($i=1; $i<=$sugarNum; $i++){
                echo '<img src="sugar.jpg"  width="200" height="200">';}
            for ($i=1; $i<=$coffeeNum; $i++){
                echo '<img src="coffee.jpg"  width="200" height="200">';}
            echo "<br><br>";
            $coffeeSizePrice = 1.00;
            $beforeTax = $coffeeNumPrice * 0.13;
            $bill = $coffeeNumPrice + $beforeTax + $coffeeSizePrice + $creamNumPrice;
            $billRounded =round($bill, 2);
            echo "Bill : <br>";
            echo "Coffee Price :$" . $coffeeNumPrice . "*" .$coffeeNum;
            echo "<br>";
            echo "Coffee Size Price: $" . $coffeeSizePrice;
            echo "<br>";
            echo "TAX";
            echo "<br>";
            echo "Final Bill: $".$billRounded;}
        else if($size == "large"){
            for ($i=1; $i<=$creamNum; $i++){
                echo '<img src="cream.jpg" width="300" height="300">';}
            for ($i=1; $i<=$sugarNum; $i++){
                echo '<img src="sugar.jpg"  width="300" height="300">';}
            for ($i=1; $i<=$coffeeNum; $i++){
                echo '<img src="coffee.jpg"  width="300" height="300">';}
            echo "<br><br>";
            $coffeeSizePrice = 2.00;
            $beforeTax = $coffeeNumPrice * 0.13;
            $bill = $coffeeNumPrice + $beforeTax + $coffeeSizePrice + $creamNumPrice;
            $billRounded =round($bill, 2);
            echo "Bill : <br>";
            echo "Coffee Price :$" . $coffeeNumPrice . "*" .$coffeeNum;
            echo "<br>";
            echo "Coffee Size Price: $" . $coffeeSizePrice;
            echo "<br>";
            echo "TAX";
            echo "<br>";
            echo "Final Bill: $".$billRounded;}
        else{
            for ($i=1; $i<=$creamNum; $i++){
                echo '<img src="cream.jpg" width="400" height="400">';}
            for ($i=1; $i<=$sugarNum; $i++){
                echo '<img src="sugar.jpg"  width="400" height="400">';}
            for ($i=1; $i<=$coffeeNum; $i++){
                echo '<img src="coffee.jpg"  width="400" height="400">';}
            echo "<br><br>";
            $coffeeSizePrice = 3.00;
            $beforeTax = $coffeeNumPrice * 0.13;
            $bill = $coffeeNumPrice + $beforeTax + $coffeeSizePrice + $creamNumPrice;
            $billRounded =round($bill, 2);
            echo "Bill : <br>";
            echo "Coffee Price :$" . $coffeeNumPrice . "*" .$coffeeNum;
            echo "<br>";
            echo "Coffee Size Price: $" . $coffeeSizePrice;
            echo "<br>";
            echo "TAX";
            echo "<br>";
            echo "Final Bill: $".$billRounded;}   
        ?>
    </body>
</html>