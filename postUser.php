<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 
 $id_user = $_POST['id_user'];
 $alamat = $_POST['email'];
 $tanggal_lahir = $_POST['name'];
 $jenis_kelamin = $_POST['address'];
 $no_telepon = $_POST['role'];
 
 //importing database connection script 
 require_once('dbConnect.php');
 
 //Creating sql query 
 $sql = "UPDATE user SET name = '$name', address = '$address', role = '$role' WHERE email ='$email'";
 
 //Updating database table 
 if(mysqli_query($con,$sql)){
 echo 'User sukses terupdate';
 }else{
 echo 'Tidak dapat mengubah User, coba lagi';
 }
 
 //closing connection 
 mysqli_close($con);
 }