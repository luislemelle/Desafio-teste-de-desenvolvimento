<?php
session_start();

require_once('conecta.php');

 if(isset($_POST['btn-login']))
 {

  $login 	 = $_POST['login'];
  $password = $_POST['password'];
  
  $query  = "SELECT * FROM user WHERE login='$login' AND password='$password'";
  $result = mysqli_query($connection,$query)or die(mysqli_error());
  $num_row = mysqli_num_rows($result);
  $row     = mysqli_fetch_array($result);

  if( $num_row >=1 ) {

    echo "ok"; // logado

    $_SESSION['logged_in'] = $row['login'];

  }else {

    echo "Erro login ou password invalidos!";
  
  }
    
 }

?>
