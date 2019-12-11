<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">

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
</head>
<body style="background-color:#7c0f14 ">
	<div class="main">
	<div id="particles-js"></div>
<h1>Student Result Details</h1>
	<div class = "adminpanel">
	<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<head>
			<tr style="color:#000">
				<th>ID</th>
				<th>Name</th>
				<th>Scores</th>
				<th>Date Taken</th>
				<th>Time Taken</th>
			</tr>
		</head>
		<tbody>
			<?php
			
				include('../connect.php');
$result = $db->prepare("SELECT tbl_user.name,exam_score.id, exam_score.userid, exam_score.score, exam_score.date_taken from tbl_user LEFT JOIN exam_score on tbl_user.userid=exam_score.userid where tbl_user.userid=exam_score.userid ORDER BY tbl_user.name DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				$id=$row['id'];
				$score=$row['score'];
				$time_taken=date('g:i A',strtotime($row['date_taken']));
				$date_taken=date('Y-m-d',strtotime($row['date_taken']));
				
				if($id) {
					echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(255, 95, 66);">';
				}
				else {
				echo '<tr class="record">';
				}

			?>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['score']; ?></td>
			<td><?php echo $date_taken; ?></td>
			<td><?php echo $time_taken; ?></td>
		        </tr>
			<?php
				}
			?>                       
		</tbody>
	</table>
		
	</div>
</div>
<?php include 'inc/footer.php'; ?>
<script type="text/javascript" src="../css/particles.js"></script>
<script type="text/javascript" src="../css/app.js"></script>
</body>