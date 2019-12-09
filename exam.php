<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
?>
<head>
	<style>
	body{
		background-color: #7c0f14
	}
	#particles-js{
      	position: absolute;
        left: 0px;
         top: 0px;
        z-index: -1;
      	background-color: #7c0f14;
      	width: 100%;
      }


	</style>
	</head>
<body>
	<div id="particles-js"></div>
<div class="main">
<h1 style="color:#7c0f14">Welcome to Online Exam - Start Now</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/online_exam.png"/>
	</div>
	<div class="segment">
	<h2 style="color:#fff">Start Test From Here</h2>
	<ul>
		<li><a href="starttest.php">Start Now...</a></li>
	</ul>
	</div>
	
  </div>
<?php include 'inc/footer.php'; ?>
<script type="text/javascript" src="css/particles.js"></script>
<script type="text/javascript" src="css/app.js"></script>
</body>