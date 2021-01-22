<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $userid=$_SESSION['detsuid'];
    $name=$_POST['name'];
$materia=$_POST['materia'];

$pergunta_1=$_POST['pergunta_1'];
$pergunta_2=$_POST['pergunta_2'];
$pergunta_3=$_POST['pergunta_3'];
$pergunta_4=$_POST['pergunta_4'];
$pergunta_5=$_POST['pergunta_5'];
$pergunta_6=$_POST['pergunta_6'];
$pergunta_7=$_POST['pergunta_7'];
$pergunta_8=$_POST['pergunta_8'];
$pergunta_9=$_POST['pergunta_9'];
$pergunta_10=$_POST['pergunta_10'];
$pergunta_11=$_POST['pergunta_11'];
$pergunta_12=$_POST['pergunta_12'];
$pergunta_13=$_POST['pergunta_13'];
$pergunta_14=$_POST['pergunta_14'];
$pergunta_15=$_POST['pergunta_15'];
$pergunta_16=$_POST['pergunta_16'];
$pergunta_17=$_POST['pergunta_17'];
$pergunta_18=$_POST['pergunta_18'];
$pergunta_19=$_POST['pergunta_19'];
$pergunta_20=$_POST['pergunta_20'];
$pergunta_21=$_POST['pergunta_21'];
$pergunta_22=$_POST['pergunta_22'];
$pergunta_23=$_POST['pergunta_23'];
$pergunta_24=$_POST['pergunta_24'];
$pergunta_25=$_POST['pergunta_25'];
$pergunta_26=$_POST['pergunta_26'];
$pergunta_27=$_POST['pergunta_27'];
$pergunta_28=$_POST['pergunta_28'];
$pergunta_29=$_POST['pergunta_29'];
$pergunta_30=$_POST['pergunta_30'];
$pergunta_31=$_POST['pergunta_31'];
$pergunta_32=$_POST['pergunta_32'];
$pergunta_33=$_POST['pergunta_33'];
$pergunta_34=$_POST['pergunta_34'];
$pergunta_35=$_POST['pergunta_35'];
$pergunta_36=$_POST['pergunta_36'];
$pergunta_37=$_POST['pergunta_37'];
$pergunta_38=$_POST['pergunta_38'];
$pergunta_39=$_POST['pergunta_39'];
$pergunta_40=$_POST['pergunta_40'];
$pergunta_41=$_POST['pergunta_41'];
$pergunta_42=$_POST['pergunta_42'];

     $query=mysqli_query($con, "update tblexpense set name='$name',materia='$materia',pergunta_1='$pergunta_1',pergunta_2='$pergunta_2',pergunta_3='$pergunta_3',pergunta_4='$pergunta_4',pergunta_5='$pergunta_5',pergunta_6='$pergunta_6',pergunta_7='$pergunta_7',pergunta_8='$pergunta_8',pergunta_9='$pergunta_9',pergunta_10='$pergunta_10',pergunta_11='$pergunta_11',pergunta_12='$pergunta_12',pergunta_13='$pergunta_13',pergunta_14='$pergunta_14',pergunta_15='$pergunta_15',pergunta_16='$pergunta_16',pergunta_17='$pergunta_17',pergunta_18='$pergunta_18',pergunta_19='$pergunta_19',pergunta_20='$pergunta_20',pergunta_21='$pergunta_21',pergunta_22='$pergunta_22',pergunta_23='$pergunta_23',pergunta_24='$pergunta_24',pergunta_25='$pergunta_25',pergunta_26='$pergunta_26',pergunta_27='$pergunta_27',pergunta_28='$pergunta_28',pergunta_29='$pergunta_29', pergunta_30='$pergunta_30',pergunta_31='$pergunta_31',pergunta_32='$pergunta_32',pergunta_33='$pergunta_33',pergunta_34='$pergunta_34',pergunta_35='$pergunta_35',pergunta_36='$pergunta_36',pergunta_37='$pergunta_37',pergunta_38='$pergunta_38', pergunta_39='$pergunta_39', pergunta_40='$pergunta_40',pergunta_41='$pergunta_41',pergunta_42='$pergunta_42' where ID='$userid'");
    if ($query) {
    $msg="O perfil do usuário foi atualizado.";
  }
  else
    {
      $msg="Algo deu errado. Por favor, tente novamente.";
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRSEBA | Perfil de usuário</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php include_once('includes/header.php');?>
  <?php include_once('includes/sidebar.php');?>
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Perfil</li>
      </ol>
    </div><!--/.row-->
    
    
        
    
    <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading">Perfil</div>
          <div class="panel-body">
            <p style="font-size:16px; color:red" align="center"> 


<?php if($msg){  echo $msg;  }  ?> </p>
            <div class="col-md-12">
<?php
$userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select * from tblexpense where ID='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <form role="form" method="post" action="">



           
<div class="col-md-12">
   <div class="col-md-5 pr-md-1">

                      <div class="form-group">

                        <label style="color:#000;">Professora</label>

                        <input type="text" name="name" class="form-control" value="<?php  echo $row['name'];?>" name="name" required="true">

                      </div>

              </div>

<!-- style="color:#FBF7F7;font-size:20px;font-family:calibri ;"  -->

 

              <div class="col-md-3 px-md-1">

                      <div class="form-group">

                        <label style="color:#000;">Material</label>

                 
                         <input class="form-control" type="text" value="<?php  echo $row['materia'];?>" name="materia" required="true">

                      </div>

               </div>
<div class="form-group">

 

<table width="665" border="0">
   <tr>
     <td width="29">1-</td>
     <td width="458"><input class="form-control" type="text" value="<?php  echo $row['pergunta_1'];?>" name="pergunta_1" required="true"><br></td>
   </tr>
   <tr>
     <td>A )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_2'];?>" name="pergunta_2" required="true"><br></td>
   </tr>
   <tr>
     <td>B )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_3'];?>" name="pergunta_3" required="true"><br></td>
   </tr>
   <tr>
     <td>D )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_4'];?>" name="pergunta_4" required="true"><br></td>
   </tr>
   <tr>
     <td>C )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_5'];?>" name="pergunta_5" required="true"></td>
   </tr>
