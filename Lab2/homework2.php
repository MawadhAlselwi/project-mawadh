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
<h2 id="h2">HomeWork 2 </h2>


<h4 class="title">ARRAY</h4>
<?php 
//*********************(ARRAY)*********************
$arr=array(1,2,3);
print_r($arr); //Array ( [0] => 1 [1] => 2 [2] => 3 )
echo "<hr>";
?>

<h4 class="title">RANGE</h4>
<?php 
//*********************(RANGE)*********************
$arr=range(1,5);
print_r($arr); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
echo "<hr>";
?>

<h4 class="title">ARRAY_PUSH</h4>
<?php 
//*********************(ARRAY_PUSH)*********************
$arr=[1,2];
array_push($arr,3,4);
print_r($arr); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
echo "<hr>";
?>

<h4 class="title">ARRAY_SHIFT</h4>
<?php
//*********************(ARRAY_SHIFT)*********************
$arr=[1,2,3];
$first=array_shift($arr);
print_r($first); // 1
echo "<hr>";
?>

<h4 class="title">ARRAY_UNSHIFT</h4>
<?php
//*********************(ARRAY_UNSHIFT)*********************
$arr=[2,3];
array_unshift($arr,0,1);
print_r($arr); //Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 )
echo "<hr>";
?>

<h4 class="title">ARRAY_POP</h4>
<?php
//*********************(ARRAY_POP)*********************
$arr=[1,2,3];
$last=array_pop($arr);
print_r($last); //3
echo "<hr>";
?>

<h4 class="title">IN_ARRAY</h4>
<?php
//*********************(IN_ARRAY)*********************
$arr=[1,2,3];
if(in_array(2,$arr))
{
echo "Exists", "<hr>";}// Exists
?>

<h4 class="title">ARRAY_SEARCH</h4>
<?php
//*********************(ARRAY_SEARCH)*********************
$arr=[1,2,3];
$search=array_search(3,$arr);
echo $search, "<hr>";// 2
?>

<h4 class="title">ARRAY_SORT</h4>
<?php
//*********************(ARRAY_SORT)*********************
$arr=[1,2,3];
sort($arr);
print_r($arr);
echo "<hr>";// Array ( [0] => 1 [1] => 2 [2] => 3 )
?>

<h4 class="title">ARRAY_RSORT</h4>
<?php
//*********************(ARRAY_RSORT)*********************
$arr=[1,2,3];
rsort($arr);
print_r($arr);
echo "<hr>";// Array ( [0] => 3 [1] => 2 [2] => 1 )
?>

<h4 class="title">ARRAY_MAP</h4>
<?php
//*********************(ARRAY_MAP)*********************
$arr=[1,2,3];
$result=array_map(function($n)
{ return $n * 2 ;},$arr);
print_r($result);
echo "<hr>"; // Array ( [0] => 2 [1] => 4 [2] => 6 )
?>

<h4 class="title">ARRAY_FILTER</h4>
<?php
//*********************(ARRAY_FILTER)*********************
$arr=[1,2,3,4];
$result=array_filter($arr,function($n)
{ return $n % 2==0 ;});
print_r($result);
echo "<hr>"; // Array ( [1] => 2 [3] => 4 )
?>

<h4 class="title">ARRAY_MERGE</h4>
<?php
//*********************(ARRAY_MERGE)*********************
$arr=[1,2];
$arr2=[3,4];
$result=array_merge($arr,$arr2);
print_r($result);
echo "<hr>"; // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
?>

<h4 class="title">ARRAY_CHUNK</h4>
<?php
//*********************(ARRAY_CHUNK)*********************
$arr=[1,2,3,4];
$result=array_chunk($arr,2);
print_r($result);
echo "<hr>"; //Array ( [0] => Array ( [0] => 1 [1] => 2 ) [1] => Array ( [0] => 3 [1] => 4 ) )
?>

<h4 class="title">ARRAY_SUM</h4>
<?php
//*********************(ARRAY_SUM)*********************
$arr=[1,2,3,4];
$result=array_sum($arr);
echo $result, "<hr>"; //10
?>

<h4 class="title">ARRAY_PRODUCT</h4>
<?php
//*********************(ARRAY_PRODUCT)*********************
$arr=[1,2,3];
$result=array_product($arr);
echo $result, "<hr>"; //6
?>

<h4 class="title">ARRAY_KEYS</h4>
<?php
//*********************(ARRAY_KEYS)*********************
$arr=["a"=>1,"b"=>2 ,"c"=>3];
$result=array_keys($arr);
print_r( $result);
echo "<hr>"; //Array ( [0] => a [1] => b [2] => c )
?>

<h4 class="title">ARRAY_VALUES</h4>
<?php
//*********************(ARRAY_VALUES)*********************
$arr=["a"=>1,"b"=>2 ];
$result=array_values($arr);
print_r( $result);
echo "<hr>"; //Array ( [0] => 1 [1] => 2 )
?>

<h4 class="title">ARRAY_REVERSE</h4>
<?php
//*********************(ARRAY_REVERSE)*********************
$arr=[1,2,3];
$result=array_reverse($arr);
print_r( $result);
echo "<hr>"; //Array ( [0] => 3 [1] => 2 [2] => 1 )
?>

<h4 class="title">ARRAY_DIFF</h4>
<?php
//*********************(ARRAY_DIFF)*********************
$arr=[1,2,3];
$arr2=[2,3,4];
$result=array_diff($arr,$arr2);
print_r( $result);
echo "<hr>"; // Array ( [0] => 1 )
?>

<h4 class="title">ARRAY_INTERSECT</h4>
<?php
//*********************(ARRAY_INTERSECT)*********************
$arr=[1,2,3];
$arr2=[2,3,4];
$result=array_intersect($arr,$arr2);
print_r( $result);
echo "<hr>"; //Array ( [1] => 2 [2] => 3 )
?>

<h4 class="title">ARRAY_IMPLODE</h4>
<?php
//*********************(ARRAY_IMPLODE)*********************
$arr=[1,2,3];
$result=implode(",",$arr);
echo $result, "<hr>"; //1,2,3
?>

<h4 class="title">ARRAY_EXPLODE</h4>
<?php
//*********************(ARRAY_EXPLODE)*********************
$str="1,2,3";
$result=explode(",",$str);
print_r($result);
echo  "<hr>"; //Array ( [0] => 1 [1] => 2 [2] => 3 )
?>

<h4 class="title">ISSET</h4>
<?php
//*********************(ISSET)*********************
$arr=["a"=>1,"b"=>2 ];
if(isset($arr["a"])){
echo "Key Exists", "<hr>";}//Key Exists
?>

<h4 class="title">Array Key Exists</h4>
<?php
//*********************(Array Key Exists)*********************
$arr=["a"=>1,"b"=>2 ];
if(array_key_exists("b",$arr)){
echo "Key Exists", "<hr>";}//Key Exists
?>

<h4 class="title">Count</h4>
<?php
//*********************(Count)*********************
$arr=["a"=>1,"b"=>2 ];
$result=count($arr);
echo $result, "<hr>";// 2
?>

<h4 class="title">Sizeof</h4>
<?php
//*********************(Sizeof)*********************
$arr=["a"=>1,"b"=>2 ,"c"=>3];
$result=count($arr);
echo $result, "<hr>";// 3
?>

<h4 class="title">Is Array</h4>
<?php
//*********************(Is Array)*********************
$arr=[1,2,3];
if (is_array($arr)){
echo "It is an array", "<hr>";}// It is an array
?>


</body>
</html>