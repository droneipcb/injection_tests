<?php
session_start();

if(!isset($_SESSION['login_user']))
{
header("Location: index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="styles2.css">
<title>Welcome </title>
</head>

<body>
<h1><center>Welcome <?php echo $_SESSION['login_user']; ?></h1> 
</body>
</html>
