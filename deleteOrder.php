<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 
 $id_order = $_POST['id_order'];
 
 //importing database connection script 
 require_once('dbConnect.php');
 
 //Creating sql query 
 $sql = "DELETE FROM orders WHERE id_order ='$id_order'";
 
 //Updating database table 
 if(mysqli_query($con,$sql)){
 echo 'Deleted Success';
 }else{
 echo 'Deleted Failure';
 }
 
 //closing connection 
 mysqli_close($con);
 }