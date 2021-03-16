<?php
include('header.php');
require ('dbconnect.php');
include ('./login.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><i class="fa fa-tasks"></i> users</h2>

                        
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-8">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> edit users
								
                            </div>
							
                            <div class="panel-body">
                                <div class="row">
								   <?php
								   
								  
								    /* if(isset($_POST['submit'])){
									   $hall_name =trim($_POST['hall_name']);
									   $hall_country=trim($_POST['hall_country']);
									   $hall_city=trim($_POST['hall_city']);
									   $hall_street=trim($_POST['hall_street']);
									   //$managerid=trim($_POST['mid']);
									   //$managrid=$_SESSION['USER']['ssn'];
                                       $Details=trim($_POST['Details']);
									   
									   $errors=array();
									   if(empty($hall_name))
									   {
										   $errors['cname']="<div style='color:red'>Enter name of category</div>";
									   }
									   elseif(is_numeric($hall_name)){
										   $errors['cnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   else{
										  
										  $sql="insert into weeding_halls(hall_name,hall_country,hall_city,hall_street ,Details) values ('$hall_name','$hall_country','$hall_city','$hall_street','$Details')";
					                       $stm=$con->prepare($sql);
					                        $stm->execute();
										 
					                    if( $stm->rowCount()){
											echo "<div class='alert alert-success'>one row inserted</div>";
										}else{
											echo "<div class='alert alert-danger'>one row not inserted</div>";
										}
									   }
								   }*/
								   
								      ?>
									  <?php
									  
									  if(isset($_GET['action'],$_GET['id']) &&$_GET['action']=='edit' )
									  {
										  
									  }
									  $id=$_GET['id'];
									//  echo $id ;
											$sql="select * from users where id=:u_id";
					                        $stm=$con->prepare($sql);
					                        $stm->execute(array("u_id"=>$id));
					                       if($stm->rowCount()>0){
											  
											   //print_r($stm->fetchAll());
											  //  $i;
											foreach($stm->fetchAll() as $row ){
													$id=$row['id'];
													//echo "<td>$i</td>"
													$username=$row['username'];
													$password=$row['password'];
													$first_name=$row['first_name'];
													$last_name=$row['last_name'];
													// $year_booking=$row['year_booking'];
													
													//$userid=$_SESSION['user_id']['ssn'];
													// $month_booking=$row['month_booking'];
													// $day_booking=$row['day_booking'];
													// $price=$row['price'];
//$i++;
											
									  
										   if(isset($_POST['submit'])){
											   $iduser=$_POST['id'];
									               $user_name=trim ($_POST['username']);
												   $pasword=trim($_POST['password']);
													$firstname=trim($_POST['first_name']);
													$lastname=trim($_POST['last_name']);
													//$yearbooking=trim($_POST['year_booking']);
													
													//$userid=$row['user_id'];
													// $monthbooking=trim ($_POST['month_booking']);
													// $daybooking=trim ($_POST['day_booking']);
													// $Pric=trim ($_POST['price']);
									   //echo "$id <br> $hallname <br> $hallcountry <br> $hallcity <br> $hallstreet <br> $deetails <br> " ;
									   //$managerid=trim($_POST['mid']);
									  
                                      
									   
									   $errors=array();
									   if(empty($firstname))
									   {
										   $errors['fname']="<div style='color:red'>Enter first name</div>";
									   }
									   elseif(is_numeric($firstname)){
										   $errors['fnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($errors)){
										 $sql="update users set username='$user_name' ,password='$pasword',
										   first_name='$firstname' , last_name='$lastname' 
										    where  id=$iduser";
										  
										  // $sql="update weeding_halls set hall_name=? , hall_country=? , hall_city=? , hall_street=? , Details=? where  id=?)";
					                       $stm=$con->prepare($sql);
					                        $stm->execute();
										 
					                    if( $stm->rowCount()){
											echo "<div class='alert alert-success'>one row updated</div>";
										}else{
											echo "<div class='alert alert-danger'>one row not updated</div>";
										}
									   }
									   else {
										   echo "jjjjjjjj";
									   }
								   }
								   
									  ?>
									  
                                    <div class="col-md-12">
									
                                        <form role="form" method="post">
										<input type="hidden" name="id" value="<?php echo $id ?>">
                                            <div class="form-group">
                                                <label> username</label>
                                                <input type="text" name="username" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $username?>"/>
													
                                            </div>
											<div class="form-group">
                                                <label> password</label>
                                                <input type="text" name="password" placeholder="Please Enter hall country "
                                                    class="form-control" value="<?php echo $password?>" />
													
                                            </div>
											<div class="form-group">
                                                <label> first name</label>
                                                <input type="text" name="first_name" placeholder="Please Enter hall country "
                                                    class="form-control" value="<?php echo $first_name?>" />
													
                                            </div>
											<div class="form-group">
                                                <label> last name</label>
                                                <input type="text" name="last_name" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $last_name?>"/>
													
                                            </div>
											
											
                                           
                                            <div style="float:right;">
                                                <button type="submit"  name ="submit" class="btn btn-primary">edit users</button>
                                                <button type="reset" class="btn btn-danger">Cancel</button>
                                            </div>

                                    </div>
                                    </form>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                </div>                    <hr />
                    <?php }
										   } ?>
                  
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
   </div>
   
   <?php
   include('footer.php');
   ?>
  