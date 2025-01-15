<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset ="UTF8" >
<title>System Expressions</title>
    <style>
  body{
    background-color:rgb(128,128,64);
    margin-left:20px;
    font-size:18px;
  }
  .title{
    color:white;
  }
  #h2{
    font-size:30px;
    color:rgb(130,140,140);
    text-align: center;
    text-shadow: -6px 4px 6px rgba(0, 0, 0, 0.8)
  }
    </style>
    
</head>
<body>
<h2 id="h2">System Expressions</h2>
<h4 class="title">Preg Match</h4>
<?php 
//**********************************(preg_match())*************************************************

//التتحقق من مطابقة النص مع نمط معين.

$pattern = "/\d+/";
$text = "عمره 25 سنة";
if (preg_match($pattern, $text, $matches)) {
echo "تم العثور على تطابق: " . $matches[0]; // تم العثور على تطابق: 25
} else {
echo "لا يوجد تطابق";
}
echo "<hr>";
?>

<h4 class="title">Preg Match All</h4>
<?php 
//**********************************(preg_match_all())********************************************************

//تبحث عن جميع التطابقات للنمط.

$pattern = "/\d+/";
$text = "عمري 25 وأخي 30";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]); // Array ( [0] => 25 [1] => 30 )
echo "<hr>";
?>

<h4 class="title">Preg Replace</h4>
<?php 
//**********************************( preg_replace())***************************************************

//تستبدل النصوص المطابقة لنمط معين.

$pattern = "/\d+/"; 
$text = "عمره 25 سنة";
$newText = preg_replace($pattern, "XX", $text);
echo $newText ,"<hr>"; // عمره XX سنة

?>

<h4 class="title">Preg Split</h4>
<?php 
//**********************************(preg_split())******************************************************

//تُقسّم النص باستخدام نمط معين كفاصل.

$pattern = "/[\s,]+/"; 
$text = "مرحبًا, كيف حالك؟";
$result = preg_split($pattern, $text);
print_r($result); // Array ( [0] => مرحبًا [1] => كيف [2] => حالك؟ )
echo "<hr>";
?>

<h4 class="title">Check Email</h4>
<?php 
//**********************************(Check Email)****************************************************

$email = "example@test.com";
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
if (preg_match($pattern, $email)) {
echo "البريد الإلكتروني صالح";
} else {
echo "البريد الإلكتروني غير صالح";
}
echo "<hr>";
//البريد الإلكتروني صالح
?>

<h4 class="title">Extract the Number </h4>
<?php 
//**********************************(Extract The Number From The Text )**************************************************

$text = "رقمي هو 123456789";
preg_match("/\d+/", $text, $matches);
echo $matches[0],"<hr>"; // 123456789
?>

<h4 class="title">Check Password</h4>
<?php 
//**********************************(Check Password)**************************************************

$password = "Passw0rd@123";
$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
if (preg_match($pattern, $password)) {
echo "كلمة المرور قوية";
} else {
echo "كلمة المرور ضعيفة";
}//كلمة المرور قوية
echo "<hr>";

?>
</body>
</html>