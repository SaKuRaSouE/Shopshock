<?php
 include_once "class.php";
 $mycon = new DataBase();
 $mycon->connect();
 if(isset($_POST['u_name'])){
     if($_POST['pass']==$_POST['c_pass']){
         $data['name']=$_POST['u_name'];
         $data['user']=$_POST['u_nickname'];
         $data['password']=$_POST['pass'];
         $mycon->InsertData($data);
         header("location:Login.php");
     }
    }else if(isset($_POST['log_user'])){
        $reslut=$mycon->varify_user($_POST['log_user'],$_POST['log_pass']);
        session_start();
        if($reslut['num']==1){
            $_SESSION['name'] = $reslut['name'];
            header("location: ProductList.php");
        }else{
            echo "รหัสผ่านไม่ถูกต้อง";
            echo "  <a href='Login.php'>Link back here...</a>";
        }
 }