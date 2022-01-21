<html>
<head><style>
body {
  background-color:RGB(202, 207, 210);
}
h1{
color:RGB(27, 38, 49);
}</style></head>
<body><?php

// compares values entered in login page form with mySQL database, and then directs either to protected page or to a failure page

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
{   $query = "SELECT * FROM admin WHERE Name = '". mysqli_real_escape_string($link,$fn) ."' AND Password= '". mysqli_real_escape_string($link,$pw) ."'" ;
    $result = mysqli_query($link,$query);
    if (mysqli_num_rows($result) == 1) 
    {
	   header("location:value10.php");
	   exit;
    } 
    else 
    {
        echo "PLS CHECK DETAILS"; //Fail
		echo"<a href=value2.php>GO BACK</a>";
    }

}

session_write_close();
?></body>
</html>