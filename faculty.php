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
{
tr:hover {background-color: #f5f5f5;}
th, td {
    border-bottom: 1px solid #ddd;
}
</style>
<td colspan="3" height="500">
<div class="topnav">
  <a class="active" href="wel.html">Home</a>
 
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
	<table border="1" cellspacing="0" width="1000" cellpadding="10">
<tr>
<b><td>FID</td>
<b><td>FNAME</td>
<b><td>SUBJECT</td>
	</tr>
	
	<!--$cookie_name = "c";
	$sem = $_COOKIE[$cookie_name];
	echo '$sem'; -->
	<?php
	$sql = mysqli_query($conn,"SELECT `fid`,`fname`,`subject` FROM `faculty` where fid='fid01'");
	while($row = mysqli_fetch_assoc($sql))
		
		{	
          $id=$row['fid'];
          $name=$row['fname'];
          $subject=$row['subject'];
		
?>


<b>
<tr align="center">
<b><td><?php echo"$id"?></td>
<b><td><a href="feedback.php"><?php echo"$name"?></td>
<b><td><?php echo "$subject"?></td>
</tr>
<?php
		}
$sql = mysqli_query($conn,"SELECT `fid`,`fname`,`subject` FROM `faculty` where fid='fid02'");
	


while($row = mysqli_fetch_assoc($sql))
		
		{	
          $id=$row['fid'];
          $name=$row['fname'];
          $subject=$row['subject'];
		
?>

<tr align="center">
<b><td><?php echo"$id"?></td>
<b><td><a href="feedback1.php"><?php echo"$name"?></td>
<b><td><?php echo "$subject"?></td>
</tr>
<?php
		}
$sql = mysqli_query($conn,"SELECT `fid`,`fname`,`subject` FROM `faculty` where fid='fid03'");
	


while($row = mysqli_fetch_assoc($sql))
		
		{	
          $id=$row['fid'];
          $name=$row['fname'];
          $subject=$row['subject'];
		  
?>

<tr align="center">
<b><td><?php echo"$id"?></td>
<b><td><a href="feedback2.php"><?php echo"$name"?></td>
<b><td><?php echo "$subject"?></td>
</tr>
	<?php
		}
$sql = mysqli_query($conn,"SELECT `fid`,`fname`,`subject` FROM `faculty` where fid='fid04'");
	


while($row = mysqli_fetch_assoc($sql))
		
		{	
          $id=$row['fid'];
          $name=$row['fname'];
          $subject=$row['subject'];
		  
?>

<tr align="center">
<b><td><?php echo"$id"?></td>
<b><td><a href="feedback3.php"><?php echo"$name"?></td>
<b><td><?php echo "$subject"?></td>
</tr>

	<?php
		}
$sql = mysqli_query($conn,"SELECT `fid`,`fname`,`subject` FROM `faculty` where fid='fid03'");
	


while($row = mysqli_fetch_assoc($sql))
		
		{	
          $id=$row['fid'];
          $name=$row['fname'];
          $subject=$row['subject'];
		  
?>

<tr align="center">
<b><td><?php echo"$id"?></td>
<b><td><a href="feedback4.php"><?php echo"$name"?></td>
<b><td><?php echo "$subject"?></td>
</tr>
<?php
	}
	?>
</table>
</center><br><br>
</font>


	<a href="wel.html"><b> <font face="ink free" size ="3" color="purple">Back</a><br></font>	</form>

</tr> 
</body>
</html>