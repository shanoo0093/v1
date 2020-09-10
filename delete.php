<?php
include_once("sqlConn.php");
$Account = $_POST['account'];

if(isset['account'] != null)
{
        $sql = "delete from my_db where Account='$account'";
       
                echo '刪除成功!';
}
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
}

?>
