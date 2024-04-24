<?php
include'db.php';
$id=$_GET['id'];
$delete="DELETE FROM `courses` WHERE id='$id'";
header('location:course.php');
?>