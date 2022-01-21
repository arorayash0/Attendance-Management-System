<html>
<head><style>
body {
  background-image: url("panel2.jpg");
}
a{
color:rgb(128, 0, 0);
}</style></head>
<body><?php
$file=mysqli_connect("localhost","root","","yaar");
// Check connection

	global$file;
	$query="SELECT *from attendence";
	$run=mysqli_query($file,$query);
	echo"<h2 align=center> STUDENT ATTENDNCE RECORD</h2>";
	
	if($run==true)
{echo"<style>
td{
	 font-family: Times New Roman;
	
  vertical-align: center;
  background-color: #32CD32;
}
		th{
			
			
			background-color: #ff8080;
		}
		</style>";
	echo "<table  width=90% align=center  > ";
            echo "<tr>";
                echo "<th>Date</th>";
                echo "<th >Enrollment</th>";
                echo "<th  >Attendance</th>";
	
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

?></body></html>