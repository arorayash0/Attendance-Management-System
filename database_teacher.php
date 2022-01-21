<html>
<head><style>
body {
  background-color:RGB(202, 207, 210);
}
h1{
color:RGB(27, 38, 49);
}</style></head>
<body><?php
$name = $_POST['name'];
$phone =$_POST['phone_number'];
$email =$_POST['mail'];
$gender =$_POST['gender'];
$sub =$_POST['subject'];
$subc =$_POST['sub_code'];
$pass =$_POST['pass'];
  $conn= mysqli_connect('localhost','root','','yaar');
   $sql =" INSERT INTO `teacher`(`Name`, `Phone`, `Email`, `Gender`, `Subject`, `sub_code`, `Password`) VALUES ('$name','$phone','$email','$gender','$sub','$subc','$pass')";    
   $run=mysqli_query($conn,$sql);
if($run==true)
{
	echo"DATA INSERTION SUCCESSFUL!<br>";
	echo"<a href=value5.php>GO BACK</a>";
}
	else
	{		
		echo"! PLS CHECK DETAILS .<br><br>";
		echo"<a href=value3.php>GO BACK</a>";
		
	}
?></body>
</html>