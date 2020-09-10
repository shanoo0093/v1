<?php
include_once("sqlConn.php");
$con -> select_db("my_db");

if(isset($_GET['id']) && $_GET['id']!=""){
    $sql=sprintf("DELETE FROM persons WHERE personID=%s", $_GET['id']);

    $con -> query($sql);
    header("location:index.php");
}

$con -> close();
?>
