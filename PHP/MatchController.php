<?php
require_once('config.php');

$team1 = $_POST['team1'];
$team2 = $_POST['team2'];


$match = $dbh->prepare('INSERT INTO tbl_matches(team_id_a,team_id_b) VALUES (:teama,:teamb)');

$match->bindParam(':teama', $team1);
$match->bindParam(':teamb', $team2);

$match->execute();

header("location: admin-match.php?message=\"Added $team1 and $team2\"");
$_SESSION['addedmatch'] = true;