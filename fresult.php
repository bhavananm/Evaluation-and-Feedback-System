<?php


$conn =  mysqli_Connect('localhost', 'root', '', 'userdb');
    # check connection
    if ($conn->connect_errno) {
        echo "<p>MySQL error no {$conn->connect_errno} : {$conn->connect_error}</p>";
        exit();
    }
	?>
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">


<title>Feedback Result</title>
</head>
 
<body>
<center>
     <table border="1" cellspacing="0" width="1350" cellpadding="10" height="0">
     <tr align="center">
          <td colspan="3"></p><ailgn="right"></p> 
                   <img src="logo1.jpg" style="width:150px;height=250px;" align="center" hspace="5" vspace="5"/></td>
            
          </tr>
		  </center>
		  <tr align="center" valign="top">
            <style>
.topnav {
    background-color: #333;
    overflow: hidden;
}


.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}
/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

</style>
<td colspan="3" height="10">
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="quiz.html">Quiz</a>
  <a href="faculty.php">Faculty Feedback</a>
  <a href="login.html">Logout</a></td>
</div><br>
<center>	

<?php
echo "<table>";
echo "<td colspan='3' height='490'>";
echo "<tr><th>FID</th><th>RESULT</th></tr>";
$sql = "CALL getdata();";
$result = mysqli_query($conn,$sql);
while($row =mysqli_fetch_assoc($result)){
$fid    = $row['fid'];
$result = $row['result'];

echo "<tr><td style='width: 200px;'>".$fid."</td><td style='width: 600px;'>".$result."</td></tr>";

echo "</table>";
}?>
<!--/*$sql = mysqli_query($conn,"SELECT * FROM oresult");
$sql = mysqli_query($conn,"CALL getdata();");?>-->
<?php /*$result = mysqli_query($conn,$sql);
echo "

<tr>FID</tr>
<tr>Result</tr>
";

while($row = mysqli_fetch_assoc($sql))
{
$fid = $row['fid'];
$result = $row['result'];
echo "<tr>";
echo "<td>" . $row['fid'] . "</td>";
echo "<td>" . $row['result'] . "</td>";
echo "</tr>";*/
?>
<form action="fresult.php" method="post">
</form>
<?php /* }*/ ?>
</table>
</center>
</body>
</html>

	
		

