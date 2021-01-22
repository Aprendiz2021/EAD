<?php
//Incluir a conexão com banco de dados
include_once 'conexaos.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM usuario WHERE nome LIKE '%$usuarios%' LIMIT 20";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		echo "<li><a style='color: #FF69B4;'>Nome</a> : <a style='color: #DAA520;'> ".$row_user['nome']." </a> Usúario : <a style='color: #836FFF;'> ".$row_user['usuario']." </a><a style='color: green;'>CPF</a> : <a style='color: red;'> ".$row_user['cpf']."</a></li>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}