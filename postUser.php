<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 
 $email = $_POST['email'];
 $name = $_POST['name'];
 $adress = $_POST['address'];
 
 //importing database connection script 
 require_once('dbConnect.php');
 
 //Creating sql query 
 $sql = "UPDATE user SET name = '$name', address = '$address', role = '$role' WHERE email ='$email'";
 
 //Updating database table 
 if(mysqli_query($con,$sql)){
 echo 'Updated Success';
 }else{
 echo 'Updated Failed';
 }
 
 //closing connection 
 mysqli_close($con);
 }