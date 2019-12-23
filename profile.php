<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	$userid = $_SESSION['SESS_MEMBER_ID'];
?>
<style>
	.profile {width:530px;margin: 0 auto;border:1px solid #ddd;padding:30px 50px 50px;}
	body{background-color: #7c0f14}
	#particles-js{
      	position: absolute;
        left: 0px;
         top: 0px;
        z-index: -1;
      	background-color: #7c0f14;
      	width: 100%;
      }

</style>
<body>
	<div id="particles-js"></div>
<div class="main">
<h1 style="color: #7c0f14">Your Profile</h1>
<div class="profile">
	<form action="" method="post">
	<?php
	$getData = $usr->getUserData($userid);
	if($getData){
		$result = $getData->fetch_assoc();
?>
		<table class="tbl">    
			 <tr>
			   <td style="color: #fff">Name</td>
			   <td><input name="name" type="text" value="<?php echo $result['name']; ?>"/></td>
			 </tr>
			   <tr>
			   <td style="color: #fff">Class</td>
			   <td><input name="username" type="text" value="<?php echo $result['class_name']; ?>"/></td>
			 </tr>
			 <tr>
			   <td style="color: #fff">Email</td>
			   <td><input name="email" type="text" value="<?php echo $result['email']; ?>"/></td>
			 </tr>
			  <tr>
			  <td></td>
			   <td><input type="submit" value="Update"> </td>
			 </tr>
       </table>
	<?php } ?>
	   </form>
	   </div>
</div>
<?php include 'inc/footer.php'; ?>
<script type="text/javascript" src="css/particles.js"></script>
<script type="text/javascript" src="css/app.js"></script>
</body>