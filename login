<?php
include_once("sqlConn.php");
$con -> select_db("my_db");
$Account = $_POST['account'];
$Password = $_POST['passwd'];
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>create.php</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="create.php">
  <table width="800" border="1" align="center">
    <tr>
      <th>Account</th>
      <th>Password</th>
    </tr>
    <tr>
      <td align="left" valign="middle"><label>
        <input name="account" type="text" id="account" />
      </label></td>
      <td align="left" valign="middle"><label>
        <input name="password" type="text" id="password" />
      </label></td>
    </tr>
    <tr align="center" valign="middle">
      <td colspan="3"><label>
        <input name="Submit" type="submit" value="送出" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
