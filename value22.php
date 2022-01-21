<?php
 include 'value18.php';
 if(isset($_POST['save'])) {
 	// echo $_POST['rollNo'];
 	// echo $_POST['1'];

 	echo "Page will redirect to teacher-panel in 5 sec...<BR>";

 date_default_timezone_set('Asia/Kolkata');
	$date = date('d/m/y');
	echo $date . '<br>';

 	$rollNos = $_POST['rollNos'];
 	$attendace = $_POST['attendance'];

 	foreach ( $attendace as $rollNo => $attendace_status ) {
 		// echo $attendace_status;
 		// echo '<br>';
 		echo $rollNo . ' => ' . $attendace_status;
 		echo '<br>';
 		$query = "INSERT INTO `attendence`(`Date`, `Enrollment`, `Attendance`) VALUES ('$date','$rollNo','$attendace_status')";
 		if (mysqli_query($con,$query)) 
		{
 			echo "INSERTED.<br>";
 			echo "<a href='FIRSTPAGE.php'>GO TO START</a>";
 			
 		}else
		{
 			echo "fail";
 			header("location=value18.php");
			exit;
 		}
 	}
 }
?>