<?php
session_start();
error_reporting(0);
include('includes/dados.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $cpf=$_SESSION['cpf'];
    $usuario=$_SESSION['usuario'];
    $senha=md5($_POST['Senha']);

        $query=mysqli_query($db,"update usuario set senha='$senha'  where  usuario='$usuario' && cpf='$cpf' ");
   if($query)
   {
echo "<script>alert('Senha atualizada com sucesso');</script>";
session_destroy();
   }
  
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
   Redefinição de senha
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
    <script type="text/javascript">
function checkpass()
{
if(document.changepassword.Senha.value!=document.changepassword.confirmpassword.value)
{
alert('<p class="text-danger alert">Os campos Nova senha e Confirmar senha não correspondem</p>');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>

<body class="">
  
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Creche Escola professor jodson jorge</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                
              </li>
           
              
          </div>
        </div>
      </nav>
 
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Redefinição de senha</h5>
              </div>
              <div class="card-body">

  <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
              <form role="form" action="" method="post" name="changepassword" onsubmit="return checkpass()">
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Senha</label>
               <input class="form-control" name="Senha" type="password" value="" required="true">
                      </div>
                    </div>
                
                    <div class="col-md-4 pl-md-1">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Confirmar Senha</label>
                    <input class="form-control" name="confirmpassword" type="password" value="" required="true">
                      </div>
                    </div>
               
                  </div>
          
              
               
              </div>
   <div class="col-md-5 pr-md-1">
   <div class="form-group">
<button type="submit" value="" name="submit" class="btn btn-primary">Redefinir</button><a href="index.php" class="btn btn-primary">Login</a>
               
  </div>   
  </div>
          
              
               

            </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="img/escudo.jpg" alt="...">
                     <h5 class="title">Creche Escola Prof. Jodson Jorge</h5>
                    </a>
                   
                  </div>
                </p>

              </div>
              <div class="card-footer">
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div> 
  <!--   Core JS Files   -->
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function () {

window.setTimeout(function() {

$(".alert").fadeTo(1000, 0).slideUp(1000, function(){

$(this).remove(); 

});

}, 5000);

});

</script>
   
</body>

</html>