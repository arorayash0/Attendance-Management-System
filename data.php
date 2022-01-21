<?php
session_start();
$_SESSION['HNAME']=$_POST["name"];
if(isset($_POST['name'])==null)
{
	echo"not loged in.";
}
	else
echo"hello     ".$_POST['name'];
?>
<h2><a href="logout.php">log out</a></h2>