<html>
<head><style>
body {
  background-color:RGB(202, 207, 210);
}
h1{
color:RGB(27, 38, 49);
}</style></head>
<body>
<h1 align="center">ADMIN DETAILS</h1>
<form align="center"action="database_admin.php" method="post" enctype="multipart/form-data">
<table align="center">
<tr><td>NAME    :<input type="text" value="" name="name"></td></tr>
<tr><td>PHONE NO.:<input type="text" value="" name="phone_number"></td></tr>
<tr><td>E-MAIL ID:<input type="email" value="" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></td></tr>
<tr><td>GENDER   : MALE<input type="radio" value="male" name="gender">FEMALE<input type="radio" value="female" name="gender"></td></tr>
<tr><td>PASS   : <input type="text" value="" name="pass">(INTEGER VALUE ONLY)</td></tr>
</table>
<input type="submit" value="submit" >
<input type="reset" value="reset">
</form>
</body>
</html>