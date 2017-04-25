<?php 
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $email  = $_GET['email'];
 
 require_once('dbConnect.php');
 
 
 $sql = "SELECT id,_user, email, name, address, role FROM user WHERE user.email='".$email."'";
 
 $r = mysqli_query($con,$sql);
 
 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(

 "id_user"=>$res['id_user'],
 "email"=>$res['email'],
 "name"=>$res['name'],
 "address"=>$res['address'],
 "role"=>$res['role']
 )
 );
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);
 
 }