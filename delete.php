<?php
session_start();

require_once('conecta.php');

 if(isset($_POST['btn-exc']))
 {

    $login	= $_POST['login']; 
    //$query = "INSERT INTO user ( login, Email, password, Tipo_User) VALUES ('$login', '$Email', '$password', '$Tipo_User')";
    $query = "DELETE FROM user WHERE login='$login'";
    $result = mysqli_query($connection,$query)or die(mysqli_error());
if($result){
echo "ok";
}
else {

    echo "Erro erro no delete!";
  
    } 
 }
?>