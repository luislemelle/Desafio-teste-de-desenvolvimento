<?php
//logar no banco
$hostname = "localhost";
$username = "root";
$password = "";
$database = "test";
//cria var conect
$connection = mysqli_connect($hostname, $username, $password, $database);
// check conect
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

