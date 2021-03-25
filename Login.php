<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="handle.php" method="post">
        <h1 style="text-align: center;">SHOPSHOCK</h1>
        <h2 style="text-align: center;">กรุณากรอกชื่อผู้ใช้เเละรหัสผ่านเพื่อเข้าสู่ระบบ</h2>
        <table align="center">
            <tr><td>Username :</td><td><input type="text" id="log_user" name="log_user"></td></tr>
            <tr><td>Password : </td><td><input type="password" name="log_pass" id="log_pass"></td></tr>
            <tr><td colspan="2" ><button type="submit">Submit</button> <button type="reset">Reset</button></td></tr>
        </table>
     
    </form>
</body>

</html>