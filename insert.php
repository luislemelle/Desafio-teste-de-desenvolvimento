<?php
session_start();
require_once('conecta.php');
 if(isset($_POST['btn-ins']))
 {
    $login	= $_POST['login'];
    $Email 	= $_POST['Email'];
    $password = $_POST['password'];

    if(isset($_POST['Tipo_User']))
 {
    $Tipo_User = 'admin';
 }else{
     $Tipo_User = 'normal_user';
 }
  
    $query = "INSERT INTO user ( login, Email, password, Tipo_User) VALUES ('$login', '$Email', '$password', '$Tipo_User')";
    $result = mysqli_query($connection,$query)or die(mysqli_error());
if($result){
echo "ok";
}
else {
    echo "$result";
  
    } 
 }
?>