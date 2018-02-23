<?php

$host  = 'localhost';
$user  = 'root';
$pass = '';
$db    = 'perusahaan';

$connect = new mysqli($host, $user, $pass, $db);
if($connect->connect_error){
 echo 'Terjadi Kesalahan';
}

?>
