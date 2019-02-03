<?php
$dsn = "mysql:host=localhost;dbname=bloodbank_framework;charset=utf8mb4";
$options =[];
$username= "root";
$password="";
try{
    $options=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES=>FALSE

    ];

    $pdo= new PDO($dsn ,$username,$password,$options);
}catch(Exception $e){
    throw new PDOException($e->getMessage(),$e->getCode());
}