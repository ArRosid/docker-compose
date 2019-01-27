<!DOCTYPE html>
<html>
<head>
    <title>Website</title>    
</head>
<body>
    <h1>Welcom to my shop</h1>
    <?php
        $json = file_get_contents('http://product-service/');
        $obj = json_decode($json);

        $products = $obj -> products;
        foreach ($products as $product) {
            echo "<li>$product</li>";
        }
    ?>
</body>
</html>