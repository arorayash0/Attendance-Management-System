<html>
<head><style>
body {
  background-color:RGB(202, 207, 210);
}
h1{
color:RGB(27, 38, 49);
}</style></head>
<body><?php
$fn =$_POST['login_id'];
$pw =$_POST['password'];
$link = mysqli_connect ('localhost', 'root','', 'yaar');

if (isset($_POST["LOGIN"]))
{
    if (empty ($fn)) //if username field is empty echo below statement
    {
        echo "<font color='red'>***You must enter your unique username (login_id).***</font><br/><br/>";

    }
    if (empty ($pw)) //if password field is empty echo below statement
    {
        echo "<font color='red'>***You must enter your unique password.***</font><br/><br/>";
    }

}
else
{  
    $query = "SELECT * FROM teacher WHERE Name = '". mysqli_real_escape_string($link,$fn) ."' AND Password= '". mysqli_real_escape_string($link,$pw) ."'" ;
    $result = mysqli_query($link,$query);
    if (mysqli_num_rows($result) == 1) 
    {
        echo "WELCOME"; //Pass, do something
		header("location:value13.php");
		exit;
    } 
    else 
    {
        echo"PLS CHECK DETAILS.<br>"; //Fail
		echo"<a href=value5.php>GO BACK</a>";

    }

}

session_write_close();
?></body>
</html>