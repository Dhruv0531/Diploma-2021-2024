<?php
include("process\connection.php");

$id = $_GET['id'];


$querry = "Delete from order_info where id='$id'";
$result = mysqli_query($conn, $querry);

header("Location: ./view_orders.php");
?>