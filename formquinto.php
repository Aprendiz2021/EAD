 
<?php
ini_set('display_errors', 0 );
error_reporting(0);
require('includes/dbconnection.php');
$id = 5;
$ret=mysqli_query($con,"select * from quintoportugues where id='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 
<!--
1-Portugues
2-Ciencias
3-Historia
4-Geografia
5-Inlges
6-Matematica
-->
<script language="JavaScript">
function is_cpf1 (c) {

  if((c = c.replace(/[^\d]/g,"")).length != 11)
    return false

  if (c == "00000000000")
    return false;

  var r;
  var s = 0;

  for (i=1; i<=9; i++)
    s = s + parseInt(c[i-1]) * (11 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[9]))
    return false;

  s = 0;

  for (i = 1; i <= 10; i++)
    s = s + parseInt(c[i-1]) * (12 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[10]))
    return false;

  return true;
}


function fMasc5(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascEx()",1)
}

  function fMascEx() {
obj.value=masc(obj.value)
}

function mCPF5(cpf){
cpf=cpf.replace(/\D/g,"")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return cpf
}

cpfCheck5 = function (el) {
    document.getElementById('cpfResponse5').innerHTML = is_cpf1(el.value)? '<span style="color:green">CPF válido</span>' : '<span style="color:red">CPF inválido</span>';
    if(el.value=='') document.getElementById('cpfResponse5').innerHTML = '';
}
</script>

<div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label  style="color:#FBF7F7;">Nome</label>
                        <input type="text" name="nome" class="form-control" required placeholder="Digite seu nome">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label  style="color:#FBF7F7;">CPF</label>
                      <p><input id="cpf" type="text" name="cpf" onkeyup="cpfCheck5(this)"  required class="form-control" maxlength="14" onkeydown="javascript: fMasc5( this, mCPF5 );"> <span id="cpfResponse5"></span></p>
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1"  style="color:#FBF7F7;">Materia</label>
                        <input type="text" name="materia"class="form-control" disabled="" style="font-size:12px; color:red"  value="<?php  echo $row['materia'];?>">
                      </div>
                    </div>
                  </div>
 
 

<input type="hidden" name="grupo"class="form-control" style="font-size:12px; color:red" value="<?php  echo $row['grupo'];?>" />
 <input type="hidden" name="materia"class="form-control" style="font-size:12px; color:red" value="<?php  echo $row['materia'];?>" />

<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_1'];?></p></h5>  </label><br>
<textarea name="resposta_1" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

</div>
</div>





<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_2'];?></p></h5> 
<?php if(!empty($row['imagem1'])): ?><img src="<?=$row['imagem1'];?>" width="359" height="179" /><?php endif;?>
</label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_2" value="<?php  echo $row['pergunta_3'];?>"/>&nbsp;<?php  echo $row['pergunta_3'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_2" value="<?php  echo $row['pergunta_4'];?>" />&nbsp;<?php  echo $row['pergunta_4'];?> </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_2" value="<?php  echo $row['pergunta_5'];?>" />&nbsp;<?php  echo $row['pergunta_5'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_2" value="<?php  echo $row['pergunta_6'];?>" />&nbsp;<?php  echo $row['pergunta_6'];?> </label><br>

<hr/>

</div>

</div>






<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_7'];?></p></h5></label><br>
<textarea name="resposta_3" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

</div>
</div>



<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_8'];?></p></h5> 
<?php if(!empty($row['imagem2'])): ?><img src="<?=$row['imagem2'];?>" width="359" height="179" /><?php endif;?>
</label><br>
 <p>
  <p> <?php  echo $row['pergunta_9'];?>
</p>
  <input type="radio" name="resposta_4"  required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
  <input type="radio" name="resposta_4" required value="Falso" /> &nbsp;<label>Falso</label>
</p>
<p>
 <p> <?php  echo $row['pergunta_10'];?>
</p>
 <input type="radio" name="resposta_5" required value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_5"  required value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
  <p> <?php  echo $row['pergunta_11'];?>
</p>
 <input type="radio" name="resposta_6" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_6"  required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
<p> <?php  echo $row['pergunta_12'];?>
</p>
<input type="radio" name="resposta_7" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_7" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

</div>
</div>
 

 

<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"> <?php  echo $row['pergunta_13'];?></p></h5> <br>  </label><br>
<textarea name="resposta_8" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_14'];?></p></h5>  <br> </label><br>
<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_9" value="<?php  echo $row['pergunta_15'];?>"/>&nbsp;<?php  echo $row['pergunta_15'];?> </label> <BR />
<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_9" value="<?php  echo $row['pergunta_16'];?>" />&nbsp;<?php  echo $row['pergunta_16'];?> </label><BR />
<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_9" value="<?php  echo $row['pergunta_17'];?>" />&nbsp;<?php  echo $row['pergunta_17'];?> </label> <BR />
<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_9" value="<?php  echo $row['pergunta_18'];?>" />&nbsp;<?php  echo $row['pergunta_18'];?> </label><br>

</div>
</div>






<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"> <?php  echo $row['pergunta_19'];?></p></h5> <?php if(!empty($row['imagem3'])): ?><img src="<?=$row['imagem3'];?>" width="359" height="179" /><?php endif;?>
</label><br>
<textarea name="resposta_10" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

</div>
</div>





<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_20'];?></p></h5> </label><br>
 <p>
  <p> <?php  echo $row['pergunta_21'];?>
</p>
  <input type="radio" name="resposta_11"  required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
  <input type="radio" name="resposta_11" required value="Falso" /> &nbsp;<label>Falso</label>
</p>
<p>
 <p> <?php  echo $row['pergunta_22'];?>
</p>
 <input type="radio" name="resposta_12" required value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_12"  required value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
  <p> <?php  echo $row['pergunta_23'];?>
</p>
 <input type="radio" name="resposta_13" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_13"  required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
<p> <?php  echo $row['pergunta_24'];?>
</p>
<input type="radio" name="resposta_14" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_14" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

</div>
</div>
 


<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_25'];?></p></h5>  </label><br>
<textarea name="resposta_15" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

</div>
</div>













<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_26'];?></p></h5><?php if(!empty($row['imagem4'])): ?><img src="<?=$row['imagem4'];?>" width="359" height="179" /><?php endif;?> 
</label><br>
 <p>
  <p> <?php  echo $row['pergunta_27'];?>
</p>
  <input type="radio" name="resposta_16"  required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
  <input type="radio" name="resposta_16" required value="Falso" /> &nbsp;<label>Falso</label>
</p>
<p>
 <p> <?php  echo $row['pergunta_28'];?>
</p>
 <input type="radio" name="resposta_17" required value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_17"  required value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
  <p> <?php  echo $row['pergunta_29'];?>
</p>
 <input type="radio" name="resposta_18" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_18"  required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
<p> <?php  echo $row['pergunta_30'];?>
</p>
<input type="radio" name="resposta_19" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_19" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

</div>
</div>


 <div class='col-md-12'>
<div class="card-footer">
<button type="submit"  name="provas5_btn" class="btn btn-primary pull-right">Finalizar</button>
</div>
</div> 
<br>
 <?php } ?>
 
