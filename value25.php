<head><style>
body {
  background-color:RGB(202, 207, 210);
}
h1{
color:RGB(27, 38, 49);
}</style></head>
<body>
 <?php
$file1=mysqli_connect("localhost","root","","yaar");
// Check connection

	global$file;
	$query="SELECT *from attendence WHERE enrollment=$fn";
	$run=mysqli_query($file,$query);
	
	if($run==true)
{
	echo"<style>
td{
	 font-family: Times New Roman;
	font-size: 30px;
	height: 40px;
  vertical-align: center;
  background-color: #ffcccc;
}
		th{
			
			font-size: 50px;
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

?></body></html>