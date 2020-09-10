<?php
include_once("sqlConn.php");
$con -> select_db("my_db");

if(isset($_POST['Submit'])){
    if($_POST['account'] != null &&  $_POST['password'] != null )
        {   
        $sql=sprintf(UPDATE persons SET Account='%s', Password='%s' WHERE Password=%s", $_POST['password']);
        echo '修改成功';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
        }
     else
        {
        echo '修改失敗';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=change.php>';
        }
  }      
 else{
     echo '網頁錯誤';
     }
    $con -> query($sql);
    header("location:index.php");
}

$row = $result -> fetch_array();

$con -> close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpex0528-update.php</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="update.php">
  <table width="800" border="1" align="center">
    <tr>
      <th>Account</th>
      <th>Password</th>
      <th>Age</th>
    </tr>
    <tr>
      <td align="left" valign="middle"><label>
        <input name="Account" type="text" id="Account" value="<?php echo $row['account']; ?>"/>
      </label></td>
      <td align="left" valign="middle"><label>
        <input name="Password" type="text" id="Password" value="<?php echo $row['password']; ?>"/>
      </label></td>
    </tr>
    <tr align="center" valign="middle">
      <td colspan="3"><label>
        <input name="Submit" type="submit" value="送出" /></label>
    </tr>
  </table>
</form>
</body>
</html>
