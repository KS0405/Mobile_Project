<?php
    $cus_email = trim($_POST['cus_email']);
    $cus_pass = trim ($_POST ['cus_pass']);
     /*
    echo "อีเมลล์ :";
    echo $cus_email;
    echo "<br>";
    echo "รหัสผ่าน :";
    echo $cus_pass;*/
?>

<?php
    include "setting/config.php";
?>
<?php
    function gen_key($str){
        $key=md5($str);
        return $key; //ฟังก์ชันนี้ต้องรีเทิร์นค่า
    }
   // $gen_key();exit;
   ?>
<?php
    $strSQL="SELECT * FROM customer WHERE cus_email = '".$cus_email."'";
    $result = @$conn->query($strSQL);
    if(@$result->num_rows > 0){
        //เข้าได้
        while($row = $result->fetch_assoc()){
            $cus_id = $row['cus_id'];
            $pass = $row['cus_pass'];
            /*
            echo $cus_id."<br>";
            echo $pass; */
            if(trim($cus_pass)== trim($pass)){
                    //เข้าได้
                    echo "เข้าได้";
                    @session_start();
                    //เก็บข้อมูลไว้ใน session ยกเว้น password
                    $_SESSION ['cus_id'] = $row ['cus_id']; 
                    $_SESSION ['key'] = gen_key($row['cus_id']);
                    $_SESSION ['cus_name'] =$row ['cus_name'];
                    $_SESSION ['cus_tel'] =$row ['cus_tel'];
                    $_SESSION ['cus_email'] =$row ['cus_email'];
                    //โยนไปหน้า.....produc_tlist.php
                    echo "<meta http-equiv='refresh' content='0;URL=product/product_list.php'>";

            }else{
                    //เข้าไม่ได้ password ไม่ถูก
                    echo "เข้าไม่ได้ password ไม่ถูก";
                    echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
            }
        }
    }else{
        //เข้าไม่ได้ email ไม่ถูก
        echo "เข้าไม่ได้ email ไม่ถูก";
    }


?>
    
    
