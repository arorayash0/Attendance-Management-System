<?php
 include 'value16.php';
 if(isset($_POST['save'])) {
 	// echo $_POST['rollNo'];
 	// echo $_POST['1'];

 	echo "ATTENDANCE RECORDED SUCCESSFULLY<BR>";

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
 			
 		}else
		{
 			echo "fail";
 			header("location=value16.php");
 		}
 	}
 }
?>