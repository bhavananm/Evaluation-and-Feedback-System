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
echo "<tr><th>FID</th><th>RESULT</th><th>CATEGORY</th></tr>";
/*$sql = "SELECT `fid`,`result`,(CASE
 WHEN result BETWEEN 8 and 10 THEN 'excellent'
 WHEN result BETWEEN 5 and 8 THEN 'good'
 WHEN result BETWEEN 3 AND 4 THEN 'satisfactory'
 ELSE 'poor'
 END) as 'category' from oresult"; */
$sql = "CALL getdata();";
$result = $conn-> query($sql);
	
	if($result-> num_rows > 0){ 
	while($row = $result-> fetch_assoc())
		
		{	
         /* $id=$row['fid'];
          $result=$row['result']; */

	 
		  echo "<tr><td>".$row["fid"]."</td><td>".$row["result"]."</td><td>".$row["category"]."</td></tr>";
		}
 
echo "</table>";
		
	} 
?>
</table>
</center><br><br>
</font>
<center>
<a href="awel.html"><b> <font face="ink free" size ="5" color="purple">Back</a><br></font>	</form>
</center>
</tr> 
</body>
</html>