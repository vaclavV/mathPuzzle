<?php
$servername = "77.48.83.51";
$username = "c1mathPuzzle";
$password = "tWWWa2019";
$dbname="c1mathpuzzle";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>