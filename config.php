<?php

$server ="localhost";
$name ="root";
$password ="";
$database ="library";

$db = mysqli_connect($server, $name, $password, $database, 3306);

if(!$db){
    die("Gagal tersambung dengan database" .
    mysqli_connect_error());

}

?>