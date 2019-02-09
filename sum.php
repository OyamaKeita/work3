<?php
function sum($max) {

  return $max*2;
}
echo sum(50);
?>
<?php
function f($a,$b){

  return $a + $b;
}
echo f(1,2);
?>
<?php
$arr = array(1,3,5,7,9);

function banana($arr){$result = 1;

foreach($arr as $a){
  $result *= $a;

}return $result;
}
echo banana($arr);
 ?>
 <?php
 $arr = array(1,3,5,7,9);
 function max_array($arr){


  $max_number = $arr[0];
  foreach($arr as $a) {
    if ($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array($arr) ?>
<?php
$text = "<b>sample</b>";
$text = strip_tags($text);
echo $text; ?>
<?php
$colors = ["red","blue","yellow"];
array_push($colors,"green","black");
print_r($colors);
 ?>
<?php
$fruit1 = ["apple","orange","pineapple"];
$fruit2 = ["cherry"];
$fruit3 = ["watermelon"];

$fruits = array_merge($fruit1,$fruit2,$fruit3);
print_r($fruits);
 ?>
 <?php
echo  time();
echo "\n";
 ?>
 <?php
 echo date("Y年m月d日",1549705162);
  echo "\n";
  ?>
  <?php
  echo mktime(7,7,7,7,7,2018);
   ?>
