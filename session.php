<?php
//sessions in php
 session_start();
 //session views in an array
 $_SESSION['views'] = 100; //store session data
 echo "Pageviews<br/>".$_SESSION['views'] ; //retrieve data
 if(isset($_SESSION['views'])){
 	$_SESSION['views'] = $_SESSION['views']+1;
 }
 else{
 	$_SESSION['views'] = 1;
 }
 echo "session views ".$_SESSION['views'];

?>