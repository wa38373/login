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
        <h3 class="mt-4">เข้าสู่ระบบ</h3>
    <hr>
    <form action=""signup_db.php method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email"aria-describedby="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control"name=""password>
    </div>

    <button type="submit" name="signin"class="btn btn-primary">Sign In</button>
    </form>
    <hr>
    <p>ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่ เพื่อ<a href="index.php" >สมัครสมาชิก</a></p>
    </div>
</body>
</html>