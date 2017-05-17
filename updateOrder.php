<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 
 $id_order = $_POST['id_order'];
 $weight = $_POST['weight'];
 $price = $_POST['price'];
 $date_end = $_POST['date_end'];
 
 //importing database connection script 
 require_once('dbConnect.php');
 
 //Creating sql query 
 $sql = "UPDATE orders SET weight = '$weight', price = '$price', date_end = '$date_end' WHERE id_order ='$id_order'";
 
 //Updating database table 
 if(mysqli_query($con,$sql)){
 echo 'Updated Success';
 }else{
 echo 'Updated Failure';
 }
 
 //closing connection 
 mysqli_close($con);
 }