<?php
include 'conn.php';
include 'check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <table border="1" style="padding: 1px;margin:auto;width:100%;text-align:center"  align="center">
        <tr>
            <th colspan="10">View Data</th>
        </tr>
        <tr>
            <td>id</td>
            <td>fname</td>
            <td>lname</td>
            <td>gender</td>
            <td>hobby</td>
            <td>city</td>
            <td>dob</td>
            <td>mobile no</td>
            <td>email</td>
            <td colspan="2">Action</td>
            
        </tr>
        <?php
            $count=1;
            $sql="SELECT * FROM regi";
            $run=mysqli_query($conn,$sql);
            while($res=mysqli_fetch_assoc($run))
            {
        ?>
        <tr>
            <td><?php echo $count;$count++?></td>
            <td><?php echo $res['fname']; ?></td>
            <td><?php echo $res['lname']; ?></td>
            <td><?php echo $res['gender']; ?></td>
            <td><?php echo $res['hobby']; ?></td>
            <td><?php echo $res['city']; ?></td>
            <td><?php echo $res['dob']; ?></td>
            <td><?php echo $res['mobile']; ?></td>
            <td><?php echo $res['email']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $res['id']?>"><button type="button">Edit</button></a>
                <a href="delete.php?id=<?php echo $res['id']?>"><button type="button">Delete</button></a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    <a href="logout.php"><button type="button">Logout</button></a>
</body>
</html>