<!DOCTYPE html>
<html>
<head>
	<title>Crud PHP</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">    
                <form class="form-signin" method="POST" id="login-form">
                <input type="text" class="form-control" name="login" placeholder="Usuario" autofocus>
                <br>
                <input type="password" name="password" class="form-control" placeholder="Senha">
                <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
                    entrar</button>               
                </form>
            </div>
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    $('document').ready(function()
    { 
         /* valida */
      $("#login-form").validate({
          rules:
       {
       password: {
       required: true,
       },
       login: {
                required: true,               
                },
        },
           messages:
        {
                password:{
                          required: "Por favor insira um Password"
                         },
                login: "Por favor insira um login",
        },
        submitHandler: submitForm 
           });  

       function submitForm()
       {  
       var data = $("#login-form").serialize();
        
       $.ajax({
        
       type : 'POST',
       url  : 'loginsection.php',
       data : data,
       beforeSend: function()
       { 
        $("#error").fadeOut();
        $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Entrando ...');
       },
       success :  function(response)
          {      
         if(response == "ok"){
             
          $("#btn-login").html('&nbsp; Signing In ...');
          setTimeout(' window.location.href = "dashboard.php"; ',4000);
         }
         else{
             
          $("#error").fadeIn(1000, function(){   

          $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; "Erro e-mail ou password invalidos!";.</div>');
               $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');

           });
          }
         }
       });
        return false;
      }
    });
</script>
</body>
</html>