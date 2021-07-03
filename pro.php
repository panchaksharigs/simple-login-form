<?php
     session_start();
    require_once('conn.php');

   if(isset($_POST['register'])){
      
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password_1=mysqli_real_escape_string($conn,$_POST['password_1']);
    $password_2=mysqli_real_escape_string($conn,$_POST['password_2']);

    
   if(empty($username)|| empty($email) || empty($password_1) || empty($password_2))
   {
       echo "fill the blanks";
   }
   if($password_1!=$password_2){
       echo "pass do not match";
   }
   else{
       $pass=md5($password);
       $sql="INSERT INTO gsp (username,email,password) values('$username','$email','$pass')";
       $result=mysqli_query($conn,$sql);
       if($result){
          header("location:simple.php");
       }
       else{
           echo "check query";
       }
   }
   }
?>
