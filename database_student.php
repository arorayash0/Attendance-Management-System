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
$class =$_POST['CLASS'];
$pas=$_POST['password'];
  $conn= mysqli_connect('localhost','root','','yaar');
   $sql = "INSERT INTO `student`(`Name`, `enrollment`, `Email`, `Gender`, `Semester`,`Password`) VALUES ('$name','$phone','$email','$gender','$class','$pas')";      
   $run=mysqli_query($conn,$sql);
if($run==true)
{
	echo"DATA INSERTION SUCCESFUL<br>";
    echo"<a href=value6.php>GO BACK</a>";
}
	else 
		echo"error!";
?></body></html>