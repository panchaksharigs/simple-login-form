<?php
session_start();
require_once('conn.php');
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM gsp  ";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);
    
      if($total>0){
        
        header("location:simple.php");
      } else{
        echo " login fail";
      }        
}
?>