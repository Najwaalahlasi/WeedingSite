<?php
$dns="mysql:host=localhost;dbname=wedding2";
$user="root";
$pass="";
$options=array
(
PDO :: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try{
$con=new PDO($dns,$user,$pass,$options);
echo "connected";
}
catch(PDOException $e){
	echo $e->getMessage();
}
?>
      