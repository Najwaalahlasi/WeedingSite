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
                        <h2><i class="fa fa-tasks"></i> product</h2>

                        
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-8">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> edit product
								
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
											$sql="select * from products where id=:p_id";
					                        $stm=$con->prepare($sql);
					                        $stm->execute(array("p_id"=>$id));
					                       if($stm->rowCount()>0){
											  
											   //print_r($stm->fetchAll());
											  //  $i;
											foreach($stm->fetchAll() as $row ){
													$id=$row['id'];
													//echo "<td>$i</td>"
													$name_product=$row['name_product'];
													$propaganda=$row['propaganda'];
													$kind_product=$row['kind_product'];
													$imags=$row['image'];
													$price=$row['price'];
													// $i++;
											
									  
										   if(isset($_POST['submit'])){
											   $idprod=$_POST['id'];
									               $nameproduct=trim ($_POST['name_product']);
												   $propaganda=trim($_POST['propaganda']);
													$kindproduct=trim($_POST['kind_product']);
													$images=trim($_POST['image']);
													$Pric=trim ($_POST['price']);
									   //echo "$id <br> $hallname <br> $hallcountry <br> $hallcity <br> $hallstreet <br> $deetails <br> " ;
									   //$managerid=trim($_POST['mid']);
									  
                                      
									   
									   $errors=array();
									   if(empty($nameproduct))
									   {
										   $errors['cname']="<div style='color:red'>Enter name of category</div>";
									   }
									   elseif(is_numeric($nameproduct)){
										   $errors['cnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($errors)){
										 $sql="update products set name_product='$nameproduct' ,propaganda='$propaganda',
										   kind_product='$kindproduct' 
										    ,price='$Pric',image='$images' where  id=$idprod";
										  
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
                                                <label> name_product</label>
                                                <input type="text" name="name_product" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $name_product?>"/>
													<?php if(isset($errors['cname']))
													echo $errors['cname'];?>
													<?php
													if(isset($errors['cnameNumber']))echo $errors['cnameNumber'];?>
                                            </div>
											<div class="form-group">
                                                <label> propaganda</label>
                                                <input type="text" name="propaganda" placeholder="Please Enter hall country "
                                                    class="form-control" value="<?php echo $propaganda?>" />
													
                                            </div>
											<div class="form-group">
                                                <label> kind product</label>
                                                <input type="text" name="kind_product" placeholder="Please Enter hall country "
                                                    class="form-control" value="<?php echo $kind_product?>" />
													
                                            </div>
											<div class="form-group">
                                                <label> image of product</label>
                                                <input type="file" name="image" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $price?>" />
													
                                            </div>
											
											<div class="form-group">
                                                <label> price of product</label>
                                                <input type="text" name="price" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $price?>" />
													
                                            </div>
											
											
                                           
                                            <div style="float:right;">
                                                <button type="submit"  name ="submit" class="btn btn-primary">edit product</button>
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
  