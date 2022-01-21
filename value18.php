<html>
<head><style>
body {
  background-color:RGB(202, 207, 210);
}
h1{
color:RGB(27, 38, 49);
}</style></head>
	<body>
	<form align="center" action="value22.php" method="post">
			<table border="2" align="center" width="500" >
			  	<thead>
				    <tr>
				      <th align="center"> Name</th>
				      <th align="center">Enrollment</th>
				      <th align="center">Attendance</th>
				    </tr>
			  	</thead>
			  	<tbody>
			    <?php
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
				error_reporting(0);
				  $con = mysqli_connect ('localhost', 'root','', 'yaar');
				  $selectQuery = "SELECT * FROM student WHERE Semester = 3";
				  $selectSemester = mysqli_query($con, $selectQuery);
				  if($selectSemester == true){
					  echo"ATTENDANCE";
				  }
			      for ($i=0; $i <=$row ; $i++) { 
			      	while( $row = mysqli_fetch_assoc( $selectSemester ) ){
			      	//  $i++;
					  ?>
					  <input type='hidden' name='rollNos[<?php echo $row["enrollment"] ?>]' value='<?php echo $row["enrollment"] ?>'>
					  <?php
			          echo "<tr><td>{$row['Name']}</td><td>{$row['enrollment']}</td><td>";
					  ?>
			          <input type='radio' name='attendance[<?php echo $row["enrollment"] ?>]' value='P'> present
					  <input type='radio' name='attendance[<?php echo $row["enrollment"] ?>]' value='A'> Absent
                      <?php echo "</td></tr>\n"; 
			        }
			      }
			    ?>
				</tbody>
			</table><br><br>
			<input type="submit" value="submit" name="save">
			<input type="reset" value="reset">
		</form>
		</body>
		</html>