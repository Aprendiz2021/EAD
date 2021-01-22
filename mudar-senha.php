<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $usuario=$_POST['usuario'];
    $cpf=$_POST['cpf'];

        $query=mysqli_query($con,"select ID from usuario where  usuario='$usuario' and cpf='$cpf' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['usuario']=$usuario;
      $_SESSION['cpf']=$cpf;
     header('location:resetar-password.php');
    }
    else{
      $msg="<p class='text-danger alert'>Dados inválidos. tente novamente.</p>";
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
  
  
  
<script language="JavaScript">
function is_cpf (c) {

  if((c = c.replace(/[^\d]/g,"")).length != 11)
    return false

  if (c == "00000000000")
    return false;

  var r;
  var s = 0;

  for (i=1; i<=9; i++)
    s = s + parseInt(c[i-1]) * (11 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[9]))
    return false;

  s = 0;

  for (i = 1; i <= 10; i++)
    s = s + parseInt(c[i-1]) * (12 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[10]))
    return false;

  return true;
}


function fMasc(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascEx()",1)
}

  function fMascEx() {
obj.value=masc(obj.value)
}

function mCPF(cpf){
cpf=cpf.replace(/\D/g,"")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return cpf
}

cpfCheck1 = function (el) {
    document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">CPF válido</span>' : '<span style="color:red">CPF inválido</span>';
    if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
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

 
                <form role="form" action="" method="post" id="" name="login">

                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Usuário</label>
                        <input class="form-control" name="usuario" type="text" autofocus="" required="true">
                      </div>
                    </div>
                
                    <div class="col-md-4 pl-md-1">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>CPF</label>
                 
                       <input id="cpf" type="text" name="cpf" onkeyup="cpfCheck1(this)"  required class="form-control" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );"> <a id="cpfResponse"></a>
                      </div>
                    </div>
               
                  </div>
          
              
               
              </div>
   <div class="col-md-5 pr-md-1">
   <div class="form-group">

                <button type="submit" value="" name="submit" class="btn btn-fill btn-primary">Redefinir</button>
               <?php if($msg){ echo $msg;}  ?> 
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