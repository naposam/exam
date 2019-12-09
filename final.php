<?php include 'inc/header.php'; ?>
<?php 
include('connect.php');
	Session::checkSession();
	$userid = $_SESSION['SESS_MEMBER_ID'];
?>
<style>
	.starttest a{
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 25px;
		color:#121069;
	}
	body{
	background-color: #7c0f14;
}
p{
	color: #fff
}
</style>
<div class="main">
<h1 style="color: #7c0f14">You are Done    !</h1>
	<div class="starttest">
	<p>Congratulations ! You have just Completed the test.</p>
	<p>Final Sore : 
		<?php
			if(isset($_SESSION['score'])){
				echo $_SESSION['score'];
				$score=$_SESSION['score'];
				unset($_SESSION['score']);
$sql = "INSERT INTO exam_score (userid,score) VALUES (:a,:b)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$userid,':b'=>$score));
			}
		?>
	</p>
	<a href="viewans.php">View Correct Answer</a>
	<a href="starttest.php" >Again Start Test!!!!</a>
	</div>
  </div>
<?php include 'inc/footer.php'; ?>