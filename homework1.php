<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset ="UTF8" >
<title>PHP if Statement Demo</title>
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
<h2 id="h2">HomeWork 1 </h2>
<h4 class="title">VARIABLES</h4>
<?php 
//**********************************(VARIABLES)*************************************************

$name= 'Mawadh Alselwi.'; //a strin
echo "Name: ".$name ,"<hr>"; // Name: Mawadh Alselwi.
?>

<h4 class="title">IF</h4>
<?php 
//**********************************(IF)********************************************************
    $x=10; //an integer
    $y=20; //an integer
 if( $x>$y ){
    $message=' x is greater than y ' ;
}elseif( $x<$y ){
    $message=' x is less than y ' ;
}else{
    $message=' x is equal to y ' ;
}
    echo$message,"<hr>"; //x is less than y
?>

<h4 class="title">SWITCH</h4>
<?php 
//**********************************(SWITCH)***************************************************
    $role='admin' ;
    switch($role){
    case 'admin' :
    $message='Welcome Admin! ';
    break;
    case 'editor' :
    $message=' Welcome! Editor ' ;
    break;
    case 'author ' :
    $message='Welcome! Author ' ;
    break;
    case 'subscriber ' :
    $message='Welcome! Subscriber' ;
    break;
    default:
    $message='You are not authorized to access this page' ;
    }
    echo $message,"<hr>"; //Welcome admin! 
?>

<h4 class="title">FOR</h4>
<?php 
//**********************************(FOR)******************************************************
$total=0;
for( $i=1; $i<=10; $i++){
$total+= $i ;
}
echo $total,"<hr>"; //55
?>

<h4 class="title">WHILE</h4>
<?php 
//**********************************(WHILE)****************************************************
$total=0;
$number=1;
while($number<=15):
$total+=$number ;
$number++;
endwhile;
echo $total ,"<hr>"; //120
?>

<h4 class="title">DO WHILE</h4>
<?php 
//**********************************(DO WHILE)**************************************************
$i=10;
do{
echo $i,"<hr>";
$i--;
}while($i<0); //10
?>

<h4 class="title">FOR LOOP</h4>
<?php 
//**********************************(FOR LOOP)**************************************************
               //Using break statement to jump out of anested loop:
$i =0;
$j =0;
for( $i=0; $i<5;$i++){
for( $j=0; $j<3;$j++){
if( $i===3){
break;
}
echo "($i ,$j)","<br>" ;
}
}
echo "<hr>";
/*
(0 ,0)
(0 ,1)
(0 ,2)
(1 ,0)
(1 ,1)
(1 ,2)
(2 ,0)
(2 ,1)
(2 ,2)
(4 ,0)
(4 ,1)
(4 ,2)*/
?>

<h4 class="title">CONTINUE</h4>
<?php 
//**********************************( CONTINUE )**********************************************
for( $i=0; $i<10;$i++){
    if( $i%2===0){
    continue;
    }
    echo" $i \n" ;
    }
    echo "<hr>";
/*
1
3
5
7
9*/ 
?>

<h4 class="title">CONVERTS</h4>
<?php 
//**********************************( CONVERTS )******************************************************
$total =5;
$x="15" ;
$total =$total+$x ;
echo $total ,"<hr>"; //20
?>

<h4 class="title">ARITHMETIC OPERATORS</h4>
<?php 
//**********************************(ARITHMETIC OPERATORS)*************************************
$x=15;
$y=10;
echo $x+$y,"<br>"; //25
echo $x-$y,"<br>"; //5
echo $x*$y,"<br>"; //150
echo $x%$y,"<br>"; //5

//division operator
$x=20;
$z=$x/$y ;
echo gettype($z),"<br>"; //integer
$z=$y/$x;
echo gettype($z),"<br>"; //double
echo "<hr>";
?>

<h4 class="title">COMPARISON OPERATORS</h4>
<?php 
//**********************************(COMPARISON OPERATORS)***************************************
$x=10;
$y=10;
var_dump($x==$y); //bool (true)
echo "<br>";

//**********************************
$x='20' ;
$y=20;
var_dump($x===$y);//bool (false)
echo "<br>";
 
//**********************************
$x=20;
$y=10;
var_dump($x!=$y);//bool (true)
echo "<br>";

