<?php 

	session_start();
	// conexão com banco de dados
	$db = mysqli_connect('localhost', 'root', '', 'test'); 
	// declaração inicial de variaveis
    $usuario = "";
	$email    = "";
	$errors   = array(); 
 
	//----------------------------------------==Botão registrar==--------------------------------------------|
if (isset($_POST['registro_btn'])) {
		registro();
}
//----------------------------------------==Botão registrar==------------------------------------------------|

//----------------------------------------==Botão Boletim==--------------------------------------------------|
if (isset($_POST['boletim_btn'])) {
		boletim();
}
//----------------------------------------==Botão Boletim==--------------------------------------------------|


//----------------------------------------==Botão Nota==--------------------------------------------------|
if (isset($_POST['nota_btn'])) {
		nota();
}
//----------------------------------------==Botão Nota==--------------------------------------------------|



//----------------------------------------==Botão add provas==-----------------------------------------------|
if (isset($_POST['erica_btn'])) {
		erica();
}
if (isset($_POST['andressa_btn'])) {
		andressa();
}
if (isset($_POST['malena_btn'])) {
		malena();
}
if (isset($_POST['daiane_btn'])) {
		daiane();
}
if (isset($_POST['daiana_btn'])) {
		daiana();
}
//----------------------------------------==Botão fim add provas==-----------------------------------------------|



//----------------------------------------==Botão inicio fazer provas==-----------------------------------------------|
if (isset($_POST['provas1_btn'])) {
		provas1();
}
if (isset($_POST['provas2_btn'])) {
		provas2();
}
if (isset($_POST['provas3_btn'])) {
		provas3();
}
if (isset($_POST['provas4_btn'])) {
		provas4();
}
if (isset($_POST['provas5_btn'])) {
		provas5();
}
//----------------------------------------==Botão fim fazer provas==-----------------------------------------------|
 


 
 
//----------------------------------------==Botão Login==----------------------------------------------------|

	if (isset($_POST['login_btn'])) {
		login();
	}

//----------------------------------------==Botão Login==----------------------------------------------------|


//----------------------------------------==Botão deslogar==-------------------------------------------------|
 
	if (isset($_GET['logout'])) {
		session_destroy();
		session_unset();
		unset($_SESSION['usuario']);
		header("location: index.php");
	}

//----------------------------------------==Botão deslogar==-------------------------------------------------|

function erica(){ 
 

include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{

if(isset($_POST['erica_btn']))
  {
$userid=$_SESSION['usuarioId'];
$nome=addslashes(htmlspecialchars($_POST['nome']));
$materia=addslashes(htmlspecialchars($_POST['materia']));
$grupo=addslashes(htmlspecialchars($_POST['grupo']));
$imagem1=addslashes(htmlspecialchars($_POST['imagem1']));
$imagem2=addslashes(htmlspecialchars($_POST['imagem2']));
$imagem3=addslashes(htmlspecialchars($_POST['imagem3']));
$imagem4=addslashes(htmlspecialchars($_POST['imagem4']));
$pergunta_1=addslashes(htmlspecialchars($_POST['pergunta_1']));
$pergunta_2=addslashes(htmlspecialchars($_POST['pergunta_2']));
$pergunta_3=addslashes(htmlspecialchars($_POST['pergunta_3']));
$pergunta_4=addslashes(htmlspecialchars($_POST['pergunta_4']));
$pergunta_5=addslashes(htmlspecialchars($_POST['pergunta_5']));
$pergunta_6=addslashes(htmlspecialchars($_POST['pergunta_6']));
$pergunta_7=addslashes(htmlspecialchars($_POST['pergunta_7']));
$pergunta_8=addslashes(htmlspecialchars($_POST['pergunta_8']));
$pergunta_9=addslashes(htmlspecialchars($_POST['pergunta_9']));
$pergunta_10=addslashes(htmlspecialchars($_POST['pergunta_10']));
$pergunta_11=addslashes(htmlspecialchars($_POST['pergunta_11']));
$pergunta_12=addslashes(htmlspecialchars($_POST['pergunta_12']));
$pergunta_13=addslashes(htmlspecialchars($_POST['pergunta_13']));
$pergunta_14=addslashes(htmlspecialchars($_POST['pergunta_14']));
$pergunta_15=addslashes(htmlspecialchars($_POST['pergunta_15']));
$pergunta_16=addslashes(htmlspecialchars($_POST['pergunta_16']));
$pergunta_17=addslashes(htmlspecialchars($_POST['pergunta_17']));
$pergunta_18=addslashes(htmlspecialchars($_POST['pergunta_18']));
$pergunta_19=addslashes(htmlspecialchars($_POST['pergunta_19']));
$pergunta_20=addslashes(htmlspecialchars($_POST['pergunta_20']));
$pergunta_21=addslashes(htmlspecialchars($_POST['pergunta_21']));
$pergunta_22=addslashes(htmlspecialchars($_POST['pergunta_22']));
$pergunta_23=addslashes(htmlspecialchars($_POST['pergunta_23']));
$pergunta_24=addslashes(htmlspecialchars($_POST['pergunta_24']));
$pergunta_25=addslashes(htmlspecialchars($_POST['pergunta_25']));
$pergunta_26=addslashes(htmlspecialchars($_POST['pergunta_26']));
$pergunta_27=addslashes(htmlspecialchars($_POST['pergunta_27']));
$pergunta_28=addslashes(htmlspecialchars($_POST['pergunta_28']));
$pergunta_29=addslashes(htmlspecialchars($_POST['pergunta_29']));
$pergunta_30=addslashes(htmlspecialchars($_POST['pergunta_30']));
$pergunta_31=addslashes(htmlspecialchars($_POST['pergunta_31']));
$pergunta_32=addslashes(htmlspecialchars($_POST['pergunta_32']));
$pergunta_33=addslashes(htmlspecialchars($_POST['pergunta_33']));
$pergunta_34=addslashes(htmlspecialchars($_POST['pergunta_34']));
$pergunta_35=addslashes(htmlspecialchars($_POST['pergunta_35']));
$pergunta_36=addslashes(htmlspecialchars($_POST['pergunta_36']));
$pergunta_37=addslashes(htmlspecialchars($_POST['pergunta_37']));
$pergunta_38=addslashes(htmlspecialchars($_POST['pergunta_38']));
$pergunta_39=addslashes(htmlspecialchars($_POST['pergunta_39']));
$pergunta_40=addslashes(htmlspecialchars($_POST['pergunta_40']));
$pergunta_41=addslashes(htmlspecialchars($_POST['pergunta_41']));
$pergunta_42=addslashes(htmlspecialchars($_POST['pergunta_42']));
$query=mysqli_query($con, "insert into primeiroportugues(id,UserId,nome,materia,grupo,imagem1,imagem2,imagem3,imagem4,pergunta_1,pergunta_2,pergunta_3,pergunta_4,pergunta_5,pergunta_6,pergunta_7,pergunta_8,pergunta_9,pergunta_10,pergunta_11,pergunta_12,pergunta_13,pergunta_14,pergunta_15,pergunta_16,pergunta_17,pergunta_18,pergunta_19,pergunta_20,pergunta_21,pergunta_22,pergunta_23,pergunta_24,pergunta_25,pergunta_26,pergunta_27,pergunta_28,pergunta_29,pergunta_30,pergunta_31,pergunta_32,pergunta_33,pergunta_34,pergunta_35,pergunta_36,pergunta_37,pergunta_38,pergunta_39,pergunta_40,pergunta_41,pergunta_42) value('1','1','$nome','$materia','$grupo','$imagem1','$imagem2','$imagem3','$imagem4','$pergunta_1','$pergunta_2','$pergunta_3','$pergunta_4','$pergunta_5','$pergunta_6','$pergunta_7','$pergunta_8','$pergunta_9','$pergunta_10','$pergunta_11','$pergunta_12','$pergunta_13','$pergunta_14','$pergunta_15','$pergunta_16','$pergunta_17','$pergunta_18','$pergunta_19','$pergunta_20','$pergunta_21','$pergunta_22','$pergunta_23','$pergunta_24','$pergunta_25','$pergunta_26','$pergunta_27','$pergunta_28','$pergunta_29','$pergunta_30','$pergunta_31','$pergunta_32','$pergunta_33','$pergunta_34','$pergunta_35','$pergunta_36','$pergunta_37','$pergunta_38','$pergunta_39','$pergunta_40','$pergunta_41','$pergunta_42')");
if($query){
echo "<script>alert('Prova foi adicionada');</script>";
echo "<script>window.location.href='provas.php'</script>";
} else {
echo "<script>alert('Algo de errado aconteceu. Por favor, tente novamente');</script>";

}
  

}

}

}



