<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "rpg_account";


$conn = @mysqli_connect($host, $username, $password, $db);
if (mysqli_connect_errno($conn))
  die("�L�k�s�u��Ʈw���A��");

//�]�w�s�u���r������ UTF8 �s�X
mysqli_set_charset($conn, "utf8");
?>