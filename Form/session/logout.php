
<?php 
session_start();
if(isset($_SESSION["userid"]))
{
    unset($_SESSION["userid"]);
    unset($_SESSION["name"]);
    echo "<script>window.location='login.php';</script>";
}

?>