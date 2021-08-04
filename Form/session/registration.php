<?php

    include('conn.php');
    if(isset($_POST['btnSubmit']))
    {

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $arrHobby=$_POST['hobby'];
        $hobby=implode(',',$arrHobby);
        $city=$_POST['city'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $mob=$_POST['mobile'];
        $pass=$_POST['password'];
        $cpass=$_POST['cpass'];
        $validate=$_POST['val'];
        if($pass==$cpass)
        {
            $sql="INSERT INTO regi (fname,lname,gender,hobby,city,dob,mobile,email,password,validate) VALUES ('$fname','$lname','$gender','$hobby','$city','$dob','$mob','$email','$pass','$validate')";
            $run=mysqli_query($conn,$sql);            
        }
        else{
            echo "password not matched";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <th colspan="2"><h1>Registration Form</h1></th>
            </tr>
            <tr>
                <td>
                    <label for="fname">First Name</label>
                </td>
                <td>
                    <input type="text" name="fname" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="lname">Last Name</label>
                </td>
                <td>
                    <input type="text" name="lname" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Gender</label>
                </td>
                <td>
                    <input type="radio" name="gender" id="" value="male">Male &nbsp;&nbsp;
                    <input type="radio" name="gender" id="" value="female">Female
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hobby">Hobby</label>
                </td>
                <td>
                    <input type="checkbox" name="hobby[]" id="" value="reading">Reading &nbsp;&nbsp;
                    <input type="checkbox" name="hobby[]" id="" value="writing">Writing &nbsp;&nbsp;
                    <input type="checkbox" name="hobby[]" id="" value="playing">Playing
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
                    <input type="date" name="dob" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mobile">Mobile No</label>
                </td>
                <td>
                    <input type="tel" name="mobile" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>  
                </td>
                <td>
                    <input type="password" name="password" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="cpass">Confirm Password</label>
                </td>
                <td>
                    <input type="password" name="cpass" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Admin</label>
                </td>
                <td>
                    <input type="radio" name="val" id="" value="Yes">Yes &nbsp;&nbsp;
                    <input type="radio" name="val" id="" value="No">No
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="Submit" name="btnSubmit">
                </th>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="login.php"> Already Registered?</a>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>