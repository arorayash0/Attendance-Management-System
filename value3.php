<?php
include'bootstrap.php';
?>
<html>
<head><style>
body {
  background-image: url("panel2.jpg");
  }
h1{
color:RGB(27, 38, 49);
}</style></head>
<body>
<center><img src="sunteach.png" width='150' height='150' /></center>
<font face="Comic Sans MS"><h1 align="center">TEACHER REGISTRATION</h1></font>
<form align="center" action="database_teacher.php" method="post" enctype="multipart/form-data">
<table align="center">
<tr><td><font face="Courier New">NAME    :</font><input type="text" value="" name="name"></td></tr><br>
<tr><td><font face="Courier New">PHONE NO.:</font><input type="text" value="" name="phone_number"></td></tr>
<tr><td><font face="Courier New">E-MAIL ID:</font><input type="email" value="" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></td></tr>
<tr><td><font face="Courier New">GENDER   : MALE</font><input type="radio" value="male" name="gender"><font face="Courier New">FEMALE</font><input type="radio" value="female" name="gender"></td></tr>
<tr><td><font face="Courier New">SUBJECT  :</font><select name="subject" placeholder="SELECT">
<option><font face="Courier New">ENGLISH</font></option>
<option><font face="Courier New">MATHEMATICS</font></option>
<option><font face="Courier New">HINDI</font></option>
<option><font face="Courier New">SCIENCE</font></option>
<option><font face="Courier New">SOCIAL SCIENCE</font></option>
</td></tr>

<tr><td><font face="Courier New">SUB_CODE :</font><input type="text" value="" name="sub_code"></td></tr><br>
<tr><td><font face="Courier New">PASSWORD:</font><input type="password"  value="" name="pass"><br><font face="Courier New">(integer only)</font></td></tr>
</table>
<input type="submit" style="padding: 5px 10; border-radius: 5px; margin-top:5px; background: #000; color: fff;"; value="submit"><br><br>
<input type="reset" style="padding: 5px 10; border-radius: 5px; margin-top:5px; background: #000; color: fff;"; value="reset">
</form>
</body>
</html>