<html>
<head><style>
body {
  background-color:RGB(202, 207, 210);
}
h1{
color:RGB(27, 38, 49);
}</style></head>
<body>
<?php
$name = $_POST['name'];
$phone =$_POST['phone_number'];
$email =$_POST['mail'];
$gender =$_POST['gender'];
$pass =$_POST['pass'];
  $conn= mysqli_connect('localhost','root','','yaar');
   $sql = "INSERT INTO `admin`(`Name`, `Phone`, `Email`, `Gender`,`Password`) VALUES ('$name','$phone','$email','$gender','$pass')";      
   $run=mysqli_query($conn,$sql);
if($run==true)
{
		echo"DATA INSERTION SUCCESSFUL!<br>";
	echo"<a href=value2.php>GO BACK</a>";
}
	else {
		echo"! PLS CHECK DETAILS .<br><br>";
		echo"<a href=value7.php>GO BACK</a>";
	}
?></body>
</html>