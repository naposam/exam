<?php include 'inc/header.php'; ?>
 <?php
	Session::checkLogin();
?>
<head>
	<style type="text/css">
		body{
			background-color: #7c0f14
			margin:0;
			padding: 0;
			height: 100vh

		}
      #particles-js{
      	position: absolute;
        left: 0px;
         top: 0px;
        z-index: -1;
      	background-color: #7c0f14;
      	width: 100%;
      }

		.box{
			position: absolute;
			top:  calc(62.5% - 150px);
			left: calc(32.5% - 100px);
			transform: perspective(1000px) rotateY(-45deg);
			width: 150px;
			height: 250px;
			transform-style: preserve-3d;
			/*background: #fff;*/
		}
		.box:before{
			content: '';
			position: absolute;
			bottom: -100px;
			left: 0;
			width: 100%;
			height: 50px;
			background: #000;
			filter: blur(40px);
			opacity: 0.5;
			transform: rotateX(90deg);
		}
		.box div{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			transform-style: preserve-3d;
			animation: napo 5s linear infinite;
		}.box div span{
			position: absolute;
			top: 0;
			left: 0;
			display: block;
			width: 100%;
			height: 100%;
			background: linear-gradient(0deg,#f1f1f1,#bbb,#f1f1f1);
			border-radius: 20px;
		}
		.box div span:nth-child(1)
		{
         transform: rotateX(0deg);
		}
		.box div span:nth-child(2)
		{
         transform: rotateX(45deg);
		}
		.box div span:nth-child(3)
		{
         transform: rotateX(-45deg);
		}
		.box div span:nth-child(4)
		{
         transform: rotateX(90deg);
		}
		@keyframes napo{
			0%{
				transform: perspective(1000px) rotateX(0deg);
			}
			100%{
				transform: perspective(1000px) rotateX(359deg);
			}
		}
		 td{
      color:white;
    }
	</style>
</head>
<body >
	<div id="particles-js"></div>
	<div class="" style="margin-right:30px;">
		<div class="box">
	<div>
	<span style="background: #7c0f14;"></span>
  <span style="background: #ffffff;"></span>
  <span style="background: #7c0f14;"></span>
  <span style="background: #ffffff;"></span>
</div>
</div>
	</div>
<div class="main">
<h1>Examination in Online - User Login</h1>

	<div class="segment" style="margin-right:30px; background-color: #F0F8FF">
		
	</div>
	<div class="segment">
	<form action="" method="post">
		<table class="tbl">    
			 <tr>
			   <td>Email</td>
			   <td style="color: #fff"><input name="email" type="text" id = "email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input name="password" type="password" id = "password"></td>
			 </tr>
			 
			  <tr>
			  <td></td>
			   <td><input type="submit" id="loginsubmit" value="LogIn">
			   </td>
			 </tr>
       </table>
	   </form>
	   <p style="color:#fff">New User ? <a href="register.php" style="color:#fff">Signup</a></p>
		<span class="empty" style ="display:none;">Field Must Not be Empty !</span>
		<span class="error" style ="display:none">Email or Password not Matched !</span>
		<span class="disable" style ="display:none">User Disable !</span>
	</div>	
</div>

<?php include 'inc/footer.php'; ?>

<script type="text/javascript" src="css/particles.js"></script>
<script type="text/javascript" src="css/app.js"></script>
</body>