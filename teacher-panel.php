<?php
include 'includes/login.inc.php'; 
if (empty($_SESSION['username'])) {
   header('location: login.php');
   exit();
 } 
include 'includes/signup.inc.php';
include 'includes/fetch.inc.php';
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>AIT: Student Panel</title>
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<center>
		<h3 style="display: inline;" id="greeting"></h3>
		<h2 style="display: inline;"><?php echo $_SESSION['username']; ?></h2><br>
		<?php echo "Today is ".date('d/m/y'); ?><br>
		<a href="includes/logout.inc.php">Log OUt</a><br>
		<hr style="margin: 10px  auto; width: 25%; ">
	</center>
	<center>
		<?php
			//fetch course
			$date = date("d/m/y");
  			$fetchCourse = "SELECT course FROM `teachers` WHERE username='$username'";
  			$course = mysqli_query($con,$fetchCourse);
  			if( mysqli_num_rows( $course ) > 0 ){
				while( $row = mysqli_fetch_assoc($course) ){
					$course_array = implode(',', $row);
				}
			}
		?>
		<p style="text-decoration: underline;">TAKE ATTENDANCE</p>
		<p>course: <?php echo $course_array; ?> </p>
	</center>
	<center>
		<form>
			<table border="2">
			  	<thead>
				    <tr>
				      <th>First Name</th>
				      <th>Last Name</th>
				      <th>Course</th>
				      <th>Enrollment</th>
				      <th>Attendance</th>
				    </tr>
			  	</thead>
			  	<tbody>
			    <?php
			    //  if( mysqli_num_rows( $selectCourseBCA ) > 1 ){
			      //  $row = mysqli_fetch_assoc( $selectCourseBCA );
			     // }//
			      for ($i=0; $i <= $row ; $i++) { 
			      	while( $row = mysqli_fetch_assoc( $selectCourseBCA ) ){
			      	  $i++;
			          echo "<tr><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['course']}</td><td>{$row['enrollment']}</td><td>
			          <input type='radio' name='$i' value='present'> present
					  <input type='radio' name='$i' value='absent'> Absent
			          </td></tr>\n";
			        }
			      }
			    ?>
				</tbody>
			</table>
		</form>
	</center>
	<!-- scripts -->
	<script src="scripts/greetings.js"></script>
</body>
</html>