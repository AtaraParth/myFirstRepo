<?php
include 'check.php';
    include('conn.php');
    if(isset($_POST['btnSubmit']))
    {
        $id=$_GET['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $hobby=$_POST['hobby'];
        $city=$_POST['city'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $mob=$_POST['mobile'];
        
        $sql="UPDATE regi SET  fname='$fname',lname='$lname',gender='$gender',hobby='$hobby',city='$city',dob='$dob',mobile='$mob',email='$email' where id=$id";
        $run=mysqli_query($conn,$sql);
        header('Location:view.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Registration</title>
</head>
<body>
    <form action="" method="POST">
        <table border="1" align="center">
            <?php
                $id=$_GET['id'];
                $sql="SELECT * FROM regi WHERE id=$id";
                $run=mysqli_query($conn,$sql);
                while($r=mysqli_fetch_array($run))
                {
                    $var = explode(",",$r['hobby']);
            ?>
            <tr>
                <th colspan="2"><h1>Update Registration Form</h1></th>
            </tr>
            <tr>
                <td>
                    <label for="fname">First Name</label>
                </td>
                <td>
                    <input type="text" name="fname" id="" value=<?php echo $r['fname']; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="lname">Last Name</label>
                </td>
                <td>
                    <input type="text" name="lname" id="" value=<?php echo $r['fname']; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Gender</label>
                </td>
                <td>
                    <input type="radio" name="gender" id="" value="male" <?php if($r['gender']=="male"){ echo "checked";}?>>Male &nbsp;&nbsp;
                    <input type="radio" name="gender" id="" value="female" <?php if($r['gender']=="female"){ echo "checked";}?>>Female
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hobby">Hobby</label>
                </td>
                <td>
                    <input type="checkbox" name="hobby[]" id="" value="reading" <?php if(in_array("reading",$var)) echo 'checked="checked"'; ?>>Reading &nbsp;&nbsp;
                    <input type="checkbox" name="hobby[]" id="" value="writing" <?php if(in_array("writing",$var)) echo 'checked="checked"'; ?>>Writing &nbsp;&nbsp;
                    <input type="checkbox" name="hobby[]" id="" value="playing" <?php if(in_array("playing",$var)) echo 'checked="checked"'; ?>>Playing
                </td>
            </tr>
            <tr>
                <td>
                    <label for="city">City</label>
                </td>
                <td>
                    <select name="city" id="">
                        <option value="surat">Surat</option>
                        <option value="bhuj">Bhuj</option>
                        <option value="vapi">Vapi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date Of Birth</label>
                </td>
                <td>
                    <input type="date" name="dob" id="" value=<?php echo $r['dob']; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mobile">Mobile No</label>
                </td>
                <td>
                    <input type="tel" name="mobile" id="" value=<?php echo $r['mobile']; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" id="" value=<?php echo $r['email']; ?>>
                </td>
            </tr>
           
            <tr>
                <th colspan="2">
                    <input type="submit" value="Submit" name="btnSubmit">
                </th>
            </tr>
            <?php
                }
            ?>
        </table>

    </form>
</body>
</html>