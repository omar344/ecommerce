<?php

try{
    $pdo =new PDO('mysql:host=localhost;dbname=e-commerce','root','' );
}catch (PDOException $ex){
    echo $ex->getMessage();
}