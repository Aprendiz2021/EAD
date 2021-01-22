<!--<?php 
error_reporting(0);
ini_set("display_errors", 0 );
$nome= $_POST["nome"];
$nota1= $_POST["n1"];
$nota2= $_POST["n2"];
$nota3= $_POST["n3"];
$nota4= $_POST["n4"];
$media= ($nota1+$nota2+$nota3+$nota4)/4;
$re=(7-$media);
echo" A MEDIA ENTRE A $nota1 + $nota2 + $nota3 + $nota4<br>";
$situacao = ($media<7)? "<h3>REPROVADO</h3><br>para ser aprovado voce precisa de $re":"<h3>APROVADO</h3>";
echo "$nome $situacao";
?>-->


 <?php 

include('includes/dados.php');
if (!isset($_SESSION['usuarioId'])){
header ("Location:index.php");
exit();

}



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notas_Aluno</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    </head>
    <body >
        <font face="Times New Roman">
  <center>
       
      
      <form name="formu" method="POST" >
      
      
            
            <table border=1 >
        
      
       
         
        <tr>
    <td colspan=2 bgcolor='PaleGreen'> <center><h3><pre><img align="left" width="50" height="50" src="IFTO.jpg"></pre><h1>Notas do Aluno</h1>   </h3></center></td>
    </tr>
         <p><tr><td><pre>  <font size="5px"color="#0B610B">Nome Do Aluno: </font><td><input type="text" name="nome" size="30" ></td></pre></td></tr><p>  
          <p><tr><td><pre><center><font size="5px"color="#0B610B">1° Nota : </font></center><td><input type="text" name="n1" size="10"></td></pre></td></tr><p>
          <p><tr><td><pre><center><font size="5px"color="#0B610B">2° Nota : </font></center><td><input type="text" name="n2" size="10"></td></pre></td></tr><p>
          <p><tr><td> <pre><center><font size="5px"color="#0B610B">3° Nota : </font></center><td><input type="text" name="n3" size="10"></td></pre> </td></tr><p> 
         <p><tr><td> <pre><center><font size="5px"color="#0B610B">4° Nota : </font></center><td><input type="text" name="n4" size="10"></td></pre> </td></tr><p> 
		 
 
     
            <tr><td>  <p> <td><input type="submit" value="Enviar" name="enviar"></td></td></tr></p>
             
    
               </table> 
            </form>
         
         </center>
        </font>
                  
                 
                           
    </body>
</html>
