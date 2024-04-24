<?php
 include'db.php';
$id=$_GET['id'];

$connect->query("DELETE FROM `period` WHERE id='$id'");
header('location:period.php');
?>