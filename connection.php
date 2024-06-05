<?php
$servername = "lab12-todolist-server.mysql.database.azure.com";
$username = "nbtdouxbyu";
$password = "j3kSz6RY$O9tHCCw";
$db_name = "lab12-todolist-database";

$conn = new mysqli($servername, $username, $password, $db_name, 3306);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
