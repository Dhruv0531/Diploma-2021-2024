<?php
// Connect to the database using MySQLi and store the connection in the variable $conn
// Database server details: localhost (server is running on the same machine), 
// database username: root, password: empty (no password), database name: e_shop
$conn = mysqli_connect("localhost", "root", "", "e_shop") or die('connection failed');
?>
