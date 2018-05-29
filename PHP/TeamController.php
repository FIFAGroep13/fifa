<?php
require_once('config.php');

$team = $_POST['team'];
$name1 = $_POST['naam1'];
$id1 = $_POST['id1'];

$teams = $dbh->prepare('INSERT INTO tbl_players(student_id,full_name,team_id) VALUES (:id,:name,:team)');

$teams->bindParam(':name', $name1);
$teams->bindParam(':id', $id1);
$teams->bindParam(':team', $team);

$teams->execute();

header("location: admin-teams.php?message=\"Added $name1\"");