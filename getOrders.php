<?php
define('HOST','mysql.idhostinger.com');
define('USER','u917918641_cdry');
define('PASS','123456');
define('DB','u917918641_cdry');

  $con = mysqli_connect(HOST,USER,PASS,DB);
  $em  = $_GET['email'];
  $sql = "select * from orders where status='Undone' and email='".$em."'";

  $res = mysqli_query($con,$sql);

  $result = array();

  while($row = mysqli_fetch_array($res)){
    array_push($result,
    array('id_order'=>$row[0],
  'email'=>$row[1],
  'address'=>$row[2],
    'weight'=>$row[3],
	'price'=>$row[4],
	'date_order'=>$row[5],
	'date_end'=>$row[6],
    'status'=>$row[7]
  ));
}
 echo json_encode(array("result"=>$result));

  mysqli_close($con);

?>
