<?php
$name = $_POST['name'];
$phone =$_POST['phone_number'];
$email =$_POST['mail'];
$gender =$_POST['gender'];
$sub =$_POST['subject'];
$sub_code =$_POST['sub_code'];
$ps =$_POST['pass'];
  $conn= mysqli_connect('localhost','root','','shashank');
   $sql ="INSERT INTO `teacher`(`Name`, `Phone`, `Email`, `Gender`, `Subject`, `sub_code`, `Password`) VALUES ('$name','$phone','$email','$gender','$sub','$sub_code,'$ps')";  
   $run=mysqli_query($conn,$sql);
if($run==true)
	echo"input data insert successful";
	else 
		echo"error!";
?>