function andressa(){ 
 

include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{

if(isset($_POST['andressa_btn']))
  {
$userid=$_SESSION['usuarioId'];
$nome=addslashes(htmlspecialchars($_POST['nome']));
$materia=addslashes(htmlspecialchars($_POST['materia']));
$grupo=addslashes(htmlspecialchars($_POST['grupo']));
$imagem1=addslashes(htmlspecialchars($_POST['imagem1']));
$imagem2=addslashes(htmlspecialchars($_POST['imagem2']));
$imagem3=addslashes(htmlspecialchars($_POST['imagem3']));
$imagem4=addslashes(htmlspecialchars($_POST['imagem4']));
$pergunta_1=addslashes(htmlspecialchars($_POST['pergunta_1']));
$pergunta_2=addslashes(htmlspecialchars($_POST['pergunta_2']));
$pergunta_3=addslashes(htmlspecialchars($_POST['pergunta_3']));
$pergunta_4=addslashes(htmlspecialchars($_POST['pergunta_4']));
$pergunta_5=addslashes(htmlspecialchars($_POST['pergunta_5']));
$pergunta_6=addslashes(htmlspecialchars($_POST['pergunta_6']));
$pergunta_7=addslashes(htmlspecialchars($_POST['pergunta_7']));
$pergunta_8=addslashes(htmlspecialchars($_POST['pergunta_8']));
$pergunta_9=addslashes(htmlspecialchars($_POST['pergunta_9']));
$pergunta_10=addslashes(htmlspecialchars($_POST['pergunta_10']));
$pergunta_11=addslashes(htmlspecialchars($_POST['pergunta_11']));
$pergunta_12=addslashes(htmlspecialchars($_POST['pergunta_12']));
$pergunta_13=addslashes(htmlspecialchars($_POST['pergunta_13']));
$pergunta_14=addslashes(htmlspecialchars($_POST['pergunta_14']));
$pergunta_15=addslashes(htmlspecialchars($_POST['pergunta_15']));
$pergunta_16=addslashes(htmlspecialchars($_POST['pergunta_16']));
$pergunta_17=addslashes(htmlspecialchars($_POST['pergunta_17']));
$pergunta_18=addslashes(htmlspecialchars($_POST['pergunta_18']));
$pergunta_19=addslashes(htmlspecialchars($_POST['pergunta_19']));
$pergunta_20=addslashes(htmlspecialchars($_POST['pergunta_20']));
$pergunta_21=addslashes(htmlspecialchars($_POST['pergunta_21']));
$pergunta_22=addslashes(htmlspecialchars($_POST['pergunta_22']));
$pergunta_23=addslashes(htmlspecialchars($_POST['pergunta_23']));
$pergunta_24=addslashes(htmlspecialchars($_POST['pergunta_24']));
$pergunta_25=addslashes(htmlspecialchars($_POST['pergunta_25']));
$pergunta_26=addslashes(htmlspecialchars($_POST['pergunta_26']));
$pergunta_27=addslashes(htmlspecialchars($_POST['pergunta_27']));
$pergunta_28=addslashes(htmlspecialchars($_POST['pergunta_28']));
$pergunta_29=addslashes(htmlspecialchars($_POST['pergunta_29']));
$pergunta_30=addslashes(htmlspecialchars($_POST['pergunta_30']));
$pergunta_31=addslashes(htmlspecialchars($_POST['pergunta_31']));
$pergunta_32=addslashes(htmlspecialchars($_POST['pergunta_32']));
$pergunta_33=addslashes(htmlspecialchars($_POST['pergunta_33']));
$pergunta_34=addslashes(htmlspecialchars($_POST['pergunta_34']));
$pergunta_35=addslashes(htmlspecialchars($_POST['pergunta_35']));
$pergunta_36=addslashes(htmlspecialchars($_POST['pergunta_36']));
$pergunta_37=addslashes(htmlspecialchars($_POST['pergunta_37']));
$pergunta_38=addslashes(htmlspecialchars($_POST['pergunta_38']));
$pergunta_39=addslashes(htmlspecialchars($_POST['pergunta_39']));
$pergunta_40=addslashes(htmlspecialchars($_POST['pergunta_40']));
$pergunta_41=addslashes(htmlspecialchars($_POST['pergunta_41']));
$pergunta_42=addslashes(htmlspecialchars($_POST['pergunta_42']));
$query=mysqli_query($con, "insert into segundomatematica(id,UserId,nome,materia,grupo,imagem1,imagem2,imagem3,imagem4,pergunta_1,pergunta_2,pergunta_3,pergunta_4,pergunta_5,pergunta_6,pergunta_7,pergunta_8,pergunta_9,pergunta_10,pergunta_11,pergunta_12,pergunta_13,pergunta_14,pergunta_15,pergunta_16,pergunta_17,pergunta_18,pergunta_19,pergunta_20,pergunta_21,pergunta_22,pergunta_23,pergunta_24,pergunta_25,pergunta_26,pergunta_27,pergunta_28,pergunta_29,pergunta_30,pergunta_31,pergunta_32,pergunta_33,pergunta_34,pergunta_35,pergunta_36,pergunta_37,pergunta_38,pergunta_39,pergunta_40,pergunta_41,pergunta_42) value('2','2','$nome','$materia','$grupo','$imagem1','$imagem2','$imagem3','$imagem4','$pergunta_1','$pergunta_2','$pergunta_3','$pergunta_4','$pergunta_5','$pergunta_6','$pergunta_7','$pergunta_8','$pergunta_9','$pergunta_10','$pergunta_11','$pergunta_12','$pergunta_13','$pergunta_14','$pergunta_15','$pergunta_16','$pergunta_17','$pergunta_18','$pergunta_19','$pergunta_20','$pergunta_21','$pergunta_22','$pergunta_23','$pergunta_24','$pergunta_25','$pergunta_26','$pergunta_27','$pergunta_28','$pergunta_29','$pergunta_30','$pergunta_31','$pergunta_32','$pergunta_33','$pergunta_34','$pergunta_35','$pergunta_36','$pergunta_37','$pergunta_38','$pergunta_39','$pergunta_40','$pergunta_41','$pergunta_42')");
if($query){
echo "<script>alert('Prova foi adicionada');</script>";
echo "<script>window.location.href='provas.php'</script>";
} else {
echo "<script>alert('Algo de errado aconteceu. Por favor, tente novamente');</script>";

}
  

}

}

}


 


