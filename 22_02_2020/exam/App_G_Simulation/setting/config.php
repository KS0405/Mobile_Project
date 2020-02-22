<?php
$conn = new mysqli("127.0.0.1","root","","ionic_login_register");
//IP DB server,User,Pass,ชื่อDB
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
@mysqli_set_charset($conn,"utf8");
@date_default_timezone_set("asia/bangkok");//ไทม์โซนสำคัญ
?>
