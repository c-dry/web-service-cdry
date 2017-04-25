<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','cdry');
 
  $con = mysqli_connect(HOST,USER,PASS,DB);
  $em  = $_GET['email'];
  $sql = "select * from orders where status='Done' and email='".$em."'";

  $res = mysqli_query($con,$sql);
  
  $result = array();
  
  while($row = mysqli_fetch_array($res)){
    array_push($result,
    array('id_order'=>$row[0],
	'email'=>$row[1],
    'weight'=>$row[2],
	'price'=>$row[3],
	'date_order'=>$row[4],
	'date_end'=>$row[5],
    'status'=>$row[6]
  ));
}
 echo json_encode(array("result"=>$result));
 
  mysqli_close($con);
 
?>