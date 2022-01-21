<?php
include'bootstrap.php';
?>
<html>
<head><style>
body {
  background-color:RGB(202, 207, 210);
}
h1{
color:RGB(27, 38, 49);
}</style></head>

<body>
<font face="Comic Sans MS"><h1 align="center">STUDENT ATTENDANCE </h1></font>
<form action="value15.php" method="post" align="center">
<h2><font face="Courier New">SEMESTER :</font></h2>
<select name="semester" value="">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
<h2><font face="Courier New">SUBJECT :</font></h2>
<select name="subject" value="">
<option>MATHS</option>
<option>DIGITAL ELECTRONIC</option>
<option>JAVA</option>
<option>C</option>
<option>C++</option>
<option>PHYSICS</option>
<option>CSS</option>
</select>
<br><br>
<input type="submit" style="padding: 5px 10; border-radius: 5px; margin-top:5px; background: #000; color: fff;"; value="Login">

</form>
<center><a href="logout2.php">Logout</a></center>
</body>
</html>