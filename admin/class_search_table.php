	<?php include('../connnection.php'); ?>
	
	<form action="" method="post">
	<table cellpadding="2" cellspacing="2" border="0" class="table" id="example">
		<div class="pull-right">
	<a href="export.php"  class="btn btn-primary"><i class="fa fa-file-excel-o fa-1x"></i> Export</a>
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	 
	</div>
<br><br>
		<thead>
		<tr>
				<th >ID</th>
				<th >Name</th>
				<th>Class</th>
				<th>Scores</th>
				<th>Date Taken</th>
				<th>Time Taken</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query2 =mysqli_query($conn,"SELECT tbl_user.name,exam_score.id, exam_score.userid, exam_score.score, exam_score.date_taken,tbl_class.class_name from tbl_user LEFT JOIN exam_score on tbl_user.userid=exam_score.userid left join tbl_class on tbl_user.username = tbl_class.id where tbl_user.userid=exam_score.userid ORDER BY tbl_user.name DESC")or die(mysqli_error($conn));
		$i = 0;
		while($row= mysqli_fetch_array($query2)){
			$i++;
		        $id=$row['id'];
				$score=$row['score'];
				$time_taken=date('g:i A',strtotime($row['date_taken']));
				$date_taken=date('Y-m-d',strtotime($row['date_taken']));
		?>
		<tr>
		<td><?php echo $i; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['class_name']; ?></td>
			<td><?php echo $row['score']; ?></td>
			<td><?php echo $date_taken; ?></td>
			<td><?php echo $time_taken; ?></td>
		</tr>
	  <?php }?>  
	
		</tbody>
	</table>
	</form>