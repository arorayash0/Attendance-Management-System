
<?php
include'bootstrap.php';
?>
<html>
<head><style>
body {
  background-image: url("panel4.jpg");
}
h1{
font-color:RGB(27, 38, 49);
}</style></head>
<body>
<center><img src="sunstu.png"  width='150' height='150' /></center>
<font face="Courier New"><h1 align="center">STUDENT LOGIN</h1></font>
<form align="center" action="value11.php" method="post">
<table align="center">
<tr><td><h3><font face="Courier New">ENROLLMENT NUMBER :</font></h3><input type="text" value="" name="login_id"></td></tr>
<tr><td><h3><font face="Courier New">PASSWORD:</font></h3><input type="password" value="" name="password"></td></tr><br>
</table>

<input type="submit" style="padding: 5px 10; border-radius: 5px; margin-top:5px; background: #000; color: fff;";  value="LOGIN">
</form>
<h5 align="center">OR</h5>
<form align="center" action="value4.php">
<input type="submit" style="padding: 5px 10; border-radius: 5px; margin-top:5px; background: #000; color: fff;";  value="SIGN-UP" name="signin">
<br><h5 align="center">ATTENDENCE MANAGEMENT SYSTEM © VERSION 1.0.01.0</h5>
</form>
</body>
</html>