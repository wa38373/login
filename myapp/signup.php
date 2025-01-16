<?php 

    session_start();
    require_once("config.php");
    if(isset($_POST['signup'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $role = $_POST['user'];#here

        if (empty($firstname)){
            $_session['error'] = 'กรุณากรอกชื่อ';
            header("location: index.php");
        } else if (empty($lastname)){
            $_session['error'] = 'กรุณากรอกนามสกุล';
            header("location: index.php");
        } else if (!filter_var($email, FILTER_VALTIDATE_EMAIL)){
            $_session['error'] = 'รูปเเบบอีเมลไม่ถูกต้อง';
            header("location: index.php");
        } else if (empty($password)){
            $_session['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: index.php");
        } else if (strlen($_POST['password']) > 255 || strlen($_POST['password']) < 2 ){
            $_session['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง / 2 ถึง 255 ตัวอักษร ';
            header("location: index.php");
        } else if (empty($c_password)){
            $_session['error'] = 'กรุณายืนยันรหัสผ่าน ';
            header("location: index.php");
        } else if($password != $c_password){
            $_session['error'] = 'รหัสผ่านไม่ตรงกัน ';
            header("location: index.php");
        } else {
            try{

                $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
                $check_email->bindParam(":email", $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);


                if($row['email'] == $email){
                    $_session['warning'] = "มีอีเมลนี้อยู่ในระบบเเล้ว <a href='signimn.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ ";
                    header("location: index.php");
                }else if(!isset($_session['error'])){
                    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO users(firstname,lastname,email,password,role) VALUES(:firstname,:lastname,:email,:password,:role)");
                    $stmt->bindparam(":firstname",$firstname);
                    $stmt->bindparam(":lastname",$lastname);
                    $stmt->bindparam(":email",$email);
                    $stmt->bindparam(":password",$passwordhash);
                    $stmt->bindparam(":role",$role);
                    $stmt->execute();
                    $_session['success'] = "สมัครสมาชิิกเรียบร้อยเเล้ว <a href='signin.php class='alert-link'>คลิกที่นี่</a>เพื่อเข้าสู่ระบบ";
                    header("location: index.php")
                }else{
                    $_session['error'] = "มีบางอย่างผิดพลาด";
                    header("location: index.php")
                }

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }


    }



?>