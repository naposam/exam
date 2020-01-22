<?php
include("configcsv.php");
$query= $db->query("SELECT tbl_user.name,exam_score.id, exam_score.userid, exam_score.score, exam_score.date_taken,tbl_class.class_name from tbl_user LEFT JOIN exam_score on tbl_user.userid=exam_score.userid left join tbl_class on tbl_user.username = tbl_class.id where tbl_user.userid=exam_score.userid ORDER BY tbl_user.name DESC");
if($query->num_rows >0){
    $delimiter= ",";
    $filename="students_".date('Y-m-d').".csv";

    $f = fopen('php://memory','w');

    $fields = array('Name','Score', 'Date','Time','Class','Remarks');
    fputcsv($f,$fields,$delimiter);

    while($row = $query->fetch_assoc()){
        $lineData = array($row['name'],$row['score'],date('Y-m-d',strtotime($row['date_taken'])),date('g:i A',strtotime($row['date_taken'])),$row['class_name']);
        fputcsv($f, $lineData, $delimiter);
    }
    fseek($f,0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');

    fpassthru($f);
}
exit;

?>