</table>
<hr/> 
</div>
</div>



<div class="col-md-12">
<div class="form-group">
2.<input class="form-control" type="text" value="<?php  echo $row['pergunta_6'];?>" name="pergunta_6" required="true">
<hr/>
</div>
</div>



<div class="col-md-12">

<div class="form-group">

3.<input class="form-control" type="text" value="<?php  echo $row['pergunta_7'];?>" name="pergunta_7" required="true"><br>

 <p>

  <p><input class="form-control" type="text" value="<?php  echo $row['pergunta_8'];?>" name="pergunta_8" required="true">

</p>



</p>

<p>

 <p><input class="form-control" type="text" value="<?php  echo $row['pergunta_9'];?>" name="pergunta_9" required="true">

</p>


&nbsp;</p>

<p>

  <p><input class="form-control" type="text" value="<?php  echo $row['pergunta_10'];?>" name="pergunta_10" required="true">

</p>

</p>

<p>

<p><input class="form-control" type="text" value="<?php  echo $row['pergunta_11'];?>" name="pergunta_11" required="true">

</p>

</p>

<hr/>



</div>

</div>

 





<div class="col-md-12">

<div class="form-group">

<table width="665" border="0">
   <tr>
     <td width="29">1-</td>
     <td width="458"><input class="form-control" type="text" value="<?php  echo $row['pergunta_12'];?>" name="pergunta_12" required="true"><br></td>
   </tr>
   <tr>
     <td>A )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_13'];?>" name="pergunta_13" required="true"><br></td>
   </tr>
   <tr>
     <td>B )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_14'];?>" name="pergunta_14" required="true"><br></td>
   </tr>
   <tr>
     <td>D )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_15'];?>" name="pergunta_15" required="true"><br></td>
   </tr>
   <tr>
     <td>C )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_16'];?>" name="pergunta_16" required="true"></td>
   </tr>
</table>
<hr/>

</div>

</div>

<div class="col-md-12">
<div class="form-group">
5.<input class="form-control" type="text" value="<?php  echo $row['pergunta_17'];?>" name="pergunta_17" required="true"> </p></h5>   
 <hr/>
</div>
</div> 

<div class="col-md-12">

<div class="form-group">

