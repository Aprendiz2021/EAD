<?php
session_start();
include_once("conexaos.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuario WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>usuario: </label>
			<input type="text" name="usuario" placeholder="Digite o usuario completo" value="<?php echo $row_usuario['usuario']; ?>"><br><br>
			
			<label>CPF </label>
			<input type="text" name="cpf" placeholder="Digite o seu melhor cpf" value="<?php echo $row_usuario['cpf']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>
	</body>
</html>