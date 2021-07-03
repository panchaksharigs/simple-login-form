<?php
error_reporting(0);
require_once('conn.php');
$conn=mysqli_connect("localhost","root","","register");

$sql="SELECT * from gsp";

$result=mysqli_query($conn,$sql);

$row=mysqli_num_rows($result);

    
if($row>0){
    while($row=mysqli_fetch_assoc($result)){
        echo   $row['id']  ."hii r u  "  .  $row[ 'username'];
        echo"<br>";
    }
}


?>