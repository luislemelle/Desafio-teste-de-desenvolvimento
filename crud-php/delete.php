<?php
session_start();

require_once('conecta.php');

 if(isset($_POST['btn-exc']))
 {
    $login	= $_POST['login']; 
    $query  = "SELECT * FROM user WHERE login='$login'";
    $resultado = mysqli_query($connection,$query)or die(mysqli_error());
    $num_row = mysqli_num_rows($resultado);
    $row     = mysqli_fetch_array($resultado);

  if( $num_row == 1 ) {
                        $query2 = "DELETE FROM user WHERE login='$login'";
                        $result2 = mysqli_query($connection,$query2)or die(mysqli_error());
                        echo "ok";
                     }else {
                        echo "erro no delete!";
                           }
    
    
 }
?>