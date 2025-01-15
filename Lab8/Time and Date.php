<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset ="UTF8" >
<title>FUNCTONS</title>
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
<h2 id="h2">Functions Time and Date</h2>
<h4 class="title">DATE</h4>
<?php 
//**********************************(date())*************************************************

echo date("Y-m-d"),"<br>"; //  2025-01-15
echo date("H:i:s"),"<hr>"; //  11:13:16
?>

<h4 class="title">TIME</h4>
<?php 
//**********************************(time())********************************************************
//الوقت الحالي عداد الثواني من  1970

echo time(),"<hr>"; // 1736935996
?>

<h4 class="title">STRTO TIME</h4>
<?php 
//**********************************( strtotime())***************************************************

// Unix تحوّل النصوص النصية إلى 

echo strtotime("next Monday"),"<hr>"; // 1737327600
?>

<h4 class="title">MKTIME</h4>
<?php 
//**********************************(mktime())******************************************************
//إنشاء توقيت معين

echo mktime(15, 30, 0, 1, 14, 2025),"<hr>"; //1737327600

?>

<h4 class="title">GET DATE</h4>
<?php 
//**********************************(getdate())****************************************************

//تُرجع معلومات عن التاريخ الحالي أو التاريخ المقدم.
print_r(getdate());
//Array ( [seconds] => 29 [minutes] => 15 [hours] => 11 [mday] => 15 [wday] => 3 [mon] => 1 [year] => 2025 [yday] => 14 [weekday] => Wednesday [month] => January [0] => 1736936129 )

?>

<h4 class="title">DATE TIME</h4>
<?php 
//**********************************( DateTime ())**************************************************
//إنشاء كائن DateTime:

$date = new DateTime("2025-01-15");
echo $date->format("Y-m-d H:i:s");
echo "<br>";
//2025-01-15 00:00:00

$date->modify("+1 day"); 
echo $date->format("Y-m-d"),"<hr>";
// 2025-01-16
?>

<h4 class="title">CHECK DATE</h4>
<?php 
//**********************************(checkdate())**************************************************
//للتحقق إذا كان التاريخ صحيحًا

if (checkdate(1, 15, 2025)) {
echo "تاريخ صحيح";

} else {
echo "تاريخ غير صحيح";
}
//تاريخ صحيح
?>
</body>
</html>