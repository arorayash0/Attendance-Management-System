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
	$query="SELECT *from teacher";
	$run=mysqli_query($file,$query);
	echo"<h2 align=center>TEACHER DETAILS</h2>";
	
	if($run==true)
{echo"<style>
td{
	 font-family: Legend;
	
  vertical-align: center;
  background-color: #32CD32;
}
		th{
			
			
			background-color: #ff8080;
		}
		</style>";
	echo "<table  width=90% align=center  > ";
            echo "<tr>";
            echo "<th>NAME</th>";
		    echo "<th>PHONE</th>";
			echo "<th>EMAIL</th>";
		    echo "<th>GENDER</th>";
		    echo "<th>SUBJECT</th>";
            echo "<th >SUB_CODE</th>";
	
 while($data=mysqli_fetch_array($run)){

    echo "<tr>";
                echo "<td align=center>" . $data['Name'] . "</td>";
                echo "<td align=center>" . $data['Phone'] . "</td>";
                echo "<td align=center>" . $data['Email'] . "</td>";
				echo "<td align=center>" . $data['Gender'] . "</td>";
				echo "<td align=center>" . $data['Subject'] . "</td>";
				echo "<td align=center>" . $data['sub_code'] . "</td>";
               
            echo "</tr>";

 }
echo "</table>";
    }
	else
		echo "Error";

?></body></html>