<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/User.php');
	$usr = new User();
?>
<?php 
	if(isset($_GET['dis'])){
		$dblid = (int)$_GET['dis'];
		$dblUser = $usr->disableUser($dblid);
	} 
		if(isset($_GET['ena'])){
		$eblid = (int)$_GET['ena'];
		$eblUser = $usr->enableUser($eblid);
	}
	
	if(isset($_GET['del'])){
		$delid = (int)$_GET['del'];
		$delUser = $usr->deleteUser($delid);
	}
?>
<style>
	.main h1{
		
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 30px;
		color:#5e0c17;
	}
	body{
	background-color: #7c0f14;
}
</style>
<div class="main">
	<h1>Admin Panel - Manage User</h1>
	<?php 
		if(isset($dblUser)){
			echo $dblUser;
		}
		if(isset($eblUser)){
			echo $eblUser;
		}
			if(isset($delUser)){
			echo $delUser;
		}
	?>
	<style>
		.manageuser{
			font-family: "Times New Roman", Times, serif;
			font-size: 20px;
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
		<div class = "manageuser">
			<div id="particles-js"></div>
			<table class = "tblone">
			<tr>
				<th>Number</th>
				<th>Name</th>
				<th>Class</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
	<?php 
	$userData = $usr->getAllUser();
	
	if($userData){
		$i = 0;
		while($result = $userData->fetch_assoc()){
			$i++;
	?>
			<tr>
				<td>
				<?php 
				if($result['status'] == '1'){
					echo "<span class = 'error'>".$i."</span>";
				}else{
					echo $i; 
				}
				?>
				</td>
				<td>
				<?php 
				if($result['status'] == '1'){
					echo "<span class = 'error'>".$result['name']."</span>";
				}else{
					echo $result['name'];
				}
				?>
				</td>
				<td>
				<?php 
				if($result['status'] == '1'){
					echo "<span class = 'error'>".$result['class_name']."</span>";
				}else{
					echo $result['class_name'];
				}
				?>
				</td>
				<td>
				<?php 
				if($result['status'] == '1'){
					echo "<span class = 'error'>".$result['email']."</span>";
				}else{
					echo $result['email'];
				}
				?>
				</td>
				<td>
					<?php  if($result['status'] == '0'){ ?>
							
						<a onclick = "return confirm('Are you sure to Disable')" href = "?dis=<?php echo $result['userid']; ?>">Disable</a>
					<?php } else {?>
					
						<a onclick= "return confirm('Are you sure to Enable')" href = "?ena=<?php echo $result['userid']; ?>">Enable</a>
					<?php } ?>
					|<a onclick = "return confirm('Are you sure to Remove')" href = "?del=<?php echo $result['userid']; ?>">Remove</a>
				</td>
			</tr>
	<?php } } ?>
			</table>
		<div/>
</div>
<?php include 'inc/footer.php'; ?>
<script type="text/javascript" src="../css/particles.js"></script>
<script type="text/javascript" src="../css/app.js"></script>