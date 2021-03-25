<?php
 include_once "Verified.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<tr><td>Djaa</td></tr>
<tr><td><?php
echo $_SESSION['username'];
?></td></tr>
</table>
<?php
    include_once "class.php";
    $conn = new DataBase();
    $conn->connect();
    $conn->ShowProduct();
    ?>



</body>
</html>