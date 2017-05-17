<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){

 //Getting values
 $email = $_POST['email'];
 $address = $_POST['address'];
 $date_order = $_POST['date_order'];
 //Creating an sql query
 $sql = "INSERT INTO orders (email,address,date_order,status) VALUES ('$email','$address','$date_order','Undone')";

 //Importing our db connection script
 require_once('dbConnect.php');

 //Executing query to database
 if(mysqli_query($con,$sql)){
 echo 'Add Order Success';
 }else{
 echo 'Add Order Failed';
 }

 //Closing the database
 mysqli_close($con);
 }
