<?php

$servername = "localhost";
$username = "damienvg99_nl_fifa";
$password = "BvBXYq4q8bpZ";

try {
    $conn = new PDO("mysql:host=$servername;dbname=damienvg99_nl_fifa", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
