<?php
require_once('config.php');

$score1 = $_POST['score1'];
$score2 = $_POST['score2'];
$id = $_POST['id'];

$results = $dbh->prepare('UPDATE tbl_matches SET score_team_a = :score1, score_team_b = :score2 WHERE id = :id');

$results->bindParam(':score1', $score1);
$results->bindParam(':score2', $score2);
$results->bindParam(':id', $id);

$results->execute();

header("location: admin-results.php?message=\"Added $score1 and $score2 to match with ID $id\"");
$_SESSION['addedresult'] = true;