function malena(){ 
 

include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{

if(isset($_POST['malena_btn']))
  {
$userid=$_SESSION['usuarioId'];
$nome=addslashes(htmlspecialchars($_POST['nome']));
$materia=addslashes(htmlspecialchars($_POST['materia']));
$grupo=addslashes(htmlspecialchars($_POST['grupo']));
$imagem1=addslashes(htmlspecialchars($_POST['imagem1']));
$imagem2=addslashes(htmlspecialchars($_POST['imagem2']));
$imagem3=addslashes(htmlspecialchars($_POST['imagem3']));
$imagem4=addslashes(htmlspecialchars($_POST['imagem4']));
$pergunta_1=addslashes(htmlspecialchars($_POST['pergunta_1']));
$pergunta_2=addslashes(htmlspecialchars($_POST['pergunta_2']));
$pergunta_3=addslashes(htmlspecialchars($_POST['pergunta_3']));
$pergunta_4=addslashes(htmlspecialchars($_POST['pergunta_4']));
$pergunta_5=addslashes(htmlspecialchars($_POST['pergunta_5']));
$pergunta_6=addslashes(htmlspecialchars($_POST['pergunta_6']));
$pergunta_7=addslashes(htmlspecialchars($_POST['pergunta_7']));
$pergunta_8=addslashes(htmlspecialchars($_POST['pergunta_8']));
$pergunta_9=addslashes(htmlspecialchars($_POST['pergunta_9']));
$pergunta_10=addslashes(htmlspecialchars($_POST['pergunta_10']));
$pergunta_11=addslashes(htmlspecialchars($_POST['pergunta_11']));
$pergunta_12=addslashes(htmlspecialchars($_POST['pergunta_12']));
$pergunta_13=addslashes(htmlspecialchars($_POST['pergunta_13']));
$pergunta_14=addslashes(htmlspecialchars($_POST['pergunta_14']));
$pergunta_15=addslashes(htmlspecialchars($_POST['pergunta_15']));
$pergunta_16=addslashes(htmlspecialchars($_POST['pergunta_16']));
$pergunta_17=addslashes(htmlspecialchars($_POST['pergunta_17']));
$pergunta_18=addslashes(htmlspecialchars($_POST['pergunta_18']));
$pergunta_19=addslashes(htmlspecialchars($_POST['pergunta_19']));
$pergunta_20=addslashes(htmlspecialchars($_POST['pergunta_20']));
$pergunta_21=addslashes(htmlspecialchars($_POST['pergunta_21']));
$pergunta_22=addslashes(htmlspecialchars($_POST['pergunta_22']));
$pergunta_23=addslashes(htmlspecialchars($_POST['pergunta_23']));
$pergunta_24=addslashes(htmlspecialchars($_POST['pergunta_24']));
$pergunta_25=addslashes(htmlspecialchars($_POST['pergunta_25']));
$pergunta_26=addslashes(htmlspecialchars($_POST['pergunta_26']));
$pergunta_27=addslashes(htmlspecialchars($_POST['pergunta_27']));
$pergunta_28=addslashes(htmlspecialchars($_POST['pergunta_28']));
$pergunta_29=addslashes(htmlspecialchars($_POST['pergunta_29']));
$pergunta_30=addslashes(htmlspecialchars($_POST['pergunta_30']));
$query=mysqli_query($con, "insert into terceiromatematica(id,UserId,nome,materia,grupo,imagem1,imagem2,imagem3,imagem4,pergunta_1,pergunta_2,pergunta_3,pergunta_4,pergunta_5,pergunta_6,pergunta_7,pergunta_8,pergunta_9,pergunta_10,pergunta_11,pergunta_12,pergunta_13,pergunta_14,pergunta_15,pergunta_16,pergunta_17,pergunta_18,pergunta_19,pergunta_20,pergunta_21,pergunta_22,pergunta_23,pergunta_24,pergunta_25,pergunta_26,pergunta_27,pergunta_28,pergunta_29,pergunta_30) value('3','3','$nome','$materia','$grupo','$imagem1','$imagem2','$imagem3','$imagem4','$pergunta_1','$pergunta_2','$pergunta_3','$pergunta_4','$pergunta_5','$pergunta_6','$pergunta_7','$pergunta_8','$pergunta_9','$pergunta_10','$pergunta_11','$pergunta_12','$pergunta_13','$pergunta_14','$pergunta_15','$pergunta_16','$pergunta_17','$pergunta_18','$pergunta_19','$pergunta_20','$pergunta_21','$pergunta_22','$pergunta_23','$pergunta_24','$pergunta_25','$pergunta_26','$pergunta_27','$pergunta_28','$pergunta_29','$pergunta_30')");
if($query){
echo "<script>alert('Prova foi adicionada');</script>";
echo "<script>window.location.href='provas.php'</script>";
} else {
echo "<script>alert('Algo de errado aconteceu. Por favor, tente novamente');</script>";

}
  

}

}

}




