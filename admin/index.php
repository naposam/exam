<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
include('../connect.php');

	if(isset($_POST['save'])){
      $class_name=strtoupper($_POST['class_name']);

      $check="SELECT * FROM tbl_class WHERE class_name='$class_name' limit 1";
      $result = $db->prepare($check); 
     $result->execute(); 
     $number_of_rows = $result->fetchColumn();
     if($number_of_rows >0){
     echo "<span style='color:red; text-transform:uppercase'>Class Already Added</span>";
     }else{
     	  $sql = "INSERT INTO tbl_class (class_name) VALUES (:a)";
         $q = $db->prepare($sql);
         $q->execute(array(':a'=>$class_name));
         echo "<span style='color:#33FFE8;text-transform:uppercase '>Class added successfully</span>";
     }
    
	}


?>
<style>
	.main{
		
		
	}
	.main h1{
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 30px;
		color:#5e0c17;
		text-transform: uppercase;
		text-shadow: 2px 4px 2px 5px black;
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
<h1>Add Class</h1>
	<div class = "adminpanel">
		<form method="post" autocomplete="off">
			<label>Class Name</label><br>
			<input type="text" name="class_name" placeholder="ENTER CLASS NAME" style="border: 1px solid #5e0c17" autofocus="true">
			<button type="submit" name="save" style="width: 100px; height: 28px; border-radius: 2px; cursor: pointer;">SAVE</button>
		</form>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
<script type="text/javascript" src="../css/particles.js"></script>
<script type="text/javascript" src="../css/app.js"></script>
</body>