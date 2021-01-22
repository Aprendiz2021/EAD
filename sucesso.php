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



    <title>Seu teste foi enviado com sucesso.</title>



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

  </head>



  <body>

 

  <div class="wrapper">

  <!--   <div class="sidebar">

   <div class="sidebar-wrapper">

        <div class="logo">

          <a href="javascript:void(0)" class="simple-text logo-mini">

           

          </a>

          <a href="javascript:void(0)" class="simple-text logo-normal">

          IRSEBA

          </a>

        </div>

        <ul class="nav">

          <li>

            <a href="">

              

              <p> </p>

            </a>

          </li>

          <li>

            <a href="">

       

              <p>   </p>

            </a>

          </li>

          <li>

   

        </div></div>-->

    <div class="main-panel">

      <!-- Navbar -->

       

     

      <!-- End Navbar -->

     <div class="content">

        <div class="row">

          <div class="col-md-8">

        
 
<div class="card card-user">

              <div class="card-body">

                

                  <div class="author">
 

                    <a href="javascript:void(0)">

                    <amp-img class="avatar" lightbox="lightbox-amp-carousel" srcset src="img/escudo.jpg"  layout="responsive"> </amp-img> 

                  



                    </a>

<p class="description">Parabéns. <?php   echo "". $_SESSION['usuarioNome']; ?><label style="font-size:16px; color:red">   &nbsp; atividade  &nbsp;</label>  finalizada com sucesso.</p>

                  </div>

             

              

           

              

              </div>
 
 

            </div>
       
 
  

</div>

 

 <!----------------------------------------------------------INICIO-------------------------------------------------------------->  
 
 
 



  
 

 

            </div>

          </div>

          <div class="col-md-4">

             

          </div>

        </div>

      </div>

    

    </div>

  </div>



     

    

<script async src="https://cdn.ampproject.org/v0.js"></script>
 <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
 

  </body>

</html>

