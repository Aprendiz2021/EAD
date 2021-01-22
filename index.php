<?php include('includes/dados.php') ?>


<!DOCTYPE html>

<html lang="pt-br">



<head><meta charset="euc-jp">

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">

  <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <title>Gestão</title>

  <!--     Fonts and icons     -->

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />

  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <!-- Nucleo Icons -->

  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />

  <!-- CSS Files -->

  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->

  <link href="assets/demo/demo.css" rel="stylesheet" />



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

</head>



<body class="">
<div class="wrapper">
<div class="main-panel">
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Login</h4>
          
                </div>
                <div class="card-body">
              
                  <form method="post" action="index.php">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Usuário</label>
                          <input type="text" name="usuario" id="usuario" required class="form-control"  >
                        </div>
                      </div>
                     
                     
         
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Senha</label>
                          <input type="password" name="senha" id="senha" required class="form-control">
                        </div>
                      </div>
                      
                    </div>
                     
                
                    
                    
                    <!--
                    
                    <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" required value="">
                              <span class="form-check-sign">
                                <span class="check">Colocamos alguns campos para serem preenchidos no seu cadastro. 

Faça o seu login e preencha todos os campos com informações verdadeiras. 

Li, e afirmo ser verdade todas as informações aqui gravadas .</span>
                              </span>
                            </label>
                          </div>-->
                    
                    
                    <button type="submit" name="login_btn"  onclick="demo.showNotification('top','left')" class="btn btn-primary pull-right">Entrar</button>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                         
                                     <label class="bmd-label-floating">Não tem uma conta ainda? <a href="registro.php">Cadastra-me</a></label>
                     
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div> <label class="bmd-label-floating"><?php echo display_error(); ?></label>
                  </form>
                </div>
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
                    <amp-img class="avatar" lightbox="lightbox-amp-carousel" srcset src="img/escudo.jpg"  layout="responsive"> </amp-img> 
                        <h5 class="title">Creche Escola Prof. Jodson Jorge</h5>
                    </a>
                     <!-- <p class="description">
                                           Você é especial! E sua escola acredita em seu potencial.

                    </p>-->
                  </div>
                </p>
                <!--<div class="card-description">
                  <center>Faça uma ótima avaliação.</center> 
                                  </div>-->



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

 <script async src="https://cdn.ampproject.org/v0.js"></script>
 <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>

</body>



</html>

