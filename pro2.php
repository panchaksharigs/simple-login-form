<?php
session_start();
include('conn.php');
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM gsp WHERE username='$username' && password='$password'";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);
    
    echo $total;
    
}
?>