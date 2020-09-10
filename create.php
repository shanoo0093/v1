<?php
include("mysql_connect.inc.php");
$con -> select_db("my_db");
$Account=$_POST['account'];
$Password=$_POST['password'];
$sql=mysql_query("SELECT * FROM my_db where Account ='%$_POST[account]%'");
if($sql[1]==$Account){
    echo '帳號資料重複';
    header("location:create.php");
                     }
    
else{
    $sql=sprintf("INSERT INTO persons(Account, Password) VALUES('%s', '%s')", $_POST['account'], $_POST['password'];
    $con -> query($sql);
    header("location:login.php");
     }
    $con -> close();
?>
