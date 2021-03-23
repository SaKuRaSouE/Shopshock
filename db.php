<?php
class DataBase
{
    private $dbConn = Null;
    public function connect()
    {
        $this->dbConn = new mysqli("localhost", "root", "", "shopshock");
        $this->dbConn->set_charset("UTF8");
        if ($this->dbConn->connect_errno) {
            echo "Fail to connect to MySql :" .
                $this->dbConn->connect_error;
            exit();
        } else echo "Connerct Success";
    }
    public function ShowProduct()
    {
        $sql = "SELECT Product_id, Product_code, Product_Name , Brand_name, Unit_name,Cost FROM product, brand, unit WHERE product.Brand_ID = brand.Brand_id AND product.Unit_ID = unit.Unit_id";
        $result = $this->dbConn->query($sql);

        echo "<center><h1> ยินดีต้อนรับเข้าสู่เมนูลูกค้า </h1></center><br>";
        echo "<center><a href='Add_Product.php'>สั่งซื้อสินค้า</a>  ";
        echo "<a href='PO.php'>ชำระเงิน</a>     ";
        echo "<a href='Login.php'>ออกจากระบบ</a><center>";
        echo "<table border='1";
        $counter = 0;
        while ($row = $result->fetch_assoc()) {
            if ($counter == 0) {
                echo "<tr><th colspan='7'></th></tr>";
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<th>{$key}</th>";
                }
                echo "<th>SHOPS</th>";
                echo "</tr>";
                $counter++;
            }
            echo "</tr>";
            foreach ($row as $key => $value) {
                echo "<td>{$value}</td>";
            }
            echo "<td><a href='Add_Product.php'>Shopshock</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
