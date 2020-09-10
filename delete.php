<?php
include_once("sqlConn.php");
$con -> select_db("my_db");

if(isset($_GET['account']) && $_GET['account']!=""){
    $sql=sprintf("DELETE FROM persons WHERE Account=%s", $_GET['account']);

    $con -> query($sql);
    header("location:index.php");
}

$con -> close();
?>
