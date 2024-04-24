<?php
include'db.php';
if (isset($_POST['save'])) {
    $name=$_POST['name'];
    $level = $_POST['level'];
    $insert="INSERT INTO `class`(`id`, `name`, `level`) VALUES ('','$name','$level')";
    $res = $connect->query($insert);
    
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
        <label for="">Class name</label>
        <input type="text" name="name" >
        <label for="">Class Level</label>
       <input type="text" name="level" >
      <input type="submit" value="save" name="save"> 
       
    
    </form>
        </fieldset>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Level</th>
                <th>Delete/Update</th>
            </tr>
            <?php
            $insert = $connect->query("SELECT * FROM `class` ");
            while ($rows = mysqli_fetch_array($insert)) { ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['level']; ?></td>
                    <td><a href="delete_class.php?id=<?php echo $rows['id'] ?>">del</a></td>
                    <td><a href="update_class.php?id=<?php echo $rows['id'] ?>">Update</a></td>
                </tr>


            <?Php
            }
            ?>
        </table>
  

    </div>

</body>
</html>