<?php
include ("class/clslogin.php");
$p=new login();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1" align="center" cellpadding="5">
    <tr>
      <td colspan="2" align="center" valign="middle">Đăng nhập</td>
    </tr>
    <tr>
      <td width="135" align="left" valign="middle">Username:</td>
      <td width="349" align="left" valign="middle"><label for="txtuser"></label>
      <input type="text" name="txtuser" id="txtuser" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Password:</td>
      <td align="left" valign="middle"><label for="txtpass"></label>
      <input type="password" name="txtpass" id="txtpass" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input type="submit" name="button" id="button" value="Login" /></td>
    </tr>
  </table>
  <div align="center">
  <?php
  switch($_POST['button'])
  	{
	  case 'Login':
	  	{
			$user=$_REQUEST['txtuser'];
			$pass=$_REQUEST['txtpass'];			
			if($user!='' && $pass!='')
			{
				if($p->mylogin($user,$pass)==0)
				{
					echo 'Đăng nhập thất bại!';
				}
			}
			else
			{
				echo 'Vui lòng nhập đầy đủ thông tin'; 
			}
			break;
		}		
	}
  ?>
  </div>
</form>
</body>
</html>