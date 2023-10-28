<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(10);
?>

<?php
function outputHello()
{
  echo "Hello world";
}

outputHello(); // ①
?>

<?php 
function text($number1, $number2) {
  $value = $number1 + $number2;
  return $value;
} 

$total = text(2, 4);
echo $total;

?>

<?php 
function text1($num1, $num2) {
  $value = $num1 * $num2;
  return $value;
} 

$total1 = text1(1, 5);
echo $total1;

?>

<?php 
function number ($score1, $score2, $score3) {
  $total2 = $score1 + $score2 + $score3;
  if ($total2 > 210) {
    echo $total2 . "点なので合格です";
  } else {
    echo $total2 . "点なので不合格です";
  }
}

echo number(50, 50, 50);
