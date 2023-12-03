<?php
include 'varsheaders.php';
$selectQuery = $pdo->prepare('SELECT * FROM products');
$selectQuery->execute();
$products = $selectQuery->fetchAll(PDO::FETCH_CLASS, 'product');
