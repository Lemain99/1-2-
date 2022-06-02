<?php
header('Content-Type: text/html; charset=utf-8');
$link = mysqli_connect('localhost', 'root', '', 'vegetables');
mysqli_set_charset($link, "UTF8");

$query = "SELECT * FROM `vegetable`";

if(isset($_GET["vibor"])){
    switch($_GET["vibor"]){
        case 0:
            $query = "SELECT * FROM `vegetable`";
            break;
        case 1:
            $query = "SELECT * FROM `vegetable` WHERE `Price` <= 25";
            break;
        case 2:
            $query = "SELECT * FROM `vegetable` WHERE `Price` >= 25 AND `Price` <= 50";
            break;
        case 3:
            $query = "SELECT * FROM `vegetable` WHERE `Price` >= 50";
            break;
    }
}

$rezult = mysqli_query($link, $query);

$vegetables = [];
while($vegetable = mysqli_fetch_assoc($rezult)){
    $vegetables[] = $vegetable;
}

include_once 'verstka.php';