<?php
session_start();

require_once('conecta.php');

 if(isset($_POST['btn-ins']))
 {

    $login	= $_POST['login'];
    $Email 	= $_POST['Email'];
    $password = $_POST['password'];
    $Tipo_User = $_POST['Tipo_User'];
  
    $query = "INSERT INTO user ( login, Email, password, Tipo_User) VALUES ('$login', '$Email', '$password', '$Tipo_User')";
    $result = mysqli_query($connection,$query)or die(mysqli_error());
    $result=mysql_query($sql);
if($result){
echo "ok";
}
 }
?>
