<?php
// Connect to the database using MySQLi and store the connection in the variable $conn
// Database server details: localhost (server is running on the same machine), 
// database username: root, password: empty (no password), database name: stud
$conn = mysqli_connect("localhost", "root", "", "srms") or die('connection failed');
?>