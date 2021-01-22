<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Painel de controle</a></li>
            
            
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>Português <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="provaerika.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ERIKA - 1
                    </a></li>


                    <li><a class="" href="provaandressa.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ANDRESSA - 2
                    </a></li>


                    <li><a class="" href="provamalena.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> MALENA - 3
                    </a></li>
                    
                    


                    <li><a class="" href="provadaiane.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 4
                    </a></li>


                    <li><a class="" href="provadaiane5.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 5 
                    </a></li>
                    
                    
                </ul>

            </li>
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em>Ciências <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ERIKA - 1
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ANDRESSA - 2
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> MALENA - 3
                    </a></li>
                    
                    


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 4
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 5 
                    </a></li>
                    
                    
                </ul>

            </li>


 <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
                <em class="fa fa-navicon">&nbsp;</em>Matemática <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-3">
                    <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ERIKA - 1
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ANDRESSA - 2
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> MALENA - 3
                    </a></li>
                    
                    


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 4
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 5 
                    </a></li>
                    
                    
                </ul>

            </li>

             <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
                <em class="fa fa-navicon">&nbsp;</em>História <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ERIKA - 1
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ANDRESSA - 2
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> MALENA - 3
                    </a></li>
                    
                    


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 4
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 5 
                    </a></li>
                    
                    
                </ul>

            </li>



             <li class="parent "><a data-toggle="collapse" href="#sub-item-5">
                <em class="fa fa-navicon">&nbsp;</em>Geografia <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-5">
                    <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ERIKA - 1
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ANDRESSA - 2
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> MALENA - 3
                    </a></li>
                    
                    


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 4
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 5 
                    </a></li>
                    
                    
                </ul>

            </li>
            



             <li class="parent "><a data-toggle="collapse" href="#sub-item-6">
                <em class="fa fa-navicon">&nbsp;</em>Inglês <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-6">
                    <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ERIKA - 1
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ANDRESSA - 2
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> MALENA - 3
                    </a></li>
                    
                    


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 4
                    </a></li>


                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> DAIANE - 5 
                    </a></li>
                    
                    
                </ul>

            </li>
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em> Perfil</a></li>
             <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Mudar senha</a></li>
<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Sair</a></li>

        </ul>
		
    </div>