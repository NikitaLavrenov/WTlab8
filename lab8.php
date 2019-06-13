<?php

if (isset($_COOKIE['wt_lab8'])) {
  $id = $_COOKIE['wt_lab8'];
} else {
  $id = uniqid();
}

setcookie('wt_lab8', $id);

$inp = file_get_contents('results.json');
$tempArray = json_decode($inp);
$browser = get_browser(null, true);
$tempArray->{$id} = $browser['browser'];
$jsonData = json_encode($tempArray);
file_put_contents('results.json', $jsonData);

?>
