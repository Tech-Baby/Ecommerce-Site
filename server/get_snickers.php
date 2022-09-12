<?php

include('server/connection.php');

$stmt =$conn->prepare("SELECT * FROM products WHERE product_category= 'snickers' LIMIT 4 ");
$stmt->execute();
$snickers_products =$stmt->get_result();

















?>