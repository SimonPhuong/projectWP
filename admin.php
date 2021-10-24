<?php
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['pass']))
{
	include("class/clslogin.php");
	$p=new login();
	$p->confirmlogin($_SESSION['user'],$_SESSION['pass']);
}
else
{
	header('location:login.php');	
}
include ("class/uploadfile.php");
$q=new uploadfile();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  Chọn file cần upload: 
  <label for="myfile"></label>
  <input type="file" name="myfile" id="myfile" />
  <input type="submit" name="button" id="button" value="Upload File" />
	 <?php
 switch($_POST['button'])
  {
	case'Upload File':
	{
		$name=$_FILES['myfile']['name'];
		$size=$_FILES['myfile']['size'];
		$tmp_name=$_FILES['myfile']['tmp_name'];
		$type=$_FILES['myfile']['type'];		
		if($type == "image/png")
		{
			if($q->upfile($name,$tmp_name,"data")==1)
			{
				echo"upload file thành công!";	
			} 
			else
			{
			}
		}
		else
		{
			echo"File không phù hợp!";
		}
	}
	break;
  }
  ?>
</form>

</body>
</html>