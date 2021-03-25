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
        } 
        // else echo "Connerct Success";
    }
    public function ShowProduct()
    {
        $sql = "SELECT Product_id, Product_code, Product_Name , Brand_name, Unit_name,Cost FROM product, brand, unit WHERE product.Brand_ID = brand.Brand_id AND product.Unit_ID = unit.Unit_id";
        $result = $this->dbConn->query($sql);

        echo "<center><h1> ยินดีต้อนรับเข้าสู่เมนูลูกค้า </h1></center><br>";
        echo "<center><a href='Add_Product.php'>สั่งซื้อสินค้า</a>  ";
        echo "<a href='PO.php'>ชำระเงิน</a>     ";
        echo "<a href='Logout.php'>ออกจากระบบ</a><center>";
        echo "<h1>SHOPSHOCK</h1>";
        echo "<h2>Select Product to Cart</h2>";
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
            echo "<td><a href='Add_Product.php?Product={$row['Product_id']}'>Shopshock</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    public function InsertData($data)
    {
        $sql = "INSERT INTO `member`SELECT MAX(member_id)+1,'{$data['name']}','{$data['user']}','{$data['password']}','01' FROM member";
        $result = $this->dbConn->query($sql);
    }
    public function disconnect()
    {
        $this->dbConn->close;
    }
    public function varify_user($user, $pass)
    {
        $sql = "SELECT count(`member_id`) as num ,`name` FROM `member` WHERE `user`='{$user}' and `password`='{$pass}'";
        $result = $this->dbConn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
    public function query($sql)
    {
        $result = $this->db->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function AppProduct($id)
    {
        $sql = "SELECT * FROM product, brand, unit WHERE product.Brand_ID = brand.Brand_id AND product.Unit_ID = unit.Unit_id AND product.Product_id = $id";
        $result = $this->dbConn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
    public function ShopPO($id){
        $sql = "SELECT Product_id, Product_code, Product_Name , Brand_name, Unit_name,Cost FROM product, brand, unit WHERE product.Brand_ID = brand.Brand_id AND product.Unit_ID = unit.Unit_id";
        $result = $this->dbConn->query($sql);
    }
}
