<?php
include('varsheaders.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $serial = $_POST['serial'];
    //POST Content

    $name = $_POST['name'];
    $categoryName = $_POST['categoryName'];
    $brand = $_POST['brand'];
    $status = $_POST['status'];
    $salary = $_POST['salary'];
    $offer = $_POST['offer'];


    $errors = [];
    if (isset($_FILES['img'])) {
        //FILE Content
        $imageName = $_FILES['img']['name'];
        $imgNameArr = explode('.', $imageName);
        $imageNameEncrypted = bin2hex(random_bytes(32));
        $imgExt = end($imgNameArr);
        $dbImageName = 'ITI-' . $imageNameEncrypted . '.' . $imgExt;
        $allowedExt = ['png', 'jpg', 'jpeg', 'gif'];
        $imageTmp = $_FILES['img']['tmp_name'];
        $imageSize = $_FILES['img']['size'];
    } else {
        $dbImageName = $_POST['img'];
    }
    if (empty($errors)) {
        //here everything is ok
        $insertQuery = $pdo->prepare("UPDATE products SET  name=:name,categoryName=:categoryName,brand=:brand,img=:img,status=:status,salary=:salary ,offer=:offer WHERE serial=:serial");
        $insertQuery->bindParam(':serial', $serial);
        $insertQuery->bindParam(':name', $name);
        $insertQuery->bindParam(':categoryName', $categoryName);
        $insertQuery->bindParam(':brand', $brand);
        $insertQuery->bindParam(':img', $dbImageName);
        $insertQuery->bindParam(':status', $status);
        $insertQuery->bindParam(':salary', $salary);
        $insertQuery->bindParam(':offer', $offer);
        $insertQuery->execute();
        if (isset($_FILES['img'])) {
            move_uploaded_file($imageTmp, "./img/$dbImageName");
        }

        header('Location:allProducts.php');
    } else {
        echo 'Upload valid image';
    }
} else {
    header('Location:addProduct.php');
}
