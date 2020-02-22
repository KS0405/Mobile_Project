<?php
    include "../setting/config.php";
?>

<?php 
    header('Access-Control-Allow-Origin: *');
    header("Content-type:application/json; charset=UTF-8");
    header("Cache-Control: no-store, no-cache, must-revalidate"); 
    header("Cache-Control: post-check=0, pre-check=0", false);

    $m_email=$_POST['m_email'];
    $m_pass=$_POST['m_pass'];

    $sql ="SELECT * FROM m_user WHERE m_email='$m_email' AND m_pass='$m_pass' ";
    $result = mysqli_query($conn,$sql);
    $numrow = mysqli_num_rows($result);

    if($numrow==1){
        $arr = array();
        while($row = $result->fetch_assoc()){
          $arr[]=$row;
        }
        echo json_encode($arr);
        mysqli_close($conn);
      }else{
        echo json_encode(null);
      }
?>





