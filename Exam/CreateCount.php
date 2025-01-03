<?php
require "conn_db.php";
$name = $password =$C_Pass= $email = $phone = $gender ='';
if($_SERVER['REQUEST_METHOD'] =="POST"){
    if(empty($_POST['name'])){
       header ("Location: Sing_up.php?error=Name is required");
       exit;
    }
    else{
$name= htmlspecialchars(trim($_POST['name']));
if(empty($_POST['password'])){
    header ("Location: Sing_up.php?error=Password is required");
    exit;
 }
 else{
$password=htmlspecialchars(trim($_POST['password']));
$C_Pass=htmlspecialchars(trim($_POST['C_Pass']));
if(empty($_POST['email'])){
    header ("Location: Sing_up.php?error=Email is required");
    exit;
 }
 else{
$email=htmlspecialchars(trim($_POST['email']));
$phone=htmlspecialchars(trim($_POST['phone']));
$gender=htmlspecialchars(trim($_POST['gender']));
if($gender==='Male' ||$gender=== 'Female'){
if( $password === $C_Pass ){
    if(empty($_POST['phone'])){  
        $pass_hash=password_hash(htmlspecialchars(trim($_POST['password'])),PASSWORD_DEFAULT);  

        $check_query="select * from t_count WHERE Name= :name or Email=:email ";
        $check=$pdo->prepare($check_query);
        $check->execute([
            'name' => $name,
            'email'=> $email
            ]);
            if($check->rowCount()>0)
            {
                header ("Location: Sing_up.php?success=User already exists");
            }else{
        $insert="INSERT INTO t_count
         (Name,Password,Email,Phone,Gender) 
         values(:name,:pass_hash,:email,:phone,:gender)";
        $add = $pdo->prepare($insert);

        $add->execute([
        'name' => $name,
        'pass_hash'=>$pass_hash,
        'email'=> $email,
        'phone'=> $phone,
        'gender'=> $gender
        ]);

       header ("Location: Sing_up.php?success=Done Successful");
       exit;
     }}
     else{

  if(preg_match('/^(77|78|73|70|71)\d{7}$/',$phone)){
    $pass_hash=password_hash(htmlspecialchars(trim($_POST['password'])),PASSWORD_DEFAULT);  
    
    $check_query="select * from t_count WHERE Name= :name or Email=:email ";
    $check=$pdo->prepare($check_query);
    $check->execute([
        'name' => $name,
        'email'=> $email
        ]);
        if($check->rowCount()>0)
        {
            header ("Location: Sing_up.php?success=User already exists");
        }else{
$insert="INSERT INTO t_count
 (Name,Password,Email,Phone,Gender) 
 values(:name,:pass_hash,:email,:phone,:gender)";
$add = $pdo->prepare($insert);
$add->execute([
'name' => $name,
'pass_hash'=>$pass_hash,
'email'=> $email,
'phone'=> $phone,
'gender'=> $gender
]);
header ("Location: Sing_up.php?success=Done Successful");
}}else{
    header ("Location: Sing_up.php?error=Please verify your phone number");
}}}
else{
    header ("Location: Sing_up.php?error=Please verify your password ");}
}}}}}
?>