<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>

<script>
    function login_fr(){
        document.forms["login"].action = "login_process.php";
        document.forms["login"].submit();
    }

    function Register(){
        document.forms["login"].action = "cus_add.php";
        document.forms["login"].submit();
    }
</script>

<?php
   function rand_pass(){
    $rand = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),0,8);
    return $rand;
    }
?>

<body>
    <br><br>
    <div >
    <form id = "login" name = "login" method = "POST">
        <div align = "center">

        <div class = "row">
            <div class = "col-sm-4" align = "right">อีเมล</div>
            <div class = "col-sm-4" align = "left">
                <input type = "email" id = "cus_email" name = "cus_email"/>
            </div>
        </div>

        <div class = "row">
            <div class = "col-sm-4" align = "right">รหัสผ่าน</div>
            <div class = "col-sm-4" align = "left">
                <input type = "text" id = "cus_pass" name = "cus_pass" /> 
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4" align="right">
            <!-- blank-->
            </div>
            
            <div class="col-sm-4" align="left"><br>
                <label onClick = "login_fr()" style="border-style: solid;border-color:green;border-size:2px;color:green;cursor:pointer;padding:5px;border-radius : 10px">เข้าสู่ระบบ</label>
                <label onClick = "Register()" style="border-style: solid;border-color:green;border-size:2px;color:green;cursor:pointer;padding:5px;border-radius : 10px">สมัครสมาชิก</label>
            </div>
        </div>

    </div>
    </form>
</body>
</html>