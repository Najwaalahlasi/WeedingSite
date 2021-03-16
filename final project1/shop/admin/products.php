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
                        <h2><i class="fa fa-tasks"></i> products</h2>

                        
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-8">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> Add New products
								
                            </div>
							
                            <div class="panel-body">
                                <div class="row">
								   <?php
								   
								  session_start();
								     if(isset($_POST['submit'])){
									   $name_product =trim($_POST['name_product']);
									   $propaganda=trim($_POST['propaganda']);
									   $kind_product=trim($_POST['kind_product']);
									   $price=trim($_POST['price']);
									   //$managerid=trim($_POST['mid']);
									   //$managrid=$_SESSION['id'];
									  
                                      
									   $images=trim($_POST['image']);
									   
									   $errors=array();
									   if(empty($name_product))
									   {
										   $errors['nname']="<div style='color:red'>Enter name of halls</div>";
									   }
									   elseif(is_numeric($name_product)){
										   $errors['nnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($propaganda))
									   {
										   $errors['cname']="<div style='color:red'>Enter name of hall country</div>";
									   }
									   elseif(is_numeric($propaganda)){
										   $errors['cnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($kind_product))
									   {
										   $errors['hname']="<div style='color:red'>Enter name of hall city</div>";
									   }
									   elseif(is_numeric($kind_product)){
										   $errors['hnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($price))
									   {
										   $errors['sname']="<div style='color:red'>Enter name of hall street</div>";
									   }
									   elseif(is_numeric($price)){
										   $errors['snameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($images))
									   {
										   $errors['iname']="<div style='color:red'>choose images</div>";
									   }
									   elseif(is_numeric($images)){
										   $errors['inameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   else{
										  
										  $sql="insert into products(name_product,propaganda,kind_product,price,image,userid) values 
										  ('$name_product','$propaganda','$kind_product','$kind_product',' $images',1)";
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
                                                <label> product Name</label>
                                                <input type="text" name="name_product" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['nname']))
													echo $errors['nname'];?>
													<?php
													if(isset($errors['nnameNumber']))echo $errors['cnameNumber'];?>
                                            </div>
											<div class="form-group">
                                                <label> propaganda</label>
                                                <input type="text" name="propaganda" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['cname']))
													echo $errors['cname'];?>
													<?php
													if(isset($errors['cnameNumber']))echo $errors['cnameNumber'];?>
													
                                            </div>
											<div class="form-group">
                                                <label> kind_product</label>
                                                <input type="text" name="kind_product" placeholder="Please Enter your Name "
                                                    class="form-control" />
													<?php if(isset($errors['hname']))
													echo $errors['hname'];?>
													<?php
													if(isset($errors['hnameNumber']))echo $errors['cnameNumber'];?>
													
                                            </div>
											<div class="form-group">
                                                <label> price</label>
                                                <input type="text" name="price" placeholder="Please Enter your Name "
                                                    class="form-control" />
													
                                            </div>
											<div class="form-group">
                                                <label>images </label>
                                                <input type="file" name="image" placeholder="Please Enter your Name "
                                                  value="../../../images/$images"  class="form-control" />
													
												
													
                                            </div>

                                           
                                            <div style="float:right;">
                                                <button type="submit"  name ="submit" class="btn btn-primary">Add product</button>
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
                                    <i class="fa fa-tasks"></i> products 
                                </div>
								<?php
                                 if(isset($_GET['action'],$_GET['id'])){
									// echo $_GET['action'].'<br>' .$_GET['id'];
									$id=$_GET['id'];
									switch($_GET['action']){
										
										case "delete": echo "delete";
									
										$stm=$con->prepare("delete from products where id =:hall_id");
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
                                                    <th>product name</th>
                                                    <th>propaganda</th>
													<th>kind_product</th>
													<th>price/th>
													<th>images</th>
													
													<th>action</th>
                                                    
                                                </tr>
                                            </thead>
											
                                            <tbody>
											<?php
											
											$sql="select * from products";
					                        $stm=$con->prepare("select * from products");
					                        $stm->execute();
					                       if($stm->rowCount()){
											  
											foreach($stm->fetchAll() as $row ){
													$id=$row['id'];
													$name_product=$row['name_product'];
													$propaganda=$row['propaganda'];
													$kind_product=$row['kind_product'];
													$price=$row['price'];
													
													$images=$row['image'];
													
													
													
												
											
											?>
                                                <tr class="odd gradeX">
													
													
                                               <td><?php echo $id?></td>
                                                    <td><?php echo $name_product?></td>
                                                    <td><?php echo $propaganda?></td>
													 <td><?php echo $kind_product?></td>
													  <td><?php echo $price?></td>
													   <td><?php echo $images?></td>
													  
													
																						
											
													
													<td>
                                                    
                                                        <a href="edit_product.php?action=edit&id=<?php echo $id?>" class='btn btn-success'>Edit</a>
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