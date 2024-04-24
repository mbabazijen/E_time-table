<?php
include'db.php';
$id=$_GET['id'];
$delete="DELETE FROM `class` WHERE id='$id'";
header('location:class.php');
?>