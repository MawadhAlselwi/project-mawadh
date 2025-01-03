<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "db_php";
$dbType="mysql";
try{
    $conn = "$dbType:host=$host;dbname=$dbName;charset=utf8mb4";
    $pdo=new PDO($conn,$userName,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Succesful";
}
catch(Exception $e){
echo "failed". $e->getmessage();
}