<table width="665" border="0">
   <tr>
     <td width="29">1-</td>
     <td width="458"><input class="form-control" type="text" value="<?php  echo $row['pergunta_18'];?>" name="pergunta_18" required="true"><br></td>
   </tr>
   <tr>
     <td>A )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_19'];?>" name="pergunta_19" required="true"><br></td>
   </tr>
   <tr>
     <td>B )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_20'];?>" name="pergunta_20" required="true"><br></td>
   </tr>
   <tr>
     <td>D )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_21'];?>" name="pergunta_21" required="true"><br></td>
   </tr>
   <tr>
     <td>C )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_22'];?>" name="pergunta_22" required="true"></td>
   </tr>
</table>
<hr/>

</div>

</div>

<div class="col-md-12">
<div class="form-group">
7. <input class="form-control" type="text" value="<?php  echo $row['pergunta_23'];?>" name="pergunta_23" required="true"><br>

 <p>

  <p> <input class="form-control" type="text" value="<?php  echo $row['pergunta_24'];?>" name="pergunta_24" required="true">

</p>



</p>

<p>

 <p><input class="form-control" type="text" value="<?php  echo $row['pergunta_25'];?>" name="pergunta_25" required="true">

</p>

</p>

<p>

  <p> <input class="form-control" type="text" value="<?php  echo $row['pergunta_26'];?>" name="pergunta_26" required="true">

</p>

</p>

<p>

<p> <input class="form-control" type="text" value="<?php  echo $row['pergunta_27'];?>" name="pergunta_27" required="true">

</p>

</p>

<hr/>

</div>

</div>

 

<div class="col-md-12">

<div class="form-group">

<table width="665" border="0">
   <tr>
     <td width="29">1-</td>
     <td width="458"><input class="form-control" type="text" value="<?php  echo $row['pergunta_28'];?>" name="pergunta_28" required="true"><br></td>
   </tr>
   <tr>
     <td>A )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_29'];?>" name="pergunta_29" required="true"><br></td>
   </tr>
   <tr>
     <td>B )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_30'];?>" name="pergunta_30" required="true"><br></td>
   </tr>
   <tr>
     <td>D )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_31'];?>" name="pergunta_31" required="true"><br></td>
   </tr>
   <tr>
     <td>C )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_32'];?>" name="pergunta_32" required="true"><br></td>
   </tr>
</table>
<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

9.<input class="form-control" type="text" value="<?php  echo $row['pergunta_33'];?>" name="pergunta_33" required="true">

 <p>

  <p> <input class="form-control" type="text" value="<?php  echo $row['pergunta_34'];?>" name="pergunta_34" required="true">

</p>



</p>

<p>

 <p> <input class="form-control" type="text" value="<?php  echo $row['pergunta_35'];?>" name="pergunta_35" required="true">

</p>

</p>

<p>

  <p><input class="form-control" type="text" value="<?php  echo $row['pergunta_36'];?>" name="pergunta_36" required="true">

</p>

</p>

<p>

<p><input class="form-control" type="text" value="<?php  echo $row['pergunta_37'];?>" name="pergunta_37" required="true">

</p>

</p>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<table width="665" border="0">
   <tr>
     <td width="29">1-</td>
     <td width="458"><input class="form-control" type="text" value="<?php  echo $row['pergunta_38'];?>" name="pergunta_38" required="true"><br></td>
   </tr>
   <tr>
     <td>A )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_39'];?>" name="pergunta_39" required="true"><br></td>
   </tr>
   <tr>
     <td>B )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_40'];?>" name="pergunta_40" required="true"><br></td>
   </tr>
   <tr>
     <td>D )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_41'];?>" name="pergunta_41" required="true"><br></td>
   </tr>
   <tr>
     <td>C )</td>
     <td><input class="form-control" type="text" value="<?php  echo $row['pergunta_42'];?>" name="pergunta_42" required="true"><br></td>
   </tr>
</table>
<hr/>
 
</div>

</div>

 

 






                
                <div class="form-group has-success">
                  <button type="submit" class="btn btn-primary" name="submit">Atualizar</button>
                </div>
                
                
                </div>
                <?php } ?>
              </form>
            </div>
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
      <?php include_once('includes/footer.php');?>
    </div><!-- /.row -->
  </div><!--/.main-->
  
<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  
</body>
</html>
<?php }  ?>