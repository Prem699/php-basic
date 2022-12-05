<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello World";
?>
<br>
 <?php
$color ="red";
echo "my care is ". $color;
?>
<br>
<?php
$x=5;
$y=6;
echo $x+$y 
?>

<?php
$x=5;
function mytest() {
echo "<p>variable x inside function is:$x</p>";
}
mytest();
echo "<p>variable x outside function is: $x</p>";
?>
<?php
$x=5;
$y=10;
function f1(){
global $x,$y;
$y=$x+$y;
}
f1();
echo $y;
?>
<br>
<?php
echo "Hello world";
echo "I'm about to learn PHP!";
?>
<?php
$v1="Learn php";
$v2="from w3school";
$x=5;
$y=4;
echo "<h2>". $v1 . "</h2>";
echo "study php ".$v2. "<br>";
print $x+$y;
?>
<br>
<?php
$x=6;
$y=9;
print $x+$y 
?>
<br>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
<br>
<?php 
$x=5.44;
var_dump($x);
?>
<br>
<?php
echo strlen("full");
echo "<br>";
echo strlen("four world");
?>
<br>
<?php
echo str_word_count("what a wonder ful world")
?>
<br>
<?php
echo strrev("hello world")
?>
<br>
<?php
echo strpos("three four","four");
?>
<br>
<?php
echo str_replace("earth","howdy","howdy earth");
?>
<br>
<?php
echo (pi());
?>
<br>
<?php
echo (min(12,2,3,1,-2));
echo "<br>";
echo (max(3,12,14,2,1));
?>
<br>
<?php
echo (abs(-9));
?>
<br>
<?php
echo (round(0.7));
?>
<br>
<?php
echo (rand(12,20));
?>
<br>
<?php
define ("geet","welcome to php");
echo geet;
?>
<br>
<?php
define("getting","welcome",true );
echo GETTING;
?>
<br>
<?php
define ("car",["red","blue","white"]);
echo car[1];
?>
<br>
<?php
define ("p1","welcome to coding");
function fun1() {
    echo p1;
}
fun1();
?>
<br>
<?php
$a=date("H");
echo $a;
echo "<br>";
if($a<"20"){
    echo "have a good day";
}
?>
<br>
<?php
$a=4;
$b=6;
if (($a+$b)>9){
    echo "nice";
}
else {
    echo "not okay";
}
?>
<br>
<?php 
$a=date("H");
if ($a<"20"){
    echo "have a nice day";
}
elseif ($a<"10"){
    echo "Good moring";
}
else {
    echo "good night";
}
?>
<br>
<?php
$colors = array("red", "blue", "green");
foreach($colors as $key => $value){
//echo $key;
//echo $value;
test($value);
}
//$favcolor = "red";
function test($color){
switch ($color) {
  case "red":
    echo "Your favorite color is red! <br>";
    break;
  case "blue":
    echo "Your favorite color is blue! <br>";
    break;
  case "green":
    echo "Your favorite color is green!<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
}
?>
<br>
<?php
$fav="yellow";
switch($fav){
    case "red":
        echo "your favorite color is red";
        break;
    case "blue":
        echo "your favorite color is blue";
            break;
    case "green":
        echo "your favorite color is green";
            break;
    default:
     echo "your favourite color is either red,blue or green" ;       
}
?>
<br>
<?php
$fav="black";
switch($fav){
  case "red":
  echo "this not the color";
  break;
  case "black":
  echo "this is the color";
  break;
  default:
  echo "There is no color";
}
?>
<br>
<?php
$x=1;
while ($x<=5){
  echo "The number is: $x <br>";
  $x+=2;
}
?>
<br>
<?php
$x=200;
while ($x<=1000){
  echo "The number is: $x <br>";
  $x+=10;
}
?>
<br>
<?php
$x=1;
while ($x<5){
  echo "The number is: $x <br>";
  $x++;
}
?>
<br>
<?php
$i=1;
do {
  echo "This is the number:$i <br>";
  $i++;
} while ($i<=5);
?>
<br>
<?php
$y=1;
do{
  echo "This is the number:$y <br>";
  $y+=2;
}while ($y<=6);
?>
<br>
<?php 
for ($x=0; $x<=5; $x++){
  echo "The number is: $x <br>";
}
?>
<br>
<?php
for ($i=1; $i<=10; $i+=2){
  echo "The number is:$i <br>";
}
?>
<br>
<?php
$color=array("red","yellow","green","red");
echo "$color[0] <br>";
foreach ($color as $value){
  //echo $value;
  echo "$color[0] <br>";
}
?>
<br>
<?php
$age=array("peter"=>"40","david"=>"50","simon"=>"65");
foreach ($age as $x=>$val){
  echo "$x=$val<br>";
}
?>
<br>
<?php 
for ($x=0; $x<10; $x++){
  if ($x==4){
    break; 
  }
  echo "The number is : $x <br>";
}
?>
<br>
<?php 
for ($x=1; $x<=7; $x+=3){
  if ($x==6){
    break;
  }
  echo "the number: $x <br>";
}
?>
<br>
<?php
for ($i=0; $i<10; $i++){
  if($i==5){
    continue;
  }
  echo "The number is : $i <br>";
}
?>
<?php
$number=array(3,4,5,6);
foreach ($number as $value){
  echo "$value <br>";
}
?>
<br>
<?php
for ($x=1;$x<10;$x+=1){
  if($x==4){
    break;
  }
  echo "This is the number:$x <br>";
}
?>
<br>
<?php
$color=array("red", "blue","green");
foreach ($color as $val){
  echo "$val <br>";
}
?>
<br>
<?php
function f2(){
  echo "hello everybody";
}
f2();
?>
<br>
<?php
function familyname($fname){
  echo "$fname Bhandari.<br>";
}
familyname("prem");
familyname("KUMAR");
?>
<br>
  <!-- 
  //function fuc1($fname,$year){
    //echo "$fname wilson. Born in $year <br>";
  //}
  //fuc1("John","1990");
  //fuc1("Adam","1923");
  //fuc1("William","1992");
  //
  <br>
  <?php 
  function addNumbers(int $a,int $b){
    return $a+$b;
  }
  echo addNumbers(5,"5days");
  ?> -->
  <br>
  <br>
  <?php
 function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>
<br>
<br>

<?php
function sum( int $a, int $b){
  $z=$a+$b;
  return $z;
}
echo "5+10=".sum(5,10)."<br>";
echo "5+10=".sum(5,7)."<br>";
echo "2+7=".sum(2,7);
?>
 <br>
 <br>
<?php
$x=1;
while ($x<=5){
  echo "This is the number: $x <br>";
  $x+=1;
}
?>

<br>
<?php
for ($x = 0; $x <= 1000; $x+=100) {
  echo "The number is: $x <br>";
}
?>  
<br>
<?php
for ($x=1; $x<=20; $x+=2){
  if ($x==7){
    break;
  }
echo "The number is: $x <br>";
}
?>
<br>
<?php
for ($x=0; $x<=10; $x++){
  if ($x==6){
    continue;
  }
  echo " The number is: $x <br>";
}
?>
<br>
<?php
function name($fname){
  echo "$fname will.<br>";
}
name("church");
name("william");
name("will");
?>
<br>
<br>
<?php
$car=array("BMW","Maruti","Indgio");
echo  "I like"  . $car[0] . "and not" .  $car[1] . "and" . $car[2] . ".";
?>
<br>
<?php
$bike = array("bmw","dirt","redbull");
$arrlength = count($bike);
for ($x=0; $x < $arrlength; $x++){
  echo $bike[$x];
  echo "<br>";
}
?>
<br>
<br>
<?php
$age=array("pema"=>"27", "Dorji"=>"26","Dechen"=>"25");
echo "Dorji is " . $age["Dorji"] . "year old.";
?>
<br>
<?php
$tock=array("s1"=>"230","s2"=>"221","s3"=>"212");
echo "s2 is " . $tock["s2"] . " at is a better stock.";
?>
<br>
<?php
$age=array("pema"=>"27","dorji"=>"23","sangay"=>"32");
foreach ($age as $x=>$x_value){
  echo "key=" . $x . ",value=" . $x_value;
  echo "<br>";
}
?>
<br>
<?php
$car=array(
  array("volvo",22,12),
  array("bmw",23,12),
  array("suzuki",21,11)
);
echo $car[0][0]. " : In stock: " .$car[0][1].", sold: " . $car[0][2] . ".<br>";
echo $car[2][0] . ": In stock : " . $car[2][1] . ", sold : " . $car [2][1] . ". <br>";
?>
<br>
<?php
$things = array("hammer","organe","office","green");
sort($things);
$clength=count($things);
for($x=0; $x<$clength; $x++){
  echo $things[$x];
  echo "<br>";
}
?>
<br>
<?php
$numbers=array(2,1,3,6,9);
sort($numbers);
$arrlength=count($number);
for($x=0;$x<$arrlength;$x++){
  echo $numbers[$x];
  echo "<br>";
}
?>
<br>

</body>
</html>
