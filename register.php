<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $email = $_POST['email'];
 $password = $_POST['password'];
 $name = $_POST['name'];
 $address = $_POST['address'];
 
 if($email == '' || $name == '' || $password == '' || $address == ''){
 echo 'Data belum lengkap, silahkan lengkap';
 }else{
 require_once('dbConnect.php');
 $sql = "SELECT * FROM user WHERE email='$email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 if(isset($check)){
 echo 'Email sudah terdaftar!';
 }else{ 
 $sql = "INSERT INTO user (email,password,name,address) VALUES('$email','$password','$name','$address')";
 if(mysqli_query($con,$sql)){
 echo 'Register User Sukses';
 }else{
 echo 'oops! Coba lagi!';
 }
 }
 mysqli_close($con);
 }
}else{
echo 'error';
}