function daiane(){ 
 

include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{

if(isset($_POST['daiane_btn']))
  {
$userid=$_SESSION['usuarioId'];
$nome=addslashes(htmlspecialchars($_POST['nome']));
$materia=addslashes(htmlspecialchars($_POST['materia']));
$grupo=addslashes(htmlspecialchars($_POST['grupo']));
$imagem1=addslashes(htmlspecialchars($_POST['imagem1']));
$imagem2=addslashes(htmlspecialchars($_POST['imagem2']));
$imagem3=addslashes(htmlspecialchars($_POST['imagem3']));
$imagem4=addslashes(htmlspecialchars($_POST['imagem4']));
$pergunta_1=addslashes(htmlspecialchars($_POST['pergunta_1']));
$pergunta_2=addslashes(htmlspecialchars($_POST['pergunta_2']));
$pergunta_3=addslashes(htmlspecialchars($_POST['pergunta_3']));
$pergunta_4=addslashes(htmlspecialchars($_POST['pergunta_4']));
$pergunta_5=addslashes(htmlspecialchars($_POST['pergunta_5']));
$pergunta_6=addslashes(htmlspecialchars($_POST['pergunta_6']));
$pergunta_7=addslashes(htmlspecialchars($_POST['pergunta_7']));
$pergunta_8=addslashes(htmlspecialchars($_POST['pergunta_8']));
$pergunta_9=addslashes(htmlspecialchars($_POST['pergunta_9']));
$pergunta_10=addslashes(htmlspecialchars($_POST['pergunta_10']));
$pergunta_11=addslashes(htmlspecialchars($_POST['pergunta_11']));
$pergunta_12=addslashes(htmlspecialchars($_POST['pergunta_12']));
$pergunta_13=addslashes(htmlspecialchars($_POST['pergunta_13']));
$pergunta_14=addslashes(htmlspecialchars($_POST['pergunta_14']));
$pergunta_15=addslashes(htmlspecialchars($_POST['pergunta_15']));
$pergunta_16=addslashes(htmlspecialchars($_POST['pergunta_16']));
$pergunta_17=addslashes(htmlspecialchars($_POST['pergunta_17']));
$pergunta_18=addslashes(htmlspecialchars($_POST['pergunta_18']));
$pergunta_19=addslashes(htmlspecialchars($_POST['pergunta_19']));
$pergunta_20=addslashes(htmlspecialchars($_POST['pergunta_20']));
$pergunta_21=addslashes(htmlspecialchars($_POST['pergunta_21']));
$pergunta_22=addslashes(htmlspecialchars($_POST['pergunta_22']));
$pergunta_23=addslashes(htmlspecialchars($_POST['pergunta_23']));
$pergunta_24=addslashes(htmlspecialchars($_POST['pergunta_24']));
$pergunta_25=addslashes(htmlspecialchars($_POST['pergunta_25']));
$pergunta_26=addslashes(htmlspecialchars($_POST['pergunta_26']));
$pergunta_27=addslashes(htmlspecialchars($_POST['pergunta_27']));
$pergunta_28=addslashes(htmlspecialchars($_POST['pergunta_28']));
$pergunta_29=addslashes(htmlspecialchars($_POST['pergunta_29']));
$pergunta_30=addslashes(htmlspecialchars($_POST['pergunta_30']));
$query=mysqli_query($con, "insert into quartomatematica(id,UserId,nome,materia,grupo,imagem1,imagem2,imagem3,imagem4,pergunta_1,pergunta_2,pergunta_3,pergunta_4,pergunta_5,pergunta_6,pergunta_7,pergunta_8,pergunta_9,pergunta_10,pergunta_11,pergunta_12,pergunta_13,pergunta_14,pergunta_15,pergunta_16,pergunta_17,pergunta_18,pergunta_19,pergunta_20,pergunta_21,pergunta_22,pergunta_23,pergunta_24,pergunta_25,pergunta_26,pergunta_27,pergunta_28,pergunta_29,pergunta_30) value('4','4','$nome','$materia','$grupo','$imagem1','$imagem2','$imagem3','$imagem4','$pergunta_1','$pergunta_2','$pergunta_3','$pergunta_4','$pergunta_5','$pergunta_6','$pergunta_7','$pergunta_8','$pergunta_9','$pergunta_10','$pergunta_11','$pergunta_12','$pergunta_13','$pergunta_14','$pergunta_15','$pergunta_16','$pergunta_17','$pergunta_18','$pergunta_19','$pergunta_20','$pergunta_21','$pergunta_22','$pergunta_23','$pergunta_24','$pergunta_25','$pergunta_26','$pergunta_27','$pergunta_28','$pergunta_29','$pergunta_30')");
if($query){
echo "<script>alert('Prova foi adicionada');</script>";
echo "<script>window.location.href='provas.php'</script>";
} else {
echo "<script>alert('Algo de errado aconteceu. Por favor, tente novamente');</script>";

}
  

}

}

}



function daiana(){ 
 

include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{

if(isset($_POST['daiana_btn']))
  {
$userid=$_SESSION['usuarioId'];

$nome=addslashes(htmlspecialchars($_POST['nome']));
$materia=addslashes(htmlspecialchars($_POST['materia']));
$grupo=addslashes(htmlspecialchars($_POST['grupo']));
$imagem1=addslashes(htmlspecialchars($_POST['imagem1']));
$imagem2=addslashes(htmlspecialchars($_POST['imagem2']));
$imagem3=addslashes(htmlspecialchars($_POST['imagem3']));
$imagem4=addslashes(htmlspecialchars($_POST['imagem4']));
$pergunta_1=addslashes(htmlspecialchars($_POST['pergunta_1']));
$pergunta_2=addslashes(htmlspecialchars($_POST['pergunta_2']));
$pergunta_3=addslashes(htmlspecialchars($_POST['pergunta_3']));
$pergunta_4=addslashes(htmlspecialchars($_POST['pergunta_4']));
$pergunta_5=addslashes(htmlspecialchars($_POST['pergunta_5']));
$pergunta_6=addslashes(htmlspecialchars($_POST['pergunta_6']));
$pergunta_7=addslashes(htmlspecialchars($_POST['pergunta_7']));
$pergunta_8=addslashes(htmlspecialchars($_POST['pergunta_8']));
$pergunta_9=addslashes(htmlspecialchars($_POST['pergunta_9']));
$pergunta_10=addslashes(htmlspecialchars($_POST['pergunta_10']));
$pergunta_11=addslashes(htmlspecialchars($_POST['pergunta_11']));
$pergunta_12=addslashes(htmlspecialchars($_POST['pergunta_12']));
$pergunta_13=addslashes(htmlspecialchars($_POST['pergunta_13']));
$pergunta_14=addslashes(htmlspecialchars($_POST['pergunta_14']));
$pergunta_15=addslashes(htmlspecialchars($_POST['pergunta_15']));
$pergunta_16=addslashes(htmlspecialchars($_POST['pergunta_16']));
$pergunta_17=addslashes(htmlspecialchars($_POST['pergunta_17']));
$pergunta_18=addslashes(htmlspecialchars($_POST['pergunta_18']));
$pergunta_19=addslashes(htmlspecialchars($_POST['pergunta_19']));
$pergunta_20=addslashes(htmlspecialchars($_POST['pergunta_20']));
$pergunta_21=addslashes(htmlspecialchars($_POST['pergunta_21']));
$pergunta_22=addslashes(htmlspecialchars($_POST['pergunta_22']));
$pergunta_23=addslashes(htmlspecialchars($_POST['pergunta_23']));
$pergunta_24=addslashes(htmlspecialchars($_POST['pergunta_24']));
$pergunta_25=addslashes(htmlspecialchars($_POST['pergunta_25']));
$pergunta_26=addslashes(htmlspecialchars($_POST['pergunta_26']));
$pergunta_27=addslashes(htmlspecialchars($_POST['pergunta_27']));
$pergunta_28=addslashes(htmlspecialchars($_POST['pergunta_28']));
$pergunta_29=addslashes(htmlspecialchars($_POST['pergunta_29']));
$pergunta_30=addslashes(htmlspecialchars($_POST['pergunta_30']));
$query=mysqli_query($con, "insert into quintoportugues(id,UserId,nome,materia,grupo,imagem1,imagem2,imagem3,imagem4,pergunta_1,pergunta_2,pergunta_3,pergunta_4,pergunta_5,pergunta_6,pergunta_7,pergunta_8,pergunta_9,pergunta_10,pergunta_11,pergunta_12,pergunta_13,pergunta_14,pergunta_15,pergunta_16,pergunta_17,pergunta_18,pergunta_19,pergunta_20,pergunta_21,pergunta_22,pergunta_23,pergunta_24,pergunta_25,pergunta_26,pergunta_27,pergunta_28,pergunta_29,pergunta_30) value('5','5','$nome','$materia','$grupo','$imagem1','$imagem2','$imagem3','$imagem4','$pergunta_1','$pergunta_2','$pergunta_3','$pergunta_4','$pergunta_5','$pergunta_6','$pergunta_7','$pergunta_8','$pergunta_9','$pergunta_10','$pergunta_11','$pergunta_12','$pergunta_13','$pergunta_14','$pergunta_15','$pergunta_16','$pergunta_17','$pergunta_18','$pergunta_19','$pergunta_20','$pergunta_21','$pergunta_22','$pergunta_23','$pergunta_24','$pergunta_25','$pergunta_26','$pergunta_27','$pergunta_28','$pergunta_29','$pergunta_30')");
if($query){
echo "<script>alert('Prova foi adicionada');</script>";
echo "<script>window.location.href='provas.php'</script>";
} else {
echo "<script>alert('Algo de errado aconteceu. Por favor, tente novamente');</script>";

                 }
  

          }

      }

}

 




