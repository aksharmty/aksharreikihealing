<?php
$connection = mysqli_connect('localhost', 'adslinks_aos', 'AoS@9213816442');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'adslinks_aos');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>