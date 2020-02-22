<?php
    include "../setting/config.php";
?>

<?php //header
@header("content-type:application/json;charset=utf-8");
@header("Access-Control-Allow-Origin: *");
@header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-allow-origin, access-control-allow-methods, access-control-allow-headers');
?>

<?php //input
if($_SERVER["REQUEST_METHOD"]=="POST"){
   // $content =@file_get_contents('php://input');
   // $json_data =@json_decode($content,true);
   
   // $mem_id = $_POST['mem_id'];
	$m_fullname = $_POST['m_fullname'];
    $m_email = $_POST['m_email'];
    $m_pass = $_POST['m_pass'];

}
else{
   /// $mem_id="mem_01";
   $m_fullname="konkanok supharut";
   $m_email="konkanoksupharut@gmail.com";
   $m_pass="12345678";
    
}

?>

<?php //process

        ///gen tor_id

        $tor_id=$m_email."-".date("dmYHi")."-".rand(1000,9999);

    // tor_datetime
        
      ///  $tor_datetime =date("Y-m-d H:i:s");

        //insert

        $strSQL="INSERT INTO m_user(m_fullname,m_email,m_pass) VALUE('".$m_fullname."','".$m_email."','".$m_pass."')";
        $result=@$conn->query($strSQL);
    

?>

<?php //output - response

    $total_num=5;
    echo json_encode(array("result"=>$total_num));

?>

<?php  //log

$ip=$_SERVER['REMOTE_ADDR'];
$date=@date("d/m/y H:i:s");
$objFopen = @fopen("register.log","a+");
$str=$date."IP:".$ip."|->คำสั่ง ".@$strSQL."\n";
@fwrite($objFopen,$str);
@fclose($objFopen);


?>