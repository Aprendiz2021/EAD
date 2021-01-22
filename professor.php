 <?php 
include('includes/dados.php');
if (!isset($_SESSION['usuarioId'])){
header ("Location:index.php");
exit();

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



    <title>Bem vindo</title>



    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">



    <!-- Bootstrap core CSS -->



    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->



    <link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">



     <link href="assets/css/nucleo-icons.css" rel="stylesheet" />



  <!-- CSS Files -->



  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />



  <!-- CSS Just for demo purpose, don't include it in your project -->



  <link href="assets/demo/demo.css" rel="stylesheet" />

<script>

function mostrar_abas(obj) {

      document.getElementById('div_aba1').style.display="none";

      document.getElementById('div_aba2').style.display="none";

      document.getElementById('div_aba3').style.display="none";

      document.getElementById('div_aba4').style.display="none";

      document.getElementById('div_aba5').style.display="none" 

   switch (obj.id) {

      case 'mostra_aba1':

      document.getElementById('div_aba1').style.display="block";

      break

      case 'mostra_aba2':

      document.getElementById('div_aba2').style.display="block";

      break

     case 'mostra_aba3':

      document.getElementById('div_aba3').style.display="block";

      break

       case 'mostra_aba4':

      document.getElementById('div_aba4').style.display="block";

      break

       case 'mostra_aba5':

      document.getElementById('div_aba5').style.display="block";

      break

      

   }

}

</script>



  </head>



  <body>



  <div class="wrapper">


 <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-largo">
 <center><?php   echo "". $_SESSION['usuarioProfissao']; ?></center>
          </a>
          <a href="#" class="simple-text logo-normal">
    
          </a>
        </div>
        <ul class="nav">
            <li>
            <a href="buscar.php">
             <i class="tim-icons icon-book-bookmark"></i>
              <p>Buscar aluno</p>
            </a>
          </li>
          <li>
            <a href="provas.php">
             <i class="tim-icons icon-book-bookmark"></i>
              <p>provas</p>
            </a>
          </li>
          <li>
            <a href="nota.php">
            <i class="tim-icons icon-notes"></i>
              <p>Notas</p>
            </a>
          </li>
          <li>
            <a href="bo.php">
              <i class="tim-icons icon-paper"></i>
              <p>Boletim</p>
            </a>
          </li>
          <li>
            <a href="notificar.php">
              <i class="tim-icons icon-bell-55"></i>
              <p>Notificações</p>
            </a>
          </li>
       <!--   
         <li>
            <a href="suporte.php">
              <i class="tim-icons icon-world"></i>
              <p>Suporte AED</p>
            </a>
          </li>-->


         <li>
            <a href="add.php">
             <i class="tim-icons icon-pencil"></i>
              <p>Add Prova</p>
            </a>
          </li>
 

            <li >
            <a href="pf.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Perfil de usuário</p>
            </a>
          </li>
          <li>
        </ul>
      </div>
    </div>


 

   







    <div class="main-panel">







      <!-- Navbar  style="width: 200px; font-size: 30px; color: #03F;" -->







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

      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">

        <div class="modal-dialog" role="document">

          <div class="modal-content">

            <div class="modal-header">

              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Pesquisar">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <i class="tim-icons icon-simple-remove"></i>

              </button>

            </div>

          </div>

        </div>

      </div>

     <div class="content"> 

     <div class="row">

     <div class="col-md-8">

 <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Shipments</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 0</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Boletim </h5>
                <h3 class="card-title"><i class="tim-icons icon-book-bookmark text-info"></i>0</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="CountryChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Notificação</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 0</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

  




 

 

<!------------------------------------------------FIM------------------------------------------------------> 



<div class="content">

</h3>

 



      

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

 

<h5 class="title">Olá, <i  style="color: #888;"><?php   echo "". $_SESSION['usuarioNome']; ?> </i> <br></h5>
 
</a>

<!--<p class="description">

Você é especial! E sua escola acredita em seu potencial.

</p>

 </div>-->

</p>

<div class="card-description">

<center></center> 

</div>

</div>

<div class="card-footer">

<div class="button-container">

<button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook"><i class="fab fa-facebook"></i></button>

<button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter"><i class="fab fa-twitter"></i></button>

<button href="javascript:void(0)" class="btn btn-icon btn-round btn-google"><i class="fab fa-google-plus"></i></button>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>





<div class="fixed-plugin">

    <div class="dropdown show-dropdown">

      <a href="#" data-toggle="dropdown"><i class="fa fa-cog fa-2x"> </i></a>

      <ul class="dropdown-menu">

        <li class="header-title">              </li>

        <li class="adjustments-line">

          <a href="javascript:void(0)" class="switch-trigger background-color">

            <div class="badge-colors text-center">

              <span class="badge filter badge-primary active" data-color="primary"></span>

              <span class="badge filter badge-info" data-color="blue"></span>

              <span class="badge filter badge-success" data-color="green"></span>

            </div>

            <div class="clearfix"></div>

          </a>

        </li>

        <li class="adjustments-line text-center color-change">

          <span class="color-label">MODO DE LUZ</span>

          <span class="badge light-badge mr-2"></span>

          <span class="badge dark-badge ml-2"></span>

          <span class="color-label">MODO ESCURO</span>

        </li>

        <li class="button-container">

          <a href="#" target="_blank" class="btn btn-primary btn-block btn-round">Download</a>

          <a href="#" target="_blank" class="btn btn-default btn-block btn-round">Documentação</a>

        </li>

   

        <li class="button-container text-center">

        <a href="#" target="_blank" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 0</a>

        <a href="#" target="_blank" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 0</a>

           

          <br>

          <br>

<?php   echo "". $_SESSION['usuarioNome']; ?> <i  style="color: #888; font-size: 10px;"><br><label style="color: #red;">CPF:</label><?php   echo "". $_SESSION['usuarioCpf']; ?></i>




        </li>

      </ul>

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

</html>







