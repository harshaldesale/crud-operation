<?php
include 'connection.php';  
$id=$_GET['id'];
$q="delete from student where id=$id";
$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
header("location:index.php");
?>