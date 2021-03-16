<?php

include('header.php');
require ('dbconnect.php');
include ('admin/login.php');

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><i class="fa fa-tasks"></i> users </h2>

                        
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-8">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> Add New users
								
                            </div>
							
                            <div class="panel-body">
                                <div class="row">
								   <?php
								   
								  session_start();
								     if(isset($_POST['submit'])){
									   $username =trim($_POST['username']);
									   $password=trim($_POST['password']);
									   $first_name=trim($_POST['first_name']);
									   $last_name=trim($_POST['last_name']);
									  
									   $errors=array();
									   if(empty($first_name))
									   {
										   $errors['fname']="<div style='color:red'>Enter  first name</div>";
									   }
									   elseif(is_numeric($first_name)){
										   $errors['fnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   else{
										  
										  $sql="insert into users(username,password ,first_name,last_name) values 
										  ('$username','$password','$first_name','$last_name')";
					                       $stm=$con->prepare($sql);
					                        $stm->execute();
										 
					                    if( $stm->rowCount()){
											echo "<div class='alert alert-success'>one row inserted</div>";
										}else{
											echo "<div class='alert alert-danger'>one row not inserted</div>";
										}
									   }
								   }
								   
								      ?>
                                    <div class="col-md-12">
									
                                        <form role="form" method="post">
                                            <div class="form-group">
                                                <label> username</label>
                                                <input type="text" name="username" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['cname']))
													echo $errors['cname'];?>
													<?php
													if(isset($errors['cnameNumber']))echo $errors['cnameNumber'];?>
                                            </div>
											<div class="form-group">
                                                <label> password</label>
                                                <input type="text" name="password" placeholder="Please Enter day of booking  "
                                                    class="form-control" />
													
                                            </div>
											<div class="form-group">
                                                <label> first_name</label>
                                                <input type="text" name="first_name" placeholder="Please Enter your Name "
                                                    class="form-control" />
													
                                            </div>
											<div class="form-group">
                                                <label> last_name</label>
                                                <input type="text" name="last_name" placeholder="Please Enter your Name "
                                                    class="form-control" />
													
                                            </div>
											
                                            <div style="float:right;">
                                                <button type="submit"  name ="submit" class="btn btn-primary">Add users</button>
                                                <button type="reset" class="btn btn-danger">Cancel</button>
                                            </div>

                                    </div>
                                    </form>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                </div>                    <hr />
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-tasks"></i> users 
                                </div>
								<?php
                                 if(isset($_GET['action'],$_GET['id'])){
									// echo $_GET['action'].'<br>' .$_GET['id'];
									$id=$_GET['id'];
									switch($_GET['action']){
										
										case "delete": echo "delete";
									
										$stm=$con->prepare("delete from users where id =:u_id");
					                     $stm->execute(array("u_id"=>$id));
					                      if($stm->rowCount()){
											  echo "<div class='alert alert-success'>one row deleted </div>";
										  }
										  	break;
										 case "active": 
										 $statues=0;
										 $qu="update users set staus='$statues' where id=:useid";
										 $stm=$con->prepare($qu);
										 $stm->execute(array('useid'=>$id));
										 if($stm->rowCount()==0)
										 echo "<div class='alert alert-success'>one row active </div>";
										 break;
										 
										 
										case "unactive":
										 $statues=1;
										 $qu="update users set staus='$statues' where id=:useid";
										 $stm=$con->prepare($qu);
										 $stm->execute(array('useid'=>$id));
										 if($stm->rowCount()==1)
										 echo "<div class='alert alert-danger'>one row unactive </div>";
										 break;
										 
										 
										default:
										echo "ERROR";
										break;
									}
								 }

								?>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover "
                                            id="dataTables-example">
                                            <thead>
                                                <tr>
												     <th>ID</th>
                                                    <th>username</th>
													 <th>password</th>
                                                    <th>first name</th>
													<th>last name</th>
													<th>action</th>
                                                    
                                                </tr>
                                            </thead>
											
                                            <tbody>
											<?php
											
											$sql="select * from users";
					                        $stm=$con->prepare("select * from users");
					                        $stm->execute();
					                       if($stm->rowCount()){
											  
											foreach($stm->fetchAll() as $row ){
													$id=$row['id'];
													$username=$row['username'];
													$password=$row['password'];
													$first_name=$row['first_name'];
													$last_name=$row['last_name'];
													
													
													
												
											
											?>
                                                <tr class="odd gradeX">
													
													
                                               <td><?php echo $id?></td>
                                                    <td><?php echo $username?></td>
													 <td><?php echo $password?></td>
                                                    <td><?php echo $first_name?></td>
													 <td><?php echo $last_name?></td>
													  
																						
											
													
													<td>
                                                    
                                                        <a href="edit_user.php?action=edit&id=<?php echo $id?>" class='btn btn-success'>Edit</a>
                                                        <a href="?action=delete&id=<?php echo $id?>"  class='btn btn-danger' id="delete">Delete</a>
														 <a href="?action=active&id=<?php echo $id?>" class='btn btn-success'>Active</a>
														 <a href="?action=disactivee&id=<?php echo $id?>"  class='btn btn-danger' id="delete">Didactive</a>
														
														 
                                                    </td>
													
                                                </tr>
										   <?php  }} ?>
                                            </tbody>
										
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        
                    </div>
                    <!-- /. ROW  -->
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
   </div>
   
   <?php
   include('footer.php');
   ?>
   <script>
   $('#delete').click(function(){
	   return confirm('Are you sure !!');
   })
   </script>