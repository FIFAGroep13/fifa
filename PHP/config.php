<?php
$userRow['user_pass'] = "$2y$10BBCpJxgPa8K.iw9ZporxzuW2Lt478RPUV/JFvKRHKzJhIwGhd1tpa";
$servername = "localhost";
$username = "damienvg99_nl_fifa";
$password = "BvBXYq4q8bpZ";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=damienvg99_nl_fifa", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
