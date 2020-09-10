<?php
include_once("sqlConn.php");
$Account = $_POST['account'];

if(isset['account'] != null)
{
        $sql = "delete from my_db where Account='$Account'";
       
                echo '刪除成功!';
                header("location:index.php");
}
        else
        {
               echo '刪除失敗!';
               header("location:index.php");
        }
}

?>
