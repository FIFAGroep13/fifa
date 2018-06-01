<?php
require_once('config.php');
	$match = $dbh->prepare('SELECT id FROM tbl_matches');

	$match->execute();

	$test = $match->fetchAll(PDO::FETCH_ASSOC);

	$tes2 = $dbh->prepare('SELECT t1.name AS team_id_a, t2.name AS team_id_b FROM tbl_matches AS m LEFT JOIN tbl_teams t1 ON m.team_id_a = t1.id LEFT JOIN tbl_teams t2 ON m.team_id_b = t2.id');
	
	$tes2->execute();

	$test2 = $tes2->fetchAll(PDO::FETCH_ASSOC);

	$result = array_merge($test, $test2);

  var_dump($result);
	?>