
<!-- <?php
$count = 0;

while ($count <= 100) {
  if ($count === 100) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}

?> -->

<?php 
$nume = 0;
do {
  echo 'num =' . $nume . '<br/>';
  $nume++;
} while ($nume < 10)
?>


<?php 
$i = 0;
for ($i = 1; $i <50; $i++){
  if ($i % 15 === 0) {
    echo 'FizzBuzz'. '<br/>';
  } else if ($i % 3 === 0) {
    echo 'Fizz'. '<br/>';
  } else if ($i % 5 === 0) {
    echo 'BUZZ'. '<br/>';
  } else{

    echo $i;
  }
}
?>

<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}

?>

<?php 
for ($i=1; $i <= 4; $i++) {
  for ($j =1; $j <= 4; $j++) {
    echo "⭕️";
  }
  echo "<br/>";
} ?>