<?php

require "conn_db.php";
$email= $password ='';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    try{
    if(empty($_POST['email'])){
        header ("Location: Sing_in.php?error=Email is required");
        exit;
     }
     else{
 $email= htmlspecialchars(trim($_POST['email']));
 if(empty($_POST['password'])){
     header ("Location: Sing_in.php?error=Password is required");
     exit;
  }
  else{
 $password=htmlspecialchars(trim($_POST['password']));
$stmt=$pdo->prepare("SELECT * FROM t_count WHERE Email=:email");
$stmt->bindParam(':email',$email,PDO::PARAM_STR);
$stmt->execute();

$user=$stmt->fetch(PDO::FETCH_ASSOC);
if($user ){
    if ( password_verify($password,$user['Password']))
    {
        session_start();
        $_SESSION['email']=$user['email'];
        $_SESSION['password']=$user['password'];
    header("Location:main.php");
    exit;
 }
else{
    header ("Location: Sing_in.php?error=Invaild password ");
    exit;
}
}else{
    header ("Location: Sing_in.php?error=User not found ");
    exit;  
 }}
     }}
     catch(Exception $e){
        echo "failed". $e->getmessage;
        }
    }
?>

