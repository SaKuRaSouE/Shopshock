<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once "class.php";
    $conn = new DataBase();
    $conn->connect();
    ?>

    <form action="handle.php" method="post">
    <h1 style="text-align: center;">ShopShock Member Register</h1>
    <table align="center">
    <tr><td><label for="">Name : </label></td><td><input type="text" id="u_name" name="u_name"></td></tr>
    <tr><td><label for="">Username : </label></td><td><input type="text" id="u_nickname" name="u_nickname"></td></tr>
    <tr><td><label for="">Password : </label></td><td><input type="password" id="pass" name="pass"></td></tr>
    <tr><td><label for="">Confirin Password : </label></td><td><input type="password" id="c_pass" name="c_pass"></td></tr>
    <tr><td colspan="2" align="center"><button type="submit">Submit</button> <button type="reset">Reset</button></td></tr>
    </table>
    
    </form>

</body>
</html>