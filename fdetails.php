<html>
<head>
<title>Home page</title>
</head>
<body>
     <center>
     <table border="1" cellspacing="0" width="1350" cellpadding="10">
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
	font-weight:bold;
}
	table {
	border-collapse: collapse;
	width: 100%;
	color: 	#000080;
	font-family -family: monospace;
	font-size: 25px;
	text-align: center;
}
th{
	background-color: #000080;
	color: white;
}
tr:nth-child(even) {background-color:#f2f2f2}
}
</style>
<td colspan="3" height="500">
<div class="topnav">
  <a class="active" href="awel.html">Home</a>
 
  <a href="login.html">Logout</a>
</div><br>
<?php

    $conn =  mysqli_Connect('localhost', 'root', '', 'userdb');
    # check connection
    if ($conn->connect_errno) {
        echo "<p>MySQL error no {$conn->connect_errno} : {$conn->connect_error}</p>";
        exit();
    }?>
<center>
<b><font face="ink free" size ="15" color="black"></b>

	<?php
		echo "<table>";
echo "<tr><th>FID</th><th>NAME</th><th>SUBJECT></th><th>ADDRESS</th><th>PHONE</th></tr>";
	$sql = "SELECT * FROM `faculty`";
	
$result = $conn-> query($sql);
if($result->num_rows > 0){
while($row = $result-> fetch_assoc())
		
		{	
         /* $id=$row['fid'];
          $name=$row['fname'];
          $subject=$row['subject'];
		$faddress=$row['faddress'];
		  $fphone=$row['fphone'];*/
		   echo "<tr><td>".$row["fid"]."</td><td>".$row["fname"]."</td><td>".$row["subject"]."</td><td>".$row["faddress"]."</td><td>".$row["fphone"]."</td></tr>";
		   
		}
}
echo "</table>";
?>

<!--
<b>
<tr align="center">
<b><td><?php /* echo"$id"?></td>
<b><td><?php echo"$name"?></td>
<b><td><?php echo "$subject"?></td>
<b><td><?php echo "$faddress"?></td>
<b><td><?php echo "$fphone"*/?></td> 
</tr> -->
<?php
		/*}
$sql = mysqli_query($conn,"SELECT * FROM `faculty` where fid='fid02'");
	


while($row = mysqli_fetch_assoc($sql))
		
		{	
          $id=$row['fid'];
          $name=$row['fname'];
          $subject=$row['subject'];
		  $faddress=$row['faddress'];
		  $fphone=$row['fphone'];
		  */
		
?>


<!--
<tr align="center">
<b><td><?php/* echo"$id"*/?></td>
<b><td><?/*php echo"$name"*/?></td>
<b><td><?php/* echo "$subject"*/?></td>
<b><td><?php /*echo "$faddress"*/?></td>
<b><td><?php/* echo "$fphone"*/?> </td>
</tr> -->
<?php
		/*}
$sql = mysqli_query($conn,"SELECT * FROM `faculty` where fid='fid03'");
	


while($row = mysqli_fetch_assoc($sql))
		
		{	
          $id=$row['fid'];
          $name=$row['fname'];
          $subject=$row['subject'];
		  $faddress=$row['faddress'];
		  $fphone=$row['fphone'];
		*/
?>
<!--
<tr align="center">
<b><td><?php/* echo"$id"*/?></td>
<b><td><?php/* echo"$name"*/?></td>
<b><td><?php/* echo "$subject"*/?></td>
<b><td><?php/* echo "$faddress"*/?></td>
<b><td><?php/* echo "$fphone"*/?></td>
</tr>-->

</table>
</center><br><br>
</font>
<center>
<a href="awel.html"><b> <font face="ink free" size ="5" color="purple">Back</a><br></font>	</form>
</center>
</tr> 
</body>
</html>