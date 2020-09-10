<?php
include_once("sqlConn.php");
$con -> select_db("my_db");
$Account = $_GET['account'];
$Password = $_GET['passwd'];
$sql = mysql_query("SELECT * FROM my_db where Account = '$account'");
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
if($Account != null && $Password != null && $row[1] == $Account && $row[2] == $Password)
    { 
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
    }
    else
    {
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }

    $con -> close();
?>