//**********************************
$x=20;
$y=10;
var_dump($x<$y);//bool (false)
echo "<br>";

//**********************************
$debug=true;
$debug && print ('PHP and operator demo!' );//PHP and operator demo
echo "<br>";

//**********************************
$expired=true;
$purged=false;
$clear_cache=$expired||$purged;
var_dump($clear_cache);//bool (true)
echo "<br>";
 
//**********************************
$priority=5;
var_dump(! $priority<5);//bool(true)
echo "<hr>";
?>

<h4 class="title">ARRAY</h4>
<?php 
//**********************************(ARRAY)***************************************
$title='PHP string is awesome';
echo $title[0],"<hr>"; //P
?>

<h4 class="title">FUNCTON SRTLEN</h4>
<?php 
//**********************************(FUNCTON SRTLEN () )***************************************
$str='PHP' ;
echo strlen( $str ),"<hr>"; //3 bytes
?>

<h4 class="title">FUNCTON MB_SRTLEN</h4>
<?php 
//**********************************(FUNCTON MB_SRTLEN () )*************************************
$message ='mawadh' ;
echo mb_strlen($message) ,"<hr>" ; //6 characte
?>

<h4 class="title">FUNCTON SUBSTR</h4>
<?php 
//**********************************(FUNCTON SUBSTR () )*****************************************
$s='PHP substring' ;
$result=substr ( $s, 0, 3) ;
echo $result ,"<hr>" ; //PHP
?>

<h4 class="title">FUNCTON MB_SUBSTR</h4>
<?php 
//**********************************(FUNCTON MB_SUBSTR () )**************************************
$message='moody' ;
$result=mb_substr ( $message, 3, 1) ;
echo $result ,"<hr>"; //d
?>

<h4 class="title">FUNCTON STRPOS</h4>
<?php 
//**********************************(FUNCTON STRPOS () )******************************************
$str="welcome to php" ;
$position=strpos( $str , 'to' ) ;
if( $position){
echo $position;
}
else{
echo "Not found" ;}//8
echo "<hr>";
?>

<h4 class="title">FUNCTON IMPLODE</h4>
<?php 
//**********************************(FUNCTON IMPLODE () )*****************************************
$columns=[ 'firs_name ' , 'last_name ' , 'email ' ] ;
$header=implode(',',array_map(fn($c)=>str_replace('_','',$c),$columns));
echo $header  ,"<hr>";//firsname ,lastname ,email 
?>

<h4 class="title">FUNCTON EXPLODE</h4>
<?php 
//**********************************(FUNCTON EXPLODE () )*****************************************
$str='first_name , last_name, email , phone';
$headers=explode( ' , ' , $str ) ;
print_r( $headers); //Array ( [0] => first_name [1] => last_name, email [2] => phone ) 
echo "<hr>";
?>

<h4 class="title">FUNCTON TRIM</h4>
<?php 
//**********************************(FUNCTON TRIM () )*****************************************
$str='PHP' ;
$new_str=trim( $str );

var_dump( $new_str ); //string(3)"PHP"
echo "<hr>";
?>

<h4 class="title">FUNCTON LTRIM</h4>
<?php 
//**********************************(FUNCTON LTRIM () )*****************************************
$title='     PHP Tutorial ' ;
$clean_title=ltrim($title);
var_dump($clean_title); //string(13)"PHP Tutorial"
echo "<hr>";
?>

<h4 class="title">FUNCTON RTRIM</h4>
<?php 
//**********************************(FUNCTON RTRIM () )*****************************************
$name=' Mawadh     ' ;
$clean_name=rtrim($name);
var_dump( $clean_name);  //string(7)"Mawadh"
echo "<hr>";
?>

<h4 class="title">FUNCTON STRTOUPPER AND STRTOLOWER</h4>
<?php 
//**********************************(FUNCTON STRTOUPPER () AND STRTOLOWER () )******************
echo strtoupper ( 'php' ); //PHP
echo "<br>";
echo strtolower ( 'PHP' ) ;//php
echo "<hr>";
?>

<h4 class="title">INT</h4>
<?php 
//**********************************(INT () )***************************************************
echo( int ) 12.5,'<br>' ; // 12
echo( int ) 30.10 ; // 30
echo"<hr>";
?>
</body>
</html>