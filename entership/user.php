<?php
include 'db.php';
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $insert = $connect->query("INSERT INTO `users` VALUES ('','$name','$number','$email')");
    if ($insert) {
  
        
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
        <table border="2px" cellpadding="10px" cellspace="0px">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Delete/Update</th>
            </tr>
            <?php
            $insert = $connect->query("SELECT * FROM `users` ");
            while ($rows = mysqli_fetch_array($insert)) { ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['phone']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><a href="delete_user.php?id=<?php echo $rows['id'] ?>">del</a></td>
                    <td><a href="update_user.php?id=<?php echo $rows['id'] ?>">Update</a></td>
                </tr>


            <?Php
            }
            ?>
        </table>
    </div>

</body>

</html>