<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	Session::init();
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	
	
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
	$db  = new Database();
	$fm  = new Format(); 
	$usr = new User();
	$exm = new Exam();
	$pro = new Process();

	
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

?>

<!doctype html>
<html>
<head>
	<title>Online Exam System</title>
	<link rel="shortcut icon" href="img/test.png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/main.css">
	<script type = "text/javascript" src="jvascrpt/jquery.js"></script>
   <script type = "text/javascript" src="jvascrpt/main.js"></script>
</head>
<body>
	<?php
		if(isset($_GET['action']) && $_GET['action'] == 'logout'){
			Session::destroy();
			header("Location:index.php");
			exit();
		}
	?>
	<style>
	
	.phpcoding{width:960px; margin: 0 auto;}
	</style>
	
<div class="phpcoding">
	<section class="headeroption"></section>
		<section class="maincontent">   
		<div class="menu">
		<ul>
		<?php
			$login = Session::get("login");
			if($login == true){
		?>
			<li><a href="profile.php" style="color:#fff">Profile</a></li>
			<li><a href="exam.php"  style="color:#fff">Exam</a></li>
			<li><a href="ViewTest.php" style="color:#fff">Test History</a></li>
			<li><a href="?action=logout" style="color:#fff">Logout</a></li>
			<?php } else { ?>
			<li><a href="index.php" style="color:#fff">Login</a></li>
			<li><a href="register.php" style="color:#fff">Register</a></li>
			<li style="float: right"><a href="help.php" style="color:#fff">Help</a></li>
			<?php } ?>
		</ul> 
		<?php
			$login = Session::get("login");
			if($login == true){
		?>
		<span style ="float:right;color:#fdfafb"; font-family : "Times New Roman", Georgia, Serif;>
		Welcome<strong> <?php echo $_SESSION['SESS_FIRST_NAME']; ?> </strong> to this Exam....
		</span>
		<?php } ?>
		</div>
	