function boletim(){ 
 
include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{
    if(isset($_POST['boletim_btn']))
  {
$id=$_SESSION['usuarioId'];
$nome=$_POST['nome'];

 $msg=$_POST['msg'];

     $query=mysqli_query($con, "update usuario set nome ='$nome', msg='$msg' where ID='$id'");
    if ($query) {
    $msg="<p class='text-danger alert'>Boletim realizado com sucesso.</p>";
  }
  else
    {
      $msg="Algo deu errado. Por favor, tente novamente.";
    }
  }
 }
}
 
function provas1(){
global $db;
 
	$nome = addslashes(htmlspecialchars($_POST['nome'])); //materia
	$materia = addslashes(htmlspecialchars($_POST['materia']));
	$cpf = addslashes(htmlspecialchars($_POST['cpf']));
	$grupo = addslashes(htmlspecialchars($_POST['grupo'])); //addslashes(htmlspecialchars($_POST['nome']));
	$resposta_1 = addslashes(htmlspecialchars($_POST['resposta_1']));
	$resposta_2 = addslashes(htmlspecialchars($_POST['resposta_2']));
	$resposta_3 = addslashes(htmlspecialchars($_POST['resposta_3']));
	$resposta_4 = addslashes(htmlspecialchars($_POST['resposta_4']));
	$resposta_5 = addslashes(htmlspecialchars($_POST['resposta_5']));
	$resposta_6 = addslashes(htmlspecialchars($_POST['resposta_6']));
	$resposta_7 = addslashes(htmlspecialchars($_POST['resposta_7']));
	$resposta_8 = addslashes(htmlspecialchars($_POST['resposta_8']));
	$resposta_9 = addslashes(htmlspecialchars($_POST['resposta_9']));
	$resposta_10 = addslashes(htmlspecialchars($_POST['resposta_10']));
	$resposta_11 = addslashes(htmlspecialchars($_POST['resposta_11']));
	$resposta_12 = addslashes(htmlspecialchars($_POST['resposta_12']));
	$resposta_13 = addslashes(htmlspecialchars($_POST['resposta_13']));
	$resposta_14 = addslashes(htmlspecialchars($_POST['resposta_14']));
	$resposta_15 = addslashes(htmlspecialchars($_POST['resposta_15']));
	$resposta_16 = addslashes(htmlspecialchars($_POST['resposta_16']));
	$resposta_17 = addslashes(htmlspecialchars($_POST['resposta_17']));
	$resposta_18 = addslashes(htmlspecialchars($_POST['resposta_18']));
	$resposta_19 = addslashes(htmlspecialchars($_POST['resposta_19']));
	//echo "$nome_usuario - $email_usuario";	 
	 	$pdo = new PDO("mysql:host=localhost;dbname=escola","root","");
	 	$sql = $pdo->prepare("SELECT * FROM 1anoingles WHERE cpf=:cpf");
	 	$sql->bindValue(":cpf",$_POST['cpf']);
	 	$sql->execute();
	 	if($sql->rowCount()){
	 		echo"<script>alert('CPF já utilizado para esta prova!');location.href='prova.php';</script>";
	 		//array_push($errors, "<div class='alert alert-danger'>Cliente ja cadastrado!</div>");
	 	}else{ 	
	$result_usuario = "INSERT INTO 1anoingles (id, nome, materia, cpf, grupo, resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8, resposta_9, resposta_10, resposta_11, resposta_12, resposta_13, resposta_14, resposta_15, resposta_16, resposta_17, resposta_18, resposta_19) VALUES ('$id','$nome','$materia','$cpf','$grupo','$resposta_1','$resposta_2','$resposta_3','$resposta_4','$resposta_5','$resposta_6','$resposta_7','$resposta_8','$resposta_9','$resposta_10','$resposta_11','$resposta_12','$resposta_13','$resposta_14','$resposta_15','$resposta_16','$resposta_17','$resposta_18','$resposta_19')";
	$resultado_usuario = mysqli_query($db, $result_usuario);	
	if(mysqli_affected_rows($db) != 0){
				header('location:sucesso.php');	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=prova.php'>
					<script type=\"text/javascript\">
						alert(\"A prova não foi finalizar.\");
					</script>
				";	 
			}
		}
}


 
 function provas2(){
global $db;
 
	$nome = addslashes(htmlspecialchars($_POST['nome'])); //materia
	$materia = addslashes(htmlspecialchars($_POST['materia']));
	$cpf = addslashes(htmlspecialchars($_POST['cpf']));
	$grupo = addslashes(htmlspecialchars($_POST['grupo'])); //addslashes(htmlspecialchars($_POST['nome']));
	$resposta_1 = addslashes(htmlspecialchars($_POST['resposta_1']));
	$resposta_2 = addslashes(htmlspecialchars($_POST['resposta_2']));
	$resposta_3 = addslashes(htmlspecialchars($_POST['resposta_3']));
	$resposta_4 = addslashes(htmlspecialchars($_POST['resposta_4']));
	$resposta_5 = addslashes(htmlspecialchars($_POST['resposta_5']));
	$resposta_6 = addslashes(htmlspecialchars($_POST['resposta_6']));
	$resposta_7 = addslashes(htmlspecialchars($_POST['resposta_7']));
	$resposta_8 = addslashes(htmlspecialchars($_POST['resposta_8']));
	$resposta_9 = addslashes(htmlspecialchars($_POST['resposta_9']));
	$resposta_10 = addslashes(htmlspecialchars($_POST['resposta_10']));
	$resposta_11 = addslashes(htmlspecialchars($_POST['resposta_11']));
	$resposta_12 = addslashes(htmlspecialchars($_POST['resposta_12']));
	$resposta_13 = addslashes(htmlspecialchars($_POST['resposta_13']));
	$resposta_14 = addslashes(htmlspecialchars($_POST['resposta_14']));
	$resposta_15 = addslashes(htmlspecialchars($_POST['resposta_15']));
	$resposta_16 = addslashes(htmlspecialchars($_POST['resposta_16']));
	$resposta_17 = addslashes(htmlspecialchars($_POST['resposta_17']));
	$resposta_18 = addslashes(htmlspecialchars($_POST['resposta_18']));
	$resposta_19 = addslashes(htmlspecialchars($_POST['resposta_19']));
	//echo "$nome_usuario - $email_usuario";
	    $pdo = new PDO("mysql:host=localhost;dbname=escola","root","");
	 	$sql = $pdo->prepare("SELECT * FROM 2anoingles WHERE cpf=:cpf");
	 	$sql->bindValue(":cpf",$_POST['cpf']);
	 	$sql->execute();
	 	if($sql->rowCount()){
	 		echo"<script>alert('CPF já utilizado para esta prova!');location.href='prova.php';</script>";
	 		//array_push($errors, "<div class='alert alert-danger'>Cliente ja cadastrado!</div>");
	 	}else{ 	

	$result_usuario = "INSERT INTO 2anoingles (id, nome, materia, cpf, grupo, resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8, resposta_9, resposta_10, resposta_11, resposta_12, resposta_13, resposta_14, resposta_15, resposta_16, resposta_17, resposta_18, resposta_19) VALUES ('$id','$nome','$materia','$cpf','$grupo','$resposta_1','$resposta_2','$resposta_3','$resposta_4','$resposta_5','$resposta_6','$resposta_7','$resposta_8','$resposta_9','$resposta_10','$resposta_11','$resposta_12','$resposta_13','$resposta_14','$resposta_15','$resposta_16','$resposta_17','$resposta_18','$resposta_19')";
	$resultado_usuario = mysqli_query($db, $result_usuario);	
	
	if(mysqli_affected_rows($db) != 0){
				header('location:sucesso.php');	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=prova.php'>
					<script type=\"text/javascript\">
						alert(\"A prova não foi finalizar.\");
					</script>
				";	
			}
		}
}



function provas3(){
global $db;
 
	$nome = addslashes(htmlspecialchars($_POST['nome'])); //materia
	$materia = addslashes(htmlspecialchars($_POST['materia']));
	$cpf = addslashes(htmlspecialchars($_POST['cpf']));
	$grupo = addslashes(htmlspecialchars($_POST['grupo'])); //addslashes(htmlspecialchars($_POST['nome']));
	$resposta_1 = addslashes(htmlspecialchars($_POST['resposta_1']));
	$resposta_2 = addslashes(htmlspecialchars($_POST['resposta_2']));
	$resposta_3 = addslashes(htmlspecialchars($_POST['resposta_3']));
	$resposta_4 = addslashes(htmlspecialchars($_POST['resposta_4']));
	$resposta_5 = addslashes(htmlspecialchars($_POST['resposta_5']));
	$resposta_6 = addslashes(htmlspecialchars($_POST['resposta_6']));
	$resposta_7 = addslashes(htmlspecialchars($_POST['resposta_7']));
	$resposta_8 = addslashes(htmlspecialchars($_POST['resposta_8']));
	$resposta_9 = addslashes(htmlspecialchars($_POST['resposta_9']));
	$resposta_10 = addslashes(htmlspecialchars($_POST['resposta_10']));
	$resposta_11 = addslashes(htmlspecialchars($_POST['resposta_11']));
	$resposta_12 = addslashes(htmlspecialchars($_POST['resposta_12']));
	$resposta_13 = addslashes(htmlspecialchars($_POST['resposta_13']));
	$resposta_14 = addslashes(htmlspecialchars($_POST['resposta_14']));
	$resposta_15 = addslashes(htmlspecialchars($_POST['resposta_15']));
	$resposta_16 = addslashes(htmlspecialchars($_POST['resposta_16']));
	$resposta_17 = addslashes(htmlspecialchars($_POST['resposta_17']));
	$resposta_18 = addslashes(htmlspecialchars($_POST['resposta_18']));
	$resposta_19 = addslashes(htmlspecialchars($_POST['resposta_19']));
	//echo "$nome_usuario - $email_usuario";
	 
		$pdo = new PDO("mysql:host=localhost;dbname=escola","root","");
	 	$sql = $pdo->prepare("SELECT * FROM 3anoingles WHERE cpf=:cpf");
	 	$sql->bindValue(":cpf",$_POST['cpf']);
	 	$sql->execute();
	 	if($sql->rowCount()){
	 		echo"<script>alert('CPF já utilizado para esta prova!');location.href='prova.php';</script>";
	 		//array_push($errors, "<div class='alert alert-danger'>Cliente ja cadastrado!</div>");
	 	}else{ 	

	$result_usuario = "INSERT INTO 3anoingles (id, nome, materia, cpf, grupo, resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8, resposta_9, resposta_10, resposta_11, resposta_12, resposta_13, resposta_14, resposta_15, resposta_16, resposta_17, resposta_18, resposta_19) VALUES ('$id','$nome','$materia','$cpf','$grupo','$resposta_1','$resposta_2','$resposta_3','$resposta_4','$resposta_5','$resposta_6','$resposta_7','$resposta_8','$resposta_9','$resposta_10','$resposta_11','$resposta_12','$resposta_13','$resposta_14','$resposta_15','$resposta_16','$resposta_17','$resposta_18','$resposta_19')";
	$resultado_usuario = mysqli_query($db, $result_usuario);	
	if(mysqli_affected_rows($db) != 0){
				header('location:sucesso.php');	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=prova.php'>
					<script type=\"text/javascript\">
						alert(\"A prova não foi finalizar.\");
					</script>
				";	
			}
		}
}



function provas4(){
global $db;
 
	$nome = addslashes(htmlspecialchars($_POST['nome'])); //materia
	$materia = addslashes(htmlspecialchars($_POST['materia']));
	$cpf = addslashes(htmlspecialchars($_POST['cpf']));
	$grupo = addslashes(htmlspecialchars($_POST['grupo'])); //addslashes(htmlspecialchars($_POST['nome']));
	$resposta_1 = addslashes(htmlspecialchars($_POST['resposta_1']));
	$resposta_2 = addslashes(htmlspecialchars($_POST['resposta_2']));
	$resposta_3 = addslashes(htmlspecialchars($_POST['resposta_3']));
	$resposta_4 = addslashes(htmlspecialchars($_POST['resposta_4']));
	$resposta_5 = addslashes(htmlspecialchars($_POST['resposta_5']));
	$resposta_6 = addslashes(htmlspecialchars($_POST['resposta_6']));
	$resposta_7 = addslashes(htmlspecialchars($_POST['resposta_7']));
	$resposta_8 = addslashes(htmlspecialchars($_POST['resposta_8']));
	$resposta_9 = addslashes(htmlspecialchars($_POST['resposta_9']));
	$resposta_10 = addslashes(htmlspecialchars($_POST['resposta_10']));
	$resposta_11 = addslashes(htmlspecialchars($_POST['resposta_11']));
	$resposta_12 = addslashes(htmlspecialchars($_POST['resposta_12']));
	$resposta_13 = addslashes(htmlspecialchars($_POST['resposta_13']));
	$resposta_14 = addslashes(htmlspecialchars($_POST['resposta_14']));
	$resposta_15 = addslashes(htmlspecialchars($_POST['resposta_15']));
	$resposta_16 = addslashes(htmlspecialchars($_POST['resposta_16']));
	$resposta_17 = addslashes(htmlspecialchars($_POST['resposta_17']));
	$resposta_18 = addslashes(htmlspecialchars($_POST['resposta_18']));
	$resposta_19 = addslashes(htmlspecialchars($_POST['resposta_19']));
	//echo "$nome_usuario - $email_usuario";
	 
	$pdo = new PDO("mysql:host=localhost;dbname=escola","root","");
	 	$sql = $pdo->prepare("SELECT * FROM 4anoingles WHERE cpf=:cpf");
	 	$sql->bindValue(":cpf",$_POST['cpf']);
	 	$sql->execute();
	 	if($sql->rowCount()){
	 		echo"<script>alert('CPF já utilizado para esta prova!');location.href='prova.php';</script>";
	 		//array_push($errors, "<div class='alert alert-danger'>Cliente ja cadastrado!</div>");
	 	}else{ 	

	$result_usuario = "INSERT INTO 4anoingles (id, nome, materia, cpf, grupo, resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8, resposta_9, resposta_10, resposta_11, resposta_12, resposta_13, resposta_14, resposta_15, resposta_16, resposta_17, resposta_18, resposta_19) VALUES ('$id','$nome','$materia','$cpf','$grupo','$resposta_1','$resposta_2','$resposta_3','$resposta_4','$resposta_5','$resposta_6','$resposta_7','$resposta_8','$resposta_9','$resposta_10','$resposta_11','$resposta_12','$resposta_13','$resposta_14','$resposta_15','$resposta_16','$resposta_17','$resposta_18','$resposta_19')";
	$resultado_usuario = mysqli_query($db, $result_usuario);	
	if(mysqli_affected_rows($db) != 0){
				header('location:sucesso.php');	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=prova.php'>
					<script type=\"text/javascript\">
						alert(\"A prova não foi finalizar.\");
					</script>
				";	
			}
		}
}
  
 




function provas5(){
global $db;
 
	$nome = addslashes(htmlspecialchars($_POST['nome'])); //materia
	$materia = addslashes(htmlspecialchars($_POST['materia']));
	$cpf = addslashes(htmlspecialchars($_POST['cpf']));
	$grupo = addslashes(htmlspecialchars($_POST['grupo'])); //addslashes(htmlspecialchars($_POST['nome']));
	$resposta_1 = addslashes(htmlspecialchars($_POST['resposta_1']));
	$resposta_2 = addslashes(htmlspecialchars($_POST['resposta_2']));
	$resposta_3 = addslashes(htmlspecialchars($_POST['resposta_3']));
	$resposta_4 = addslashes(htmlspecialchars($_POST['resposta_4']));
	$resposta_5 = addslashes(htmlspecialchars($_POST['resposta_5']));
	$resposta_6 = addslashes(htmlspecialchars($_POST['resposta_6']));
	$resposta_7 = addslashes(htmlspecialchars($_POST['resposta_7']));
	$resposta_8 = addslashes(htmlspecialchars($_POST['resposta_8']));
	$resposta_9 = addslashes(htmlspecialchars($_POST['resposta_9']));
	$resposta_10 = addslashes(htmlspecialchars($_POST['resposta_10']));
	$resposta_11 = addslashes(htmlspecialchars($_POST['resposta_11']));
	$resposta_12 = addslashes(htmlspecialchars($_POST['resposta_12']));
	$resposta_13 = addslashes(htmlspecialchars($_POST['resposta_13']));
	$resposta_14 = addslashes(htmlspecialchars($_POST['resposta_14']));
	$resposta_15 = addslashes(htmlspecialchars($_POST['resposta_15']));
	$resposta_16 = addslashes(htmlspecialchars($_POST['resposta_16']));
	$resposta_17 = addslashes(htmlspecialchars($_POST['resposta_17']));
	$resposta_18 = addslashes(htmlspecialchars($_POST['resposta_18']));
	$resposta_19 = addslashes(htmlspecialchars($_POST['resposta_19']));
	//echo "$nome_usuario - $email_usuario"; 
	 
	 	$pdo = new PDO("mysql:host=localhost;dbname=escola","root","");
	 	$sql = $pdo->prepare("SELECT * FROM 5anoportugues WHERE cpf=:cpf");
	 	$sql->bindValue(":cpf",$_POST['cpf']);
	 	$sql->execute();
	 	if($sql->rowCount()){
	 		echo"<script>alert('CPF já utilizado para esta prova!');location.href='prova.php';</script>";
	 		//array_push($errors, "<div class='alert alert-danger'>Cliente ja cadastrado!</div>");
	 	}else{ 	

	$result_usuario = "INSERT INTO 5anoportugues (id, nome, materia, cpf,grupo, resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8, resposta_9, resposta_10, resposta_11, resposta_12, resposta_13, resposta_14, resposta_15, resposta_16, resposta_17, resposta_18, resposta_19) VALUES ('$id','$nome','$materia','$cpf','$grupo','$resposta_1','$resposta_2','$resposta_3','$resposta_4','$resposta_5','$resposta_6','$resposta_7','$resposta_8','$resposta_9','$resposta_10','$resposta_11','$resposta_12','$resposta_13','$resposta_14','$resposta_15','$resposta_16','$resposta_17','$resposta_18','$resposta_19')";
	$resultado_usuario = mysqli_query($db, $result_usuario);	
	if(mysqli_affected_rows($db) != 0){
				header('location:sucesso.php');	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=prova.php'>
					<script type=\"text/javascript\">
						alert(\"A prova não foi finalizar.\");
					</script>
				";	
			}
		}
}



function registro(){
 	    global $db, $errors;
 	    $userid=$_SESSION['usuarioId'];
       	$nome     =  addslashes(htmlspecialchars($_POST['nome']));
		$usuario  =  addslashes(htmlspecialchars($_POST['usuario']));
		$email    =  addslashes(htmlspecialchars($_POST['email']));
		$cpf      =  addslashes(htmlspecialchars($_POST['cpf']));
		$serie    =  addslashes(htmlspecialchars($_POST['serie']));
		$senha_1  =  addslashes(htmlspecialchars($_POST['senha_1']));
		$senha_2  =  addslashes(htmlspecialchars($_POST['senha_2']));
		// form validation: ensure that the form is correctly filled
		
		
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);	
	$erro = false;	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "<p class='text-danger alert'>Necessário preencher todos os campos</p>";
	}elseif((strlen($dados['senha_1'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "<p class='text-danger alert'>A senha deve ter no minímo 6 caracteres</p>";
	}elseif(stristr($dados['senha_1'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "<p class='text-danger alert'>Caracter ( ' ) utilizado na senha é inválido</p>";
	}else{
		$result_usuario = "SELECT id FROM usuario WHERE usuario='". $dados['usuario'] ."'";
		$resultado_usuario = mysqli_query($db, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "<p class='text-danger alert'>Este usuario já está sendo utilizado</p>";
		}
		
		$result_usuario = "SELECT id FROM usuario WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($db, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "<p class='text-danger alert'>Este e-mail já está cadastrado</p>";
		}
		
		
	}
	
	
	//var_dump($dados);
	if(!$erro){
		if (empty($nome)) { 
			array_push($errors, "<p class='text-danger alert'>Nome é obrigatório</p>"); 
		}
		if (empty($usuario)) { 
			array_push($errors, "<p class='text-danger alert'>Usuario é obrigatório</p>"); 
		}
		if (empty($serie)) { 
			array_push($errors, "<p class='text-danger alert'>serie é obrigatório</p>"); 
		}
		if (empty($email)) { 
			array_push($errors, "<p class='text-danger alert'>E-mail é obrigatório</p>"); 
		}
		if (empty($senha_1)) { 
			array_push($errors, "<p class='text-danger alert'>Senha É necessário</p>"); 
		}
		if ($senha_1 != $senha_2) {
			array_push($errors, "<p class='text-danger alert'>Uma das senhas não correspondem</p>");
		}
		if ($cpf != $cpf) {
			array_push($errors, "<p class='text-danger alert'>CPF é obrigatório/div>");
		}
		// register usuario if there are no errors in the form

		if (count($errors) == 0) {
			$senha = md5($senha_1);//encrypt the senha before saving in the database
 	 
$query = "INSERT INTO usuario (nome, serie, usuario, email, cpf, senha, situacoe_id, niveis_acesso_id)VALUES('$nome','$serie','$usuario','$email','$cpf','$senha','1','3')";
				mysqli_query($db, $query);
				// get id of the created usuario
				$logged_in_usuario_id = mysqli_insert_id($db);
				$_SESSION['usuario'] = getusuarioById($logged_in_usuario_id); // put logged in usuario in session
				$_SESSION['success']  = "<p class='text-success alert'>Agora você está logado</p>";
				header('location: registro.php');				
		}	

}

}


function nota(){ 
 

include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{

if(isset($_POST['erica_btn']))
  {
$userid=$_SESSION['usuarioId'];
$nome=addslashes(htmlspecialchars($_POST['nome']));
$materia=addslashes(htmlspecialchars($_POST['materia']));
$grupo=addslashes(htmlspecialchars($_POST['grupo']));
$imagem1=addslashes(htmlspecialchars($_POST['imagem1']));
$imagem2=addslashes(htmlspecialchars($_POST['imagem2']));
$imagem3=addslashes(htmlspecialchars($_POST['imagem3']));
$imagem4=addslashes(htmlspecialchars($_POST['imagem4']));

$query=mysqli_query($con, "insert into primeiroportugues(id,UserId,nome,n1,n2,n3,n4) value('$nome','n1','n2','$n3','$n4')");
if($query){
echo "<script>alert('Nota  foi adicionada com sucesso');</script>";
echo "<script>window.location.href='notass.php'</script>";
} else {
echo "<script>alert('Algo de errado aconteceu. Por favor, tente novamente');</script>";

}
  

}

}

}
	 
	// LOGIN usuario

function login(){
	global $db, $usuario, $errors;
   

		// grap form values
		$usuario = e($_POST['usuario']);
		$senha = e($_POST['senha']);

		// make sure form is filled properly
		if (empty($usuario)) {
			array_push($errors, "<p class='text-danger alert'>Nome de usuário é obrigatório</p>");
		}
		if (empty($senha)) {
			array_push($errors, "<p class='text-danger alert'>Senha e obrigatório</p>");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$senha = md5($senha);

	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($db, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($db, $_POST['senha']);
		$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM usuario WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($db, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioSerie'] = $resultado['serie'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['usuarioProfissao'] = $resultado['profissao'];
		   $_SESSION['usuarioMateria'] = $resultado['materia'];
			$_SESSION['usuarioCpf'] = $resultado['cpf'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: administrativo.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: app.php");
			}else{
				header("Location: prova.php");
			}
               }else {
				array_push($errors, "<p class='text-danger'>Usuário ou senha inserida está incorreta. <a href='mudar-senha.php'>Esqueceu a senha?</a></p>");
			}
		}		
	}

}

	function getusuarioById($id){

		global $db;

		$query = "SELECT * FROM usuario WHERE id=" . $id;

		$result = mysqli_query($db, $query);

		$usuario = mysqli_fetch_assoc($result);

		return $usuario;

	}
 

 

 
 	function e($val){

		global $db;

		return mysqli_real_escape_string($db, trim($val));

	}


  

	function isLoggedIn()
	

	{

		if (isset($_SESSION['usuario'])) {

			return true;

		}else{

			return false;

		}

	}
 
 function isAdmin()

	{

		if (isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo_usuario'] == 'admin' ) {

			return true;

		}else{

			return false;

		}

	}
	function display_error() {
		global $errors;
		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
?>