<html>
<body>
     <center>
     <table border="1" cellspacing="0"  width="1350" cellpadding="10">
     <tr align="center">
          <td colspan="3">  
                   <img src="logo1.jpg" style="width:150px;height=250px;" align="center" hspace="5" vspace="5"/></td>
            
          </tr>
           
            <tr align="center" valign="top">
			 <td colspan="3" height="500" >
			 <center>
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
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}

.button3:hover {
    background-color: #f4e542;
    color: Black;
	}

 </style>

<div class="topnav">
  <a class="active" href="#home">Home</a>
   <a href="login.html">Logout</a>

  </div>
  <img src="thankyou.png" style="width:325px;height=300px;" align="left" hspace="35" vspace="5">
<b><font face="ink free" size="6" color="blue">
<?php
$conn =  mysqli_Connect('localhost', 'root', '', 'userdb');
    # check connection
    if ($conn->connect_errno) {
        echo "<p>MySQL error no {$conn->connect_errno} : {$conn->connect_error}</p>";
        exit();
    }
	echo"FINISHED!!";?><br><br></font>
	<?php
	$sql = mysqli_query($conn,"SELECT avg(result) as result FROM dsr1 ");
	/*$result = mysqli_fetch_assoc($sql);*/
	
	while($row = mysqli_fetch_assoc($sql))
	{
		/*$result=$_POST['result'];
		 print_r($row)	 ;
	 echo $row['result'];*/
	
    
	$sql1 = mysqli_query($conn,"INSERT INTO oresult values('fid01','$row[result]')");
	$q = mysqli_query($conn," DELETE FROM `dsr1`  ");
	 if(!$q)
	 {
		 echo"error";
	 }
	}
  	
	?>
	<form>
	<a href="faculty.php"><b> <font face="ink free" size ="3" color="purple">Back</a><br></font>	</form>
	</body>
	</html>