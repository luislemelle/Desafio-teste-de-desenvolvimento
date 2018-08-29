<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['logged_in']))
{
 header("Location: index.php");
}

require_once ('conecta.php');

$session = $_SESSION['logged_in'];

$query  = "SELECT * FROM user WHERE login = '$session'";
$result = mysqli_query($connection,$query)or die(mysqli_error());
$row     = mysqli_fetch_array($result);

?>
<html>
<head>
	<title> Pagina Dashboard</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" >Login OK</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<div class="navbar-form navbar-right">
				<a href="logout.php" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
        	</div>
      </div>
    </nav>
<div class="container" style="margin-top: 80px">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
			  <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
				ola <b><?php echo $row['login'] ?></b>, seja bem vindo.
			  </a>
			  <a href="dashboard.php" class="list-group-item"><i class="fa fa-dashboard"></i> Dashboard</a>
			  <a href="adduser.php" class="list-group-item"><i class="fa fa-folder"></i> add user</a>
			  <a href="manageTask.php" class="list-group-item"><i class="fa fa-comments-o"></i> Tarefas</a>
			  <a href="logout.php" class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fa fa-folder"></i> Manage user</a>
			  </div>
			  <div class="panel-body">
              
              
           
        
    
<?php
$query  = "SELECT * FROM user";
$result = mysqli_query($connection,$query)or die(mysqli_error());
echo "<table>
<tr>
<th>Login</th>
<th>Email</th>
<th>Pass</th>
<th>Tipo user </th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['login'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['Tipo_User'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

			</div>
        </div>
        <!-- Button trigger modal -->
        <a data-target="#ModalIns" data-toggle="modal" type="submit" class="btn btn-success"> Inserir</a>
        <a data-target="#ModalAlt" data-toggle="modal" type="submit" class="btn btn-warning"> Alterar</a>
        <a data-target="#ModalExc" data-toggle="modal" type="submit" class="btn btn-danger"> Excluir</a>
	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<!--modal INS -->

<div class="modal fade" id="ModalIns" tabindex="-1" role="dialog" aria-labelledby="ModalIns" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="row">
    <div class="col-md-6 col-md-offset-3">
<h1 class="modal-title" id="ModalIns">Inserir usuário</h1>
</div>
        </div>
      </div>
      <div class="modal-body">

      
      <form class="insForm" method="POST" id="insForm">
                <input type="text" class="form-control" name="login" placeholder="Usuario" autofocus>
                <br>
                <input type="text" name="Email" class="form-control" placeholder="Email">
                <br>
                <input type="text" name="password" class="form-control" placeholder="Password">
                <br>
                
                
                <label class="checkbox pull-right">
                 <input type="checkbox" Tipo_User="normal_user">User admin?       
                </label> 
                <?php if (isset($Tipo_User) && $Tipo_User=="admin");?> 
                <br><br>
                <button type="submit" class="btn btn-primary" id="btn-ins" name="btn-ins">Salvar</button>             
                </form>
                <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
    $('document').ready(function()
    { 
         /* validation */
      $("#insForm").validate({
          rules:
       {
       password: {
       required: true,
                },
       login: {
       required: true,               
              },
       Email: {
       required: true,               
              },     
        },
           messages:
        {
                password:{ 
                    required: "Por favor digite sua senha."
                         },
                login:   {
                    required:"Por favor digite um login"
                         },
                Email:  
                    required:"Por favor digite um E-mail."
                
        },
        submitHandler: insForm
           });  

       function insForm()
       {  
       var data = $("#insForm").serialize();
        
       $.ajax({
        
        type : 'POST',
        url  : 'insert.php',
        data : data,
        beforeSend: function()
        { 
         $("#error").fadeOut();
         $("#btn-ins").html('salvando...');
        },
        success :  function(response)
           {      
          if(response == "useradd"){
              
           $("#btn-login").html('&nbsp; salvando ...');
           setTimeout(' window.location.href = "index.php"; ',4000);
          }
          else{
              
           $("#error").fadeIn(1000, function(){   
 
           $("#error").html('<div class="alert alert-danger"> <"Erro no cadastro";.</div>');
                $("#btn-ins").html('Salvar');
 
            });
           }
          }
        });
       
      }
    });
</script>
<!--Modal Alt -->
<div class="modal fade" id="ModalAlt" tabindex="-1" role="dialog" aria-labelledby="ModalAlt" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalAlt">Alterar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--Modal EX -->
<div class="modal fade" id="ModalExc" tabindex="-1" role="dialog" aria-labelledby="ModalExc" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalExc">Excluir usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>