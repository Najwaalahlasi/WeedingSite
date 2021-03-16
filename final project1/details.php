<?php
require_once 'login/conn.php';
include('include/header.php');
?>
<style>
</style>
<section class="section1" id="top">  
    <video autoplay muted loop id="video">
          <source src="images/wedding.mp4" type="video/mp4" />
      </video> 
      <div class="video_over">
        <div class="real1" id="a">
        <?php
$stm = $conn->prepare("select * from weeding_halls where id=344");
$stm->execute();
$getfetch=$stm->fetch();
if($stm->rowCount()>0)
{
   $rid=$getfetch[0];
}
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a1.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a2.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a3.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a4.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a5.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a6.jpg" /> </a><a href="go.php">';
       ?>
        </section>





        <section class="section1" id="middle">
    
        <video autoplay muted loop id="video">
          <source src="images/wedding.mp4" type="video/mp4" />
      </video> 
      <div class="video_over">
        <div class="real1" id="a">
        <?php
$stm = $conn->prepare("select * from products where id=13 ");
$stm->execute();
$getfetch=$stm->fetch();
if($stm->rowCount()>0)
{
   $rid=$getfetch[0];
}
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a1.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a2.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a3.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a4.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a5.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a6.jpg" /> </a><a href="go.php">';
       ?>
        </section>





        <section class="section1" id="last">
        <video autoplay muted loop id="video">
          <source src="images/wedding.mp4" type="video/mp4" />
      </video> 
      <div class="video_over">
        <div class="real1" id="a">
        <?php
$stm = $conn->prepare("select * from products where id=13 ");
$stm->execute();
$getfetch=$stm->fetch();
if($stm->rowCount()>0)
{
   $rid=$getfetch[0];
}
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a1.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a2.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a3.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a4.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a5.jpg" /> </a><a href="go.php">';
echo ' <a href="go.php?id='.$rid.'">
<img style="margin-left:15%;   margin-block-start: 10%;  width:150px; height:150px;" 
src="images/a6.jpg" /> </a><a href="go.php">';
       ?>
        </section>




   <?php
include('include/footer.php');
?>
