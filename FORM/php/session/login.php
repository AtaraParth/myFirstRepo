<?php
    session_start();
    include('conn.php');
    if(isset($_POST['btn']))
    {
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $sql="SELECT * FROM regi WHERE email='$email' and password='$pass' and validate='Yes' ";
        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_array($run))
            {
                $name=$row['fname'];
                $id=$row['id'];
                
            }
           
           
                
                $_SESSION['userid']=$id;
                $_SESSION['name']=$name;
                echo "<script>window.location='view.php';</script>";
              
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <table align="center" border="1">
            <tr>
                <th colspan="2"><h1>LogIn </h1></th>
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
                <td colspan="2">
                    <input type="submit" value="Submit" name="btn">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>