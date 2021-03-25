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

<body style="margin: 0 auto; width:25%">
    <form action="handle.php" method="post">
        <?php
        include_once "class.php";
        $conn = new DataBase();
        $conn->connect();
        $product = $conn->AppProduct($_GET['Product']);
        //  print_r($product);
        ?>
        <H1>SHOPSHOCK</H1>
        <h3>Select Product to Cart</h3>
        <div style="border:red 1px solid;padding:20px">
            <hr>
            <table>
                <tr>
                    <td>Product_ID</td>
                    <td><input type="text" name="" id="Product_ID" value="<?= $product['Product_id'] ?>" disabled="disabled" readonly></td>
                </tr>
                <tr>
                    <td>Product_Code</td>
                    <td><input type="text" name="" id="Product_Code" value="<?= $product['Product_code'] ?>" disabled="disabled" readonly></td>
                </tr>
                <tr>
                    <td>Product_Name</td>
                    <td><input type="text" name="" id="Product_Name" value="<?= $product['Product_Name'] ?>" disabled="disabled" readonly></td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td><input type="" name="" id="Brand" value="<?= $product['Brand_ID'] ?>" readonly disabled="disabled"></td>
                </tr>
                <tr>
                    <td>Unit</td>
                    <td><input type="text" name="" id="Unit" value="<?= $product['Unit_ID'] ?>" disabled="disabled" readonly></td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td><input type="text" name="" id="Cost" value="<?= $product['Cost'] ?>" disabled="disabled" readonly></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="number" name="" id="Quantity" value="<?= $product['Stock_Quantity'] ?>" required></td>
                </tr>
            </table>
            <hr>
            <div style="text-align: center;"><button type="submit">Submit</button> <button type="reset">Reset</button></div>
        </div>
    </form>
</body>

</html>