
<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	
	$question = $exm->getQuestion();
	$total       = $exm->getTotalRows();
?>
<style>
.starttest p{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#030709;
}
.starttest ul{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#2d4756;
}
.starttest h2{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 25px;
		color:#121069;
}
.starttest h3{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#2d4756;
}
body{
	background-color: #7c0f14;
}
</style>
<div class="main">
<h1 style="color:#7c0f14">Welcome to Online Exam - Start Now</h1>
	<div class="starttest">
	<h2 style="color:#fff">Test your knowledge</h2>
	<p style="color:#fff">This is multiple  choice Test</p>
	<ul style="color:#fff">
		<li><strong>Number of Questions : </strong> <?php echo $total; ?></li>
		<li><strong>Question Type : </strong> Multiple Choice</li>
	</ul>
	<h3 style="color:#fff">You will get only 60 seconds for each question.</h3>
	<a href="test.php?q=<?php echo $question['quesNo']; ?>" style="color:#7c0f14">Start Test</a>	
	</div>
  </div>
<?php include 'inc/footer.php'; ?>