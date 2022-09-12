<?php

include('server/connection.php');

$stmt =$conn->prepare("SELECT * FROM products WHERE product_category= 'bag' LIMIT 4 ");
$stmt->execute();
$bags_products =$stmt->get_result();









?>