<?php
include 'db.php';
if (isset($_POST['save'])) {
    $date = $_POST['date'];
    $number = $_POST['start'];
    $email = $_POST['end'];
    $insert = $connect->query("INSERT INTO `period` VALUES ('',' $date',' $number',' $email')");
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
                <label for="">Date</label>
                <input type="text" name="date">
                <label for="">Time To Start</label>
                <input type="text" name="start">
                <label for="">Time To End</label>
                <input type="text" name="end">
                <input type="submit" value="save" name="save">


            </form>
        </fieldset>
        <table>
            <tr>
                <th>Id</th>
                <th>date</th>
                <th>start</th>
                <th>end</th>
                <th>Delete/Update</th>
            </tr>
            <?php
            $insert = $connect->query("SELECT * FROM `period` ");
            while ($rows = mysqli_fetch_array($insert)) { ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                    <td><?php echo $rows['start']; ?></td>
                    <td><?php echo $rows['end']; ?></td>
                    <td><a href="delete_period.php?id=<?php echo $rows['id'] ?>">del</a></td>
                    <td><a href="update_period.php?id=<?php echo $rows['id'] ?>">Update</a></td>
                </tr>


            <?Php
            }
            ?>
        </table>
    </div>

</body>

</html>