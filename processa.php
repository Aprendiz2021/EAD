<?php
	include_once("janela/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nota1 = mysqli_real_escape_string($conn, $_POST['nota1']);
	$nota2 = mysqli_real_escape_string($conn, $_POST['nota2']);
	$nota3 = mysqli_real_escape_string($conn, $_POST['nota3']);
	$nota4 = mysqli_real_escape_string($conn, $_POST['nota4']);
	echo "$id - $nota1 - $nota2- $nota3 - $nota4";
	$result_cursos = "UPDATE usuario SET nota1='$nota1', nota2='$nota2',nota3='$nota3', nota4='$nota4' WHERE id = '$id'";
	
	$resultado_cursos = mysqli_query($conn, $result_cursos);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://127.0.0.1/escola/app.php'>
				<script type=\"text/javascript\">
					alert(\"Nota adicionada com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://127.0.0.1/escola/app.php'>
				<script type=\"text/javascript\">
					alert(\"Nota não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>