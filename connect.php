<html>
<body>
<?php
 $username = "username";
 $password = " ";
 $conn = mysqli_Connect("localhost","root", "","userdb");

if($conn->connect_error){
	die('connection failed ');
} 
 
$userid = $_POST['userid'];
$password = $_POST['password'];
$sql = "SELECT userid,sem FROM login WHERE userid = '$userid' and password = '$password'";
/*$sql="SELECT userid FROM login";*/

$result= mysqli_query($conn,$sql);

if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		/*$sem=$row['sem'];
		$cookie_name="c";
			$cookie_vlaue=$sem; */
		if($userid === $row['userid']) {
			
		 /*  setcookie($cookie_name,$cookie_value,$time() + (86400 * 30),"/"); */
			
			include("wel.html");
    
} } }else {
   	include("error.php");
}
    
	
?>

</body>
</html>
