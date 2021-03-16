<?php

include('header.php');
require ('dbconnect.php');
include ('../login.php');

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><i class="fa fa-tasks"></i> halls</h2>

                        
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-8">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> Add New halls
								
                            </div>
							
                            <div class="panel-body">
                                <div class="row">
								   <?php
								   
								  session_start();
								     if(isset($_POST['submit'])){
									   $hall_name =trim($_POST['hall_name']);
									   $hall_country=trim($_POST['hall_country']);
									   $hall_city=trim($_POST['hall_city']);
									   $hall_street=trim($_POST['hall_street']);
									   //$managerid=trim($_POST['mid']);
									   //$managrid=$_SESSION['id'];
									  
                                       $Details=trim($_POST['Details']);
									   
									   
									   $errors=array();
									   if(empty($hall_name))
									   {
										   $errors['nname']="<div style='color:red'>Enter name of halls</div>";
									   }
									   elseif(is_numeric($hall_name)){
										   $errors['nnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($hall_country))
									   {
										   $errors['cname']="<div style='color:red'>Enter name of hall country</div>";
									   }
									   elseif(is_numeric($hall_country)){
										   $errors['cnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($hall_city))
									   {
										   $errors['hname']="<div style='color:red'>Enter name of hall city</div>";
									   }
									   elseif(is_numeric($hall_city)){
										   $errors['hnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($hall_street))
									   {
										   $errors['sname']="<div style='color:red'>Enter name of hall street</div>";
									   }
									   elseif(is_numeric($hall_street)){
										   $errors['snameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($images))
									   {
										   $errors['iname']="<div style='color:red'>choose images</div>";
									   }
									   elseif(is_numeric($images)){
										   $errors['inameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(isset($_FILES["image"])){
										   	 $images=$_FILES['image']['name'];
												$size=$_FILES["image"]["size"];
												 $mytypes=array("png","jpg","jpeg","gif");
												 $ext=explode(".","$images");//عملها تحويل السلسلة النصية إلى مصفوفة
												 $ext=strtolower(end($ext));
										  if(in_array($ext,$mytypes)){
											  if($size<=2000000){
										  if(move_uploaded_file($_FILES['image']['tmp_name'],"../../images/$images")){
										  $sql="insert into weeding_halls(hall_name,hall_country,hall_city,hall_street, ManagerID,image,Details) values 
										  ('$hall_name','$hall_country','$hall_city','$hall_street',11,' $images','$Details')";
					                       $stm=$con->prepare($sql);
					                        $stm->execute();
										 
					                    if( $stm->rowCount())
											echo "<div class='alert alert-success'>one row inserted</div>";
										else
											echo "<div class='alert alert-danger'>one row not inserted</div>";
										
									   }
								   }
								   else
													{
														$errors["size"]="<span style='color:red'> <b>Maximum 2M</b></span>";
													}
									 }
									 else
												{
													$errors["type"]="<span style='color:red'> <b>Invalid Type</b></span>";										 
												}
									 }
									 else
										{
										 $errors["image"]="<span style='color:red'> <b>choose image</b></span>";
										}
									 }
									 else{
										 
									 }
								      ?>
									  <?php
									  
									  
									  
									  
									  
									  
									  ?>
                                    <div class="col-md-12">
									
                                        <form role="form" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label> Hall Name</label>
                                                <input type="text" name="hall_name" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['nname']))
													echo $errors['nname'];?>
													<?php
													if(isset($errors['nnameNumber']))echo $errors['cnameNumber'];?>
                                            </div>
											<div class="form-group">
                                                <label> Hall country</label>
                                                <input type="text" name="hall_country" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['cname']))
													echo $errors['cname'];?>
													<?php
													if(isset($errors['cnameNumber']))echo $errors['cnameNumber'];?>
													
                                            </div>
											<div class="form-group">
                                                <label> Hall city</label>
                                                <input type="text" name="hall_city" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['hname']))
													echo $errors['hname'];?>
													<?php
													if(isset($errors['hnameNumber']))echo $errors['cnameNumber'];?>
													
                                            </div>
											<div class="form-group">
                                                <label> Hall street</label>
                                                <input type="text" name="hall_street" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['sname']))
													echo $errors['sname'];?>
													<?php
													if(isset($errors['snameNumber']))echo $errors['cnameNumber'];?>
													
                                            </div>
											<div class="form-group">
                                                <label>images </label>
                                                <input type="file" name="image" placeholder="Please Enter your Name "
                                                  value="<?php if(isset($row['image'])){echo $row['image']; }?>"class="form-control" />
													
												
													
                                            </div>
<?php
												
												if(isset($errors["size"]))echo $errors["size"];
												if(isset($errors["type"]))echo $errors["type"];
												if(isset($errors["image"]))echo $errors["image"];
											
											
											?>
                                            
											<!--div class="form-group">
                                                <label> Hall managerid</label>
                                                <input type="text" name="ManagerID" placeholder="Please Enter your Name "
                                                    class="form-control" />
													
                                            </div-->
											<div class="form-group">
                                                <label> Hall details</label>
                                                <input type="text" name="Details" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['dname']))
													echo $errors['dname'];?>
													<?php
													if(isset($errors['dnameNumber']))echo $errors['cnameNumber'];?>
													
                                            </div>
											
											
                                           
                                            <div style="float:right;">
                                                <button type="submit"  name ="submit" class="btn btn-primary">Add hall</button>
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
                                    <i class="fa fa-tasks"></i> halls 
                                </div>
								<?php
                                 if(isset($_GET['action'],$_GET['id'])){
									// echo $_GET['action'].'<br>' .$_GET['id'];
									$id=$_GET['id'];
									switch($_GET['action']){
										
										case "delete": echo "delete";
									
										$stm=$con->prepare("delete from weeding_halls where id =:hall_id");
					                     $stm->execute(array("hall_id"=>$id));
					                      if($stm->rowCount()){
											  echo "<div class='alert alert-success'>one row deleted </div>";
										  }
										  	break;
										//case "active": echo "active";
										//break;
										//case "unactive": echo "unactive";
										//break;
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
                                                    <th>hall name</th>
                                                    <th>hall country</th>
													<th>hall city</th>
													<th>hall street</th>
													
													<th>hall details</th>
													<th>images</th>
													
													<th>action</th>
                                                    
                                                </tr>
                                            </thead>
											
                                            <tbody>
											<?php
											
											$sql="select * from weeding_halls";
					                        $stm=$con->prepare("select * from weeding_halls");
					                        $stm->execute();
					                       if($stm->rowCount()){
											  
											foreach($stm->fetchAll() as $row ){
													$id=$row['id'];
													$hall_name=$row['hall_name'];
													$hall_country=$row['hall_country'];
													$hall_city=$row['hall_city'];
													$hall_street=$row['hall_street'];
													//$managerid=$row['ManagerID '];
													//$managrid=$_SESSION['loggedin']['ssn'];
													$Details=$row['Details'];
													$images=$row['image'];
													//echo $hall_name;
													//echo $hall_country;
													//echo $hall_city;
													//echo $hall_street;
													//echo $managrid;
													//echo $Details;
													
												
											
											?>
                                                <tr class="odd gradeX">
													
													
                                               <td><?php echo $id?></td>
                                                    <td><?php echo $hall_name?></td>
                                                    <td><?php echo $hall_city?></td>
													 <td><?php echo $hall_country?></td>
													  <td><?php echo $hall_street?></td>
													  <td><?php echo $Details?></td>
													 
													   <td>
													   <?php echo "<img src='../../images/$images' align='center' style='
																															border: none;
																															width: 100px;
																															border-radius: 50px;
																															height: 60px;
																															object-fit: fill;
																															transition: none;
														'>"?>
														</td>
													   
													    <td>
                                                    
                                                        <a href="edit_hall.php?action=edit&id=<?php echo $id?>" class='btn btn-success'>Edit</a>
                                                        <a href="?action=delete&id=<?php echo $id?>"  class='btn btn-danger' id="delete">Delete</a>
														
														 
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