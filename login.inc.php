<?php

include ('connnection.php');
$userid = $_SESSION['SESS_MEMBER_ID'];
   
  $qry = "SELECT * FROM exam_score where userid='$userid' ";
	$result=mysqli_query($conn,$qry);
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['userid'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			
		}
	 }

?>