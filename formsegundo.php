<?php
require('includes/dbconnection.php');
$id=2;
$ret=mysqli_query($con,"select * from segundoingles where ID='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?> 

<!--
1-Portugues
2-Ciencias
3-Hostoria
4-Geografia
5-Inlges
6-Matematica
-->
<script language="JavaScript">
function is_cpf2 (c) {

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


function fMasc2(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascEx()",1)
}

  function fMascEx() {
obj.value=masc(obj.value)
}

function mCPF2(cpf){
cpf=cpf.replace(/\D/g,"")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return cpf
}

cpfCheckee = function (el) {
    document.getElementById('cpfResponse2').innerHTML = is_cpf2(el.value)? '<span style="color:green">CPF válido</span>' : '<span style="color:red">CPF inválido</span>';
    if(el.value=='') document.getElementById('cpfResponse2').innerHTML = '';
}
</script><div class="row">
<div class="col-md-5 pr-md-1">
<div class="form-group">
<label style="color:#FBF7F7;">Nome</label>
<input type="text" name="nome" class="form-control" required placeholder="Digite seu nome">
</div>
</div>
<div class="col-md-3 px-md-1">
<div class="form-group">
<label style="color:#FBF7F7;">cpf</label>
<p><input id="cpf" type="text" name="cpf" onkeyup="cpfCheckee(this)"  required class="form-control" maxlength="14" onkeydown="javascript: fMasc2( this, mCPF2 );"> <span id="cpfResponse2"></span></p>
</div>
</div>

<div class="col-md-3 px-md-1">
<div class="form-group">
<label style="color:#FBF7F7;">Materia</label>
<input type="text" name="materia"class="form-control" disabled="" style="font-size:12px; color:red" value="<?php  echo $row['materia'];?>" />
</div>
</div></div>

<input type="hidden" name="grupo"class="form-control" style="font-size:12px; color:red" value="<?php  echo $row['grupo'];?>" />
 <input type="hidden" name="materia"class="form-control" style="font-size:12px; color:red" value="<?php  echo $row['materia'];?>" />

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_1'];?></p></h5> 
<?php if(!empty($row['imagem1'])): ?><img src="<?=$row['imagem1'];?>" width="359" height="179" /><?php endif;?>
</label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="<?php  echo $row['pergunta_2'];?>"/>&nbsp;<?php  echo $row['pergunta_2'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="<?php  echo $row['pergunta_3'];?>" />&nbsp;<?php  echo $row['pergunta_3'];?> </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="<?php  echo $row['pergunta_4'];?>" />&nbsp;<?php  echo $row['pergunta_4'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="<?php  echo $row['pergunta_5'];?>" />&nbsp;<?php  echo $row['pergunta_5'];?> </label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_6'];?> </p></h5>  </label><br>

<textarea name="resposta_2" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_7'];?></p></h5>  </label><br>


 <p>

  <p><?php  echo $row['pergunta_8'];?>

</p>

  <input type="radio" name="resposta_3"  required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_3" required value="Falso" /> &nbsp;<label>Falso</label>

</p>

<p>

 <p><?php  echo $row['pergunta_9'];?>

</p>

 <input type="radio" name="resposta_4" required value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_4" required value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p><?php  echo $row['pergunta_10'];?>

</p>

 <input type="radio" name="resposta_5" required  value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_5" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p><?php  echo $row['pergunta_11'];?>

</p>

<input type="radio" name="resposta_6" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_6" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>



</div>

</div>

 





<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_12'];?></p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_7" value="<?php  echo $row['pergunta_13'];?>" />&nbsp;<?php  echo $row['pergunta_13'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_7" value="<?php  echo $row['pergunta_14'];?>" />&nbsp;<?php  echo $row['pergunta_14'];?></label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_7" value="<?php  echo $row['pergunta_15'];?>" />&nbsp;<?php  echo $row['pergunta_15'];?></label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_7" value="<?php  echo $row['pergunta_16'];?>" />&nbsp;<?php  echo $row['pergunta_16'];?></label><br>

<hr/>

</div>

</div>



 

 





 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_17'];?> </p></h5>  
 
<?php if(!empty($row['imagem2'])): ?><img src="<?=$row['imagem2'];?>" width="359" height="179" /><?php endif;?>

</label><br>

<textarea name="resposta_8" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

<hr/>

</div>

</div>



 



 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_18'];?></p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required="" name="resposta_9" value="<?php  echo $row['pergunta_19'];?>" />&nbsp;<?php  echo $row['pergunta_19'];?></label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required="" name="resposta_9" value="<?php  echo $row['pergunta_20'];?>" />&nbsp;<?php  echo $row['pergunta_20'];?></label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required="" name="resposta_9" value="<?php  echo $row['pergunta_21'];?>" />&nbsp;<?php  echo $row['pergunta_21'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required="" name="resposta_9" value="<?php  echo $row['pergunta_22'];?>" />&nbsp;<?php  echo $row['pergunta_22'];?> </label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_23'];?></p></h5>  </label><br>

 <p>

  <p> <?php  echo $row['pergunta_24'];?>

</p>

  <input type="radio" name="resposta_10"  required="" value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_10" required="" value="Falso" /> &nbsp;<label>Falso</label>

</p>

<p>

 <p> <?php  echo $row['pergunta_25'];?>

</p>

 <input type="radio" name="resposta_11" required="" value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_11"  required="" value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p> <?php  echo $row['pergunta_26'];?>

</p>

 <input type="radio" name="resposta_12" required="" value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_12"  required="" value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p> <?php  echo $row['pergunta_27'];?>

</p>

<input type="radio" name="resposta_13" required="" value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_13" required="" value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>

</div>

</div>

 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_28'];?>

</p></h5> 
<?php if(!empty($row['imagem3'])): ?><img src="<?=$row['imagem3'];?>" width="359" height="179" /><?php endif;?>
</label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_14" value="<?php  echo $row['pergunta_29'];?>" required=""/>&nbsp;<?php  echo $row['pergunta_29'];?></label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_14" value="<?php  echo $row['pergunta_30'];?>" required=""/>&nbsp;<?php  echo $row['pergunta_30'];?></label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_14" value="<?php  echo $row['pergunta_31'];?>" required=""/>&nbsp;<?php  echo $row['pergunta_31'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_14" value="<?php  echo $row['pergunta_32'];?>" required=""/>&nbsp;<?php  echo $row['pergunta_32'];?></label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_33'];?></p></h5> 
<?php if(!empty($row['imagem4'])): ?><img src="<?=$row['imagem4'];?>" width="359" height="179" /><?php endif;?>
</label><br>

 <p>

  <p><?php  echo $row['pergunta_34'];?>

</p>

  <input type="radio" name="resposta_15"  value="Verdadeiro" required=""/>&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_15" value="Falso" required=""/> &nbsp;<label>Falso</label>

</p>

<p>

 <p><?php  echo $row['pergunta_35'];?>

</p>

 <input type="radio" name="resposta_16" value="Verdadeiro" required=""/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_16" value="Falso" required=""/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p><?php  echo $row['pergunta_36'];?>

</p>

 <input type="radio" name="resposta_17" value="Verdadeiro" required="" />&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_17" value="Falso" required=""/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p><?php  echo $row['pergunta_37'];?>

</p>

<input type="radio" name="resposta_18" value="Verdadeiro" required=""/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_18" value="Falso" required=""/> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_38'];?></p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="<?php  echo $row['pergunta_39'];?>" required="" />&nbsp;<?php  echo $row['pergunta_39'];?></label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="<?php  echo $row['pergunta_40'];?>" required="" />&nbsp;<?php  echo $row['pergunta_40'];?></label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="<?php  echo $row['pergunta_41'];?>" required="" />&nbsp;<?php  echo $row['pergunta_41'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="<?php  echo $row['pergunta_42'];?>" required="" />&nbsp;<?php  echo $row['pergunta_42'];?></label><br>

<hr/>

</div>

</div>

 <div class="col-md-12">
<div class="card-footer">
<button type="submit"  name="provas2_btn" class="btn btn-primary pull-right">Finalizar</button>
</div>
</div>
 

 
    <?php } ?>