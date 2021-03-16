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
                                <i class="fa fa-plus-circle"></i> edit halls
								
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
											$sql="select * from weeding_halls where id=:hall_id";
					                        $stm=$con->prepare($sql);
					                        $stm->execute(array("hall_id"=>$id));
					                       if($stm->rowCount()>0){
											  
											   //print_r($stm->fetchAll());
											  //  $i;
											foreach($stm->fetchAll() as $row ){
													$id=$row['id'];
													//echo "<td>$i</td>"
													$hall_name=$row['hall_name'];
													$hall_country=$row['hall_country'];
													$hall_city=$row['hall_city'];
													$hall_street=$row['hall_street'];
													//$managerid=$_SESSION['loggind']['ssn'];
													//$managerid=$row['ManagerID '];
										             $Details=$row['Details'];
													// $i++;
											
									  
										   if(isset($_POST['submit'])){
											   $id_hall=$_POST['id'];
									   $hallname =trim($_POST['hall_name']);
									   $hallcountry=trim($_POST['hall_country']);
									   $hallcity=trim($_POST['hall_city']);
									   $hallstreet=trim($_POST['hall_street']);
									    $deetails=trim($_POST['Details']);
										 $images=trim($_POST['image']);
									   //echo "$id <br> $hallname <br> $hallcountry <br> $hallcity <br> $hallstreet <br> $deetails <br> " ;
									   //$managerid=trim($_POST['mid']);
									  
                                      
									   
									   $errors=array();
									   if(empty($hallname))
									   {
										   $errors['cname']="<div style='color:red'>Enter name of category</div>";
									   }
									   elseif(is_numeric($hallname)){
										   $errors['cnameNumber']="<div style='color:red'>enter string name</div>";
									   }
									   if(empty($errors)){
										 $sql="update weeding_halls set hall_name='$hallname' ,
										   hall_country='$hallcountry' , hall_city='$hallcity' , hall_street='$hallstreet' ,image='$images',
										   Details='$deetails' where  id=$id_hall";
										  
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
                                                <label> Hall Name</label>
                                                <input type="text" name="hall_name" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $hall_name?>"/>
													<?php if(isset($errors['cname']))
													echo $errors['cname'];?>
													<?php
													if(isset($errors['cnameNumber']))echo $errors['cnameNumber'];?>
                                            </div>
											<div class="form-group">
                                                <label> Hall country</label>
                                                <input type="text" name="hall_country" placeholder="Please Enter hall country "
                                                    class="form-control" value="<?php echo $hall_country?>" />
													
                                            </div>
											<div class="form-group">
                                                <label> Hall city</label>
                                                <input type="text" name="hall_city" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $hall_city?>"/>
													
                                            </div>
											<div class="form-group">
                                                <label> Hall street</label>
                                                <input type="text" name="hall_street" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $hall_street?>" />
													
                                            </div>
											<div class="form-group">
                                                <label> images</label>
                                                <input type="file" name="image" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $images?>" />
													
                                            </div>
											
											<div class="form-group">
                                                <label> Hall details</label>
                                                <input type="text" name="Details" placeholder="Please Enter your Name "
                                                    class="form-control" value="<?php echo $Details?>" />
													
                                            </div>
											
											
                                           
                                            <div style="float:right;">
                                                <button type="submit"  name ="submit" class="btn btn-primary">edit hall</button>
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
  