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

$sql="SELECT userid FROM login WHERE userid = '$userid' and password = '$password'";

$result= mysqli_query($conn,$sql);

if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		if($userid === $row['userid'] ) {
			include("awel.html");
    
} } }else {
    
	include("error.php");
}
    
	
?>

</body>
</html>
