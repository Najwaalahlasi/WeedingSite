<?php
/*  include('include/header.php'); */
 require_once 'login/conn.php';
 $rid=$_GET['id'];
 $stm = $conn->prepare("select * weeding_halls where id=:rid and ");
 $stm->execute(array("rid"=>$rid));
 if ($stm->rowCount()>0) 
 { //echo "000";
 $row=$stm->fetch();
 $name = $row['name_product'];
 $price=$row['propaganda'];
 $description = $row['kind_product'];
 $price=$row['price'];
 $img=$row['image'];
 echo "lklkklk";
 }

?>