<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //Getting values
 $email = $_POST['email'];
 $weight = $_POST['weight'];
 $price = $_POST['price'];
 $date_order = $_POST['date_order'];
 $date_end = $_POST['date_end'];
 $status = $_POST['status'];
 //Creating an sql query
 $sql = "INSERT INTO order (email,weight,price,date_order,date_end,status) VALUES ('$email','$weight','$price','$date_order','$date_end','Undone')";
 
 //Importing our db connection script
 require_once('dbConnect.php');
 
 //Executing query to database
 if(mysqli_query($con,$sql)){
 echo 'Order berhasil di input';
 }else{
 echo 'Tidak dapat menambah Order';
 }
 
 //Closing the database 
 mysqli_close($con);
 }