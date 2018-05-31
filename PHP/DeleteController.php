<?php
require_once('config.php');

$id = $_POST['id'];

$teams = $dbh->prepare('DELETE FROM tbl_players WHERE student_id=:id');

$teams->bindParam(':id', $id);

$teams->execute();

header("location: admin-teams.php?message=\"Deleted $id\"");
$_SESSION['deletedplayer'] = true;