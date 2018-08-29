<?php
session_start();

require_once('conecta.php');

 if(isset($_POST['btn-ins']))
 {

    $login	= $_POST['login'];
    $Email 	= $_POST['Email'];
    $password = $_POST['password'];
    $Tipo_User = $_POST['Tipo_User'];
  
    $query  = "INSERT INTO user WHERE login='$login' AND Email='$Email' AND password='$password' AND Tipo_User='$Tipo_User'";
    $result = mysqli_query($connection,$query)or die(mysqli_error());  

    echo "usuario adicionado!!";   
 }
?>
