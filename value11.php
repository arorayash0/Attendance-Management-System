
<?php
include'bootstrap.php';
?>
<head><style>
body {
  background-image: url("panel2.jpg");
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
    if (empty ($fn)) 
    {
        echo "<font color='red'>***You must enter your unique username (login_id).***</font><br/><br/>";

    }
    if (empty ($pw)) 
    {
        echo "<font color='red'>***You must enter your unique password.***</font><br/><br/>";
    }

}
else
{   $query = "SELECT * FROM student WHERE enrollment = '". mysqli_real_escape_string($link,$fn) ."' AND Password= '". mysqli_real_escape_string($link,$pw) ."'" ;
    $result = mysqli_query($link,$query);
    if (mysqli_num_rows($result) == 1) 
    {
       echo "WELCOME YOUR ENROLLMENT NUMBER IS  ";echo"$fn";
$file1=mysqli_connect("localhost","root","","yaar");
// Check connection

	global$file;
	$query="SELECT *from attendence WHERE enrollment=$fn";
	$run=mysqli_query($file1,$query);
	
	if($run==true)
{
	echo"<style>
td{
	 font-family: Times New Roman;
  vertical-align: center;
  background-color: #ffcccc;
}
		th{
			
			background-color: #ff8080;
		}
		</style>";
	echo "<table  width=60% align=center  > ";
            echo "<tr>";
                echo "<th >DATE</th>";
                echo "<th >ENROLLMENT NUMBER</th>";
                echo "<th  >ATTENDANCE</th>";
	
 while($data=mysqli_fetch_array($run)){

    echo "<tr>";
                echo "<td align=center>" . $data['Date'] . "</td>";
                echo "<td align=center>" . $data['enrollment'] . "</td>";
                echo "<td align=center>" . $data['Attendance'] . "</td>";
               
            echo "</tr>";

 }
echo "</table>";
    }
	else
		echo "Error";


    } 
    else 
    {
        echo "PLS CHECK DETAILS"; 
		echo"<a href=value6.php>GO BACK</a>";
    }

}

session_write_close();

?>
<form>
<a href="logout2.php">Logout</a>
</form>
</body></html>