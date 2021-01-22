 <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{
    if(isset($_POST['submit']))
  {
$id=$_SESSION['usuarioId'];
$nome=$_POST['nome'];
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$cep=$_POST['cep'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$uf=$_POST['uf'];
 $msg=$_POST['msg'];

     $query=mysqli_query($con, "update usuario set nome ='$nome', usuario='$usuario', email='$email', cpf='$cpf', cep='$cep' , rua='$rua' , bairro='$bairro', cidade='$cidade', uf='$uf' , msg='$msg' where ID='$id'");
    if ($query) {
    $msg="<p class='text-danger alert'>O perfil do usuário foi atualizado.</p>";
  }
  else
    {
      $msg="Algo deu errado. Por favor, tente novamente.";
    }
  }
  ?>
 

<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />

<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">

<link rel="icon" type="image/png" href="assets/img/favicon.png">

<title>Registro</title>

<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/"> <!-- Bootstrap core CSS -->

<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
<link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">

<link href="assets/css/nucleo-icons.css" rel="stylesheet" />

  <!-- CSS Files -->

<link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->

<link href="assets/demo/demo.css" rel="stylesheet" />


<script type="text/javascript">
function mascaraMutuario(o,f){
    v_obj=o
    v_fun=f
    setTimeout('execmascara()',1)
}
 
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
 
function cpfCnpj(v){
 
    //Remove tudo o que não é dígito
    v=v.replace(/\D/g,"")
 
    if (v.length <= 14) { //CPF
 
        //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
 
        //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
 
        //Coloca um hífen entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
 
    } else { //CNPJ
 
        //Coloca ponto entre o segundo e o terceiro dígitos
        v=v.replace(/^(\d{2})(\d)/,"$1.$2")
 
        //Coloca ponto entre o quinto e o sexto dígitos
        v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
 
        //Coloca uma barra entre o oitavo e o nono dígitos
        v=v.replace(/\.(\d{3})(\d)/,".$1/$2")
 
        //Coloca um hífen depois do bloco de quatro dígitos
        v=v.replace(/(\d{4})(\d)/,"$1-$2")
 
    }
 
    return v
 
}
</script>


    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
</head>

<body>

<div class="wrapper">
 <div class="sidebar">
<div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            
          </a>
          <a href="acesso.php" class="simple-text logo-normal">
           C E P J J - aluno
          </a>
        </div>
        
        <ul class="nav">
          <li>
            <a href="prova.php">
             <i class="tim-icons icon-book-bookmark"></i>
              <p>provas</p>
            </a>
          </li>
          <li>
            <a href="notas.php">
            <i class="tim-icons icon-notes"></i>
              <p>Notas</p>
            </a>
          </li>
          <li>
            <a href="boletim.php">
              <i class="tim-icons icon-paper"></i>
              <p>Boletim</p>
            </a>
          </li>
          <li>
            <a href="notifications.php">
              <i class="tim-icons icon-bell-55"></i>
              <p>Notificações</p>
            </a>
          </li>
          
        <!-- <li>
            <a href="suporte.php">
              <i class="tim-icons icon-world"></i>
              <p>Suporte AED</p>
            </a>
          </li>


         <li>
            <a href="add.php">
             <i class="tim-icons icon-pencil"></i>
              <p>Add Prova</p>
            </a>
          </li>-->
 

            <li class="active ">
            <a href="perfil.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Perfil de usuário</p>
            </a>
          </li>
          <li>
        </ul>


      </div>
    </div>


<div class="main-panel">

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

            <a class="navbar-brand" href="javascript:void(0)"><?php   echo "". $_SESSION['usuarioNome']; ?> <i  style="color: #888; font-size: 10px;"><?php   echo "". $_SESSION['usuarioEmail']; ?></i></a>

          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-bar navbar-kebab"></span>

            <span class="navbar-toggler-bar navbar-kebab"></span>

            <span class="navbar-toggler-bar navbar-kebab"></span>

          </button>

          <div class="collapse navbar-collapse" id="navigation">

            <ul class="navbar-nav ml-auto">

          

              <li class="dropdown nav-item">

              

                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">

                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Nada</a></li>

                

                </ul>

              </li>

              <li class="dropdown nav-item">

                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

                  <div class="photo">

                    <img src="assets/img/anime3.png" alt="Profile Photo">

                  </div>

                  <b class="caret d-none d-lg-block d-xl-block"></b>

                  <p class="d-lg-none">

                   Sair

                  </p>

                </a>

                <ul class="dropdown-menu dropdown-navbar">

                  <li class="nav-link"><a href="perfil.php" class="nav-item dropdown-item">Perfil</a></li>

            

                  <li class="dropdown-divider"></li>

                  <li class="nav-link"><a class="nav-item dropdown-item"href="index.php?logout='1'" style="color: red;">Sair</a> </li>

                </ul>

              </li>

              <li class="separator d-lg-none"></li>

            </ul>

          </div>

        </div>

      </nav>
<div class="content">

      <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Complete Seu Perfil</h4>
         
                </div>
                <div class="card-body">



<?php if($msg){  echo $msg;  }  ?> </p>
          
<?php
$id=$_SESSION['usuarioId'];
$ret=mysqli_query($con,"select * from usuario where ID='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 
                <form role="form" method="post" action="">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome do Aluno</label>
                         

                             <input class="form-control" type="text" value="<?php  echo $row['nome'];?>"  required="true" name="nome" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome do usuário</label>
                         <input type="text" class="form-control" name="usuario" required="true"  value="<?php  echo $row['usuario'];?>" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Endereço de e-mail</label>
                         <input type="text" class="form-control" name="email" required="true" value="<?php  echo $row['email'];?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">CPF</label>
                          <input type="text" class="form-control" name="cpf" maxlength="14"  onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' required="true" value="<?php  echo $row['cpf'];?>" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">CEP</label>
                        <input type="text" class="form-control" name="cep"  id="cep" required="true" value="<?php  echo $row['cep'];?>" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Endereço</label>
                            <input type="text" class="form-control" name="rua"  id="rua" required="true" value="<?php  echo $row['rua'];?>" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bairro</label>
                         <input type="text" class="form-control" name="bairro" id="bairro" required="true" value="<?php  echo $row['bairro'];?>" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" required="true" value="<?php  echo $row['cidade'];?>" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Estado</label>
                  
                            <input type="text" class="form-control" name="uf" id="uf" required="true" value="<?php  echo $row['uf'];?>" >
                        </div>
                      </div>
                    </div>
                  
 
                 
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Sobre mim</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>


                            <input name="msg" class="form-control" required="true" value="<?php  echo $row['msg'];?>" rows="5">
                          </div>
                        </div>
                      </div>
                    </div> 
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Atualizar perfil</button>
                    <div class="clearfix"></div>

 
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

                      <img class="avatar" src="img/escudo.jpg" alt="...">

                      <h5 class="title"></h5>

                    </a>

                   <!--<p class="description">

                      Você é especial! E sua escola acredita em seu potencial.

                    </p>

                  </div>-->

                </p>

                <div class="card-description">

                  <center>                </center> 
                  
<h5 class="title">Sobre me<br> <i  style="color: #888;"><?php  echo $row['msg'];?></i> <br></h5>
 
</a>

                </div>

              </div>

              <div class="card-footer">

                <div class="button-container">

                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">

                    <i class="fab fa-facebook"></i></button>

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

 <?php } ?>

</div>

</div>




<script async src="https://cdn.ampproject.org/v0.js"></script>

 <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>



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

  <script src="assets/js/core/jquery.min.js"></script>

  <script src="assets/js/core/popper.min.js"></script>

  <script src="assets/js/core/bootstrap.min.js"></script>

  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!--  Google Maps Plugin    -->

  <!-- Place this tag in your head or just before your close body tag. -->

  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <!-- Chart JS -->

  <script src="assets/js/plugins/chartjs.min.js"></script>

  <!--  Notifications Plugin    -->

  <script src="assets/js/plugins/bootstrap-notify.js"></script>

  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->

  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->

  <script src="assets/demo/demo.js"></script>

  <script>

    $(document).ready(function() {

      $().ready(function() {

        $sidebar = $('.sidebar');

        $navbar = $('.navbar');

        $main_panel = $('.main-panel');



        $full_page = $('.full-page');



        $sidebar_responsive = $('body > .navbar-collapse');

        sidebar_mini_active = true;

        white_color = false;



        window_width = $(window).width();



        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();







        $('.fixed-plugin a').click(function(event) {

          if ($(this).hasClass('switch-trigger')) {

            if (event.stopPropagation) {

              event.stopPropagation();

            } else if (window.event) {

              window.event.cancelBubble = true;

            }

          }

        });



        $('.fixed-plugin .background-color span').click(function() {

          $(this).siblings().removeClass('active');

          $(this).addClass('active');



          var new_color = $(this).data('color');



          if ($sidebar.length != 0) {

            $sidebar.attr('data', new_color);

          }



          if ($main_panel.length != 0) {

            $main_panel.attr('data', new_color);

          }



          if ($full_page.length != 0) {

            $full_page.attr('filter-color', new_color);

          }



          if ($sidebar_responsive.length != 0) {

            $sidebar_responsive.attr('data', new_color);

          }

        });



        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {

          var $btn = $(this);



          if (sidebar_mini_active == true) {

            $('body').removeClass('sidebar-mini');

            sidebar_mini_active = false;

            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');

          } else {

            $('body').addClass('sidebar-mini');

            sidebar_mini_active = true;

            blackDashboard.showSidebarMessage('Sidebar mini activated...');

          }



          // we simulate the window Resize so the charts will get updated in realtime.

          var simulateWindowResize = setInterval(function() {

            window.dispatchEvent(new Event('resize'));

          }, 180);



          // we stop the simulation of Window Resize after the animations are completed

          setTimeout(function() {

            clearInterval(simulateWindowResize);

          }, 1000);

        });



        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {

          var $btn = $(this);



          if (white_color == true) {



            $('body').addClass('change-background');

            setTimeout(function() {

              $('body').removeClass('change-background');

              $('body').removeClass('white-content');

            }, 900);

            white_color = false;

          } else {



            $('body').addClass('change-background');

            setTimeout(function() {

              $('body').removeClass('change-background');

              $('body').addClass('white-content');

            }, 900);



            white_color = true;

          }





        });



        $('.light-badge').click(function() {

          $('body').addClass('white-content');

        });



        $('.dark-badge').click(function() {

          $('body').removeClass('white-content');

        });

      });

    });

  </script>

  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

  <script>

    window.TrackJS &&

      TrackJS.install({

        token: "ee6fab19c5a04ac1a32a645abde4613a",

        application: "black-dashboard-free"

      });

  </script>

</body>

</html>   <?php } ?>