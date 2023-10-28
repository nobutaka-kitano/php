<?php 
// $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
$count = htmlspecialchars($_POST['count'], ENT_QUOTES);
print "私の名前は" . $name . '<br/>'; 
print "ご希望の商品は" . $set. '<br/>';
print "注文数は" . $count. '<br/>';

?>

