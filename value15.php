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

$pw = $_POST['semester'];

$link = mysqli_connect ('localhost', 'root','', 'yaar');


if (isset($_POST["login"]))
{

    if (empty ($pw)) //if password field is empty echo below statement
    {
        echo "<font color='red'>***You must enter data.***</font><br/><br/>";
    }

}
else
{   $query = "SELECT * FROM student WHERE Semester = $pw";
    $result = mysqli_query($link,$query);
    if (mysqli_num_rows($result) > 0)
    { if($pw==1)
		{
       header("location:value16.php");
	   exit;
		}if($pw==2)
		{
       header("location:value90.php");
	   exit;
		}if($pw==3)
		{
       header("location:value18.php");
	   exit;
		}
    } 
    else 
    {
        echo "PLS CHECK DETAILS<br>"; //Fail
		echo"<a href=value13.php>GO BACK</a>";
    }

}?>
</body>
</html>
