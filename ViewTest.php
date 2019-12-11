<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	$userid = $_SESSION['SESS_MEMBER_ID'];
?>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
  
    <style type="text/css">
	.segment {
	font-family: "Times New Roman", Georgia, Serif;
  border: 1px solid #d3d3d3;
  border-radius: 4px;
  float: left;
  min-height: 245px;
  padding: 20px;
  width: 95%;
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
<body>
	<div id="particles-js"></div>
<div class="main">

<h1 style="color:#7c0f14">Previous Test Result</h1>
	<div class="segment" >
	<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<head>
			<tr style="color:#fff">
				<th>ID</th>
				<th>Scores</th>
				<th>Date Taken</th>
				<th>Time Taken</th>
			</tr>
		</head>
		<tbody>
			<?php
			
				include('connect.php');
$result = $db->prepare("SELECT *,sum(score) as marks from exam_score where userid='$userid' ORDER BY date_taken DESC");
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
			<td><?php echo $row['score']; ?></td>
			<td><?php echo $date_taken; ?></td>
			<td><?php echo $time_taken; ?></td> 

		        </tr>
		        <th>
       	<tr>
       	<td style="color:#fff"><span style="font-size: 25px; font-weight: bold;">Total Marks <?php echo $row['marks']?></span></td>
       
       </tr>
       </th>
			<?php
				}
			?>
       
     

		</tbody>
	</table>
	
	</div>
	
  </div>
<?php include 'inc/footer.php'; ?>
<script type="text/javascript" src="css/particles.js"></script>
<script type="text/javascript" src="css/app.js"></script>
</body>