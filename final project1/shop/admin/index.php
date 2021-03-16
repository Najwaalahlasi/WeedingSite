<?php
include('header.php');
require ('dbconnect.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><i class="fa fa-dashboard "></i> Dashboard</h2>   
                       
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                    <?php
					 $sql="select * from users";
					 $stm=$con->prepare("select * from users");
					$stm->execute();
					echo $stm->rowCount();
					 ?>

					users</p>
                    <br>
                    <br>
                </div>
                <a href="users.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-tasks"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">

  <?php
					 $sql="select * from weeding_halls";
					 $stm=$con->prepare("select * from weeding_halls");
					 $stm->execute();
					 echo $stm->rowCount();
					 ?>

					halls</p>
                    <br>
                    <br>
                   
                </div>
                <a href="hall.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
             </div>
		     </div>
			  <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-tasks"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">

  <?php
					 $sql="select * from product";
					 $stm=$con->prepare("select * from product");
					 $stm->execute();
					 echo $stm->rowCount();
					 ?>

					product</p>
                    <br>
                    <br>
                   
                </div>
                <a href="product.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
             </div>
		     </div>
             </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <?php
        include('footer.php');
        ?>