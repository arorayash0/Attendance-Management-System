

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
	$query="SELECT *from student";
	$run=mysqli_query($file,$query);
	echo"<h2 align=center>STUDENT RECORD</h2>";
	
	if($run==true)
{echo"<style>
td{
	 font-family: Times New Roman;
	
  vertical-align: center;
  background-color: 	#FFD700;
}
		th{
			
			
			background-color: 	#FFD700;
		}
		</style>";
	echo "<table  width=90% align=center  > ";
            echo "<tr>";
            echo "<th>NAME</th>";
		    echo "<th>ENROLLMENT NUMBER</th>";
			echo "<th>EMAIL</th>";
		    echo "<th>GENDER</th>";
		    echo "<th>SEMESTER</th>";
         
	
 while($data=mysqli_fetch_array($run)){

    echo "<tr>";
                echo "<td align=center>" . $data['Name'] . "</td>";
                echo "<td align=center>" . $data['enrollment'] . "</td>";
                echo "<td align=center>" . $data['Email'] . "</td>";
				echo "<td align=center>" . $data['Gender'] . "</td>";
				echo "<td align=center>" . $data['Semester'] . "</td>";
               
            echo "</tr>";

 }
echo "</table>";
    }
	else
		echo "Error";

?></body></html>