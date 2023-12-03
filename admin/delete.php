<?php

include('varsheaders.php');
$serial = $_GET['serial'];
$deleteQuery = $pdo->prepare('DELETE FROM products WHERE serial=:serial');
$deleteQuery->bindParam(':serial', $serial);
$deleteQuery->execute();
header('Location: allProducts.php');
