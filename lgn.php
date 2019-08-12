<?php
   $username = "username";
 $password = " ";
 $conn = mysqli_Connect("localhost","root", "","userdb");

if($conn->connect_error){
	die('connection failed ');
} 
 
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $userid = mysqli_real_escape_string($conn,$_POST['userid']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT userid FROM login WHERE userid = '$userid' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("userid");
         $_SESSION['login_user'] = $userid;
         
         header("location: wel.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>