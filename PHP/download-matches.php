<?php

require_once('config.php');

$statement = $dbh->prepare("SELECT * FROM tbl_matches");
 
$statement->execute();
 
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 
$columnNames = array();
if(!empty($rows)){

    $firstRow = $rows[0];
    foreach($firstRow as $colName => $val){
        $columnNames[] = $colName;
    }
}
 
$fileName = 'matches.csv';
 
header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="' . $fileName . '"');
 
$fp = fopen('php://output', 'w');
 
fputcsv($fp, $columnNames);
 
foreach ($rows as $row) {
    fputcsv($fp, $row);
}
 
fclose($fp);


?>