<?php
include('varsheaders.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //POST Content
    $serial = $_POST['serial'];
    $name = $_POST['name'];
    $categoryName = $_POST['categoryName'];
    $brand = $_POST['brand'];
    $status = $_POST['status'];
    $salary = $_POST['salary'];
    $offer = $_POST['offer'];

    //FILE Content
    $imageName = $_FILES['img']['name'];
    $imgNameArr = explode('.', $imageName);
    $imageNameEncrypted = bin2hex(random_bytes(32));
    $imgExt = end($imgNameArr);
    $dbImageName = 'ITI-' . $imageNameEncrypted . '.' . $imgExt;
    $allowedExt = ['png', 'jpg', 'jpeg', 'gif'];
    $imageTmp = $_FILES['img']['tmp_name'];
    $imageSize = $_FILES['img']['size'];

    if (in_array($imgExt, $allowedExt)) {
        //here everything is ok
        $insertQuery = $pdo->prepare("INSERT INTO products (serial,name,categoryName,brand,img,status,salary,offer) VALUES (:serial,:name,:categoryName,:brand,:img,:status,:salary,:offer)");
        $insertQuery->bindParam(':serial', $serial);
        $insertQuery->bindParam(':name', $name);
        $insertQuery->bindParam(':categoryName', $categoryName);
        $insertQuery->bindParam(':brand', $brand);
        $insertQuery->bindParam(':img', $dbImageName);
        $insertQuery->bindParam(':status', $status);
        $insertQuery->bindParam(':salary', $salary);
        $insertQuery->bindParam(':offer', $offer);
        $insertQuery->execute();
        move_uploaded_file($imageTmp, "./img/$dbImageName");
        header('Location:allProducts.php');
    } else {
        echo 'Upload valid image';
    }
} else {
    header('Location:addProduct.php');
}
// include 'varsheaders.php';
$selectQuery = $pdo->prepare('SELECT * FROM products');
