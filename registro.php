<?php include('includes/dados.php') ?>

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

<title>Cadastro</title>

<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/"> <!-- Bootstrap core CSS -->

<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->

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

 
</head>

<body>

<div class="wrapper">



<div class="main-panel">

<div class="content">

        <div class="row">

          <div class="col-md-8">

            <div class="card">

              <div class="card-header">

<h5 class="title">Cadastro</h5>

</div>
 
<form method="post" action="registro.php">

 <?php echo display_error(); ?>
   

<div class="col-md-12">

<div class="row">

</div>

</div>

                    <div class="card-body">

                    <div class="row">

                    <div class="col-md-5 pr-md-1">

                    <div class="form-group">

                    <label>Nome do Aluno</label>

                           <input type="text" name="nome"  required class="form-control" >

                    </div>

                    </div>

                    <div class="col-md-3 px-md-1">

                    <div class="form-group">

                    <label>Usuário</label>

                    <input type="text" name="usuario" required value="<?php echo $usuario; ?>" class="form-control" >

                    </div>

                    </div>

                    <div class="col-md-4 pl-md-1">

                    <div class="form-group">

                        <label for="exampleInputEmail1">E-mail</label>

                    <input type="email" name="email" required value="<?php echo $email; ?>" class="form-control">

                    </div>

                    </div>

                    </div>







                  <div class="row">

                  <div class="col-md-4 pr-md-1">

                      <div class="form-group">

                        <label>Senha</label>                     

                          <input type="password" required class="form-control" name="senha_1">

                      </div>

                    </div>

                     <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>Confirme a senha</label>
                         <input type="password" required class="form-control" name="senha_2">
                     </div>
                    </div>   



                    <div class="col-md-4 pl-md-1">

                    <div class="form-group">

                        <label for="exampleInputEmail1">CPF</label>

 <input type="text" name="cpf"   maxlength="14"  onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' required class="form-control" >

                    </div>

                    </div>         

                  </div>
 

<div class="card-body"><div class="row"><div class="form-group">
                <label>Série</label>
                <select name="serie"  class="form-control btn-primary">
                    <option>Opção</option>
                    <option value="1">1 - ano</option>
                    <option value="2">2 - ano</option>
                    <option value="3">3 - ano</option>
                    <option value="4">4 - ano</option>
                    <option value="5">5 - ano</option>
                </select>                 
</div></div></div>



<div class="row">                  

<div class="col-md-12">

<div class="form-group">
  <?php echo display_error(); ?>
<input type="submit" name="registro_btn"  class="btn btn-fill btn-primary" value="Finalizar">

<a href="index.php" class="btn btn-fill btn-primary" >Voltar</a>

</div>

</div> 

</div>

 

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

                  <center>....</center> 

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



</div>

</div>

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







