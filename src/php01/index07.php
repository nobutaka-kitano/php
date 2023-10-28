<?php 
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo $people[1] . '<br/>';
?>

<?php 
$people =array(
  'pearson1' => 'Taro',
  'pearson2' => 'Jiro',
  'pearson3' => 'Saburo'

);

var_dump($people);
 ?>

 <?php 
 $people = [
  'pearson1' => 'Taro',
  'pearson2' => 'Jiro',
  'pearson3' => 'Saburo'
 ];
 echo $people['pearson2'] . '<br/>';
 ?>

 <?php 
 $people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25
    ,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ],
];

 echo $people[1]["last_name"]. '<br/>';;
 ?>

 <?php 
 $people = array('Taro', 'Jiro', 'Saburo');

 foreach ($people as $person) {
  echo $person . '<br/>';
 }
 ?>
 <?php
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}
?>

<?php 
$people = [
  [
    "name" => "Taro",
    "age" => 25,
    "gender" => "men",
  ],
  [
    "name" => "Jiro",
    "age" => 20,
    "gender" => "men",
  ],
  [
    "name" => "hanako",
    "age" => 16,
    "gender" => "women",
  ],
];

foreach ($people as $person => $name){
  echo $person . "は" . $name . "です" . '<br />';
} 
?>
<?php 
$people = [
  ["Taro", 25, "men"],
  ["Jiro", 20, "men"],
  ["Hanako", 16, "women"],
];
  foreach ($people as $person) {
    echo $person[0] ."(" . $person[1] . "歳" . $person[2] . ")";
    echo '<br/>';

  }
    ?>