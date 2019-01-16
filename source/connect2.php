<?php
/*$servername = "localhost";*/
$servername = "gevo-websrv.gevo.cz";
$username = "c1mathPuzzle";
$password = "tWWWa2019";
$dbname="c1mathpuzzle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


