<?php
include 'check.php';
    include('conn.php');
    $id=$_GET['id'];
    $sql="DELETE FROM regi WHERE id=$id";
    $run=mysqli_query($conn,$sql);
    header('Location:view.php');
?>