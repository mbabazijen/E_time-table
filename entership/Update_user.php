<?php
include 'db.php';
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $insert = $connect->query("INSERT INTO `users` VALUES ('','$name','$number','$email')");
    if ($insert) {
        header('location:courses.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="nav"><br>
        <a href="class.php">Class</a>
        <a href="courses.php">Courses</a>
        <a href="period.php">Period</a>
        <a href="user.php">Users</a>
    </div>
    <div class="divu">
        <fieldset>
            <legend>LOG IN HERE</legend>
            <form action="" method="post">
                <?php
                $id = $_GET['id'];
                $sel = "";
                ?>
                <br><br><br>
                <label for="">Name</label>
                <input type="text" name="name">
                <label for="">Phone</label>
                <input type="text" name="number">
                <label for="">Email</label>
                <input type="text" name="email">
                <input type="submit" value="save" name="save">


            </form>
        </fieldset>
    </div>

</body>

</html>