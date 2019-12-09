<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>
<style>
	.main{
		
		
	}
	.main h1{
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 30px;
		color:#5e0c17;
	}
	.adminpanel{
		width:500px;
		color:#897073;
		margin:30px auto 0;
		padding:50px;
		border:2px solid #ddd;
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 20px;
		}
		body{
	background-color: #7c0f14;
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
<body>
<div class="main">
	<div id="particles-js"></div>
<h1>Admin Panel</h1>
	<div class = "adminpanel">
		<h2>Welcome to Control Admin Panel</h2>
		<p>You can manage User and Online Exam from here.......</p>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
<script type="text/javascript" src="../css/particles.js"></script>
<script type="text/javascript" src="../css/app.js"></script>
</body>