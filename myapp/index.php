<?php

    session_start();
  require_once ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="mt-4">สมัครสมาชิก</h3>
    <hr>
    <form action="signup_db.php" method="post">
        <?php if(($_SESSION['error'])){?>
            <div class="alert alert-danger" role='alert'>
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php }?>
        <?php if(($_SESSION['success'])){?>
            <div class="alert alert-sucess" role='alert'>
                <?php
                    echo $_SESSION['sucess'];
                    unset($_SESSION['sucess']);
                ?>
            </div>
        <?php }?>
        <?php if(($_SESSION['warning'])){?>
            <div class="alert alert-warning" role='alert'>
                <?php
                    echo $_SESSION['warning'];
                    unset($_SESSION['warning']);
                ?>
            </div>
        <?php }?>

    <div class="mb-3">
        <label for="firstname" class="form-label">First name</label>
        <input type="text" class="form-control" name="lastname"aria-describedby="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last name</label>
        <input type="text" class="form-control" name="lastname"aria-describedby="lastname">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email"aria-describedby="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control"name=""password>
    </div>
    <div class="mb-3">
        <label for="confirmpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control"name=""c_password>
    </div>
    <button type="submit" name="signup"class="btn btn-primary">signup</button>
    </form>
    <hr>
    <p>เป็นสมาชิกเเล้วใช่ไหม คลิ๊กที่นี่ เพื่อ<a href="signin.php" >เข้าสู่ระบบ</a></p>
    </div>
</body>
</html>