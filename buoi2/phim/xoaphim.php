<?php
include("connect.php");
$id = $_GET['id']; 
$sql = "DELETE FROM phim WHERE id = $id";
mysqli_query($conn, $sql);
header("Location: tong.php?page_layout=phim");
?>