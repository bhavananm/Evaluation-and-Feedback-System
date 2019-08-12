<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="userdb";

 

$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



if(isset($_POST['submit'])){
$id=$_POST['id'];
$question=$_POST['Question'];
$opt1=$_POST['opt1'];
$opt2=$_POST['opt2'];
$opt3=$_POST['opt3'];
$opt4=$_POST['opt4'];
$ans=$_POST['ans'];
$level=$_POST['level'];
$query= "INSERT INTO `java`(`id4`, `qsn`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `level`) VALUES ('$id','$question','$opt1','$opt2','$opt3','$opt4','$ans','$level')";
$query1 = "UPDATE qno SET count = count+1 where level = '$level'";
$conn->exec($query);
$conn->exec($query1);
}
?>
<html>
<head>
<meta charset="utf-8">


<title>Quiz</title>
</head>
 
<body>
     <center>
     <table border="1" cellspacing="0"  width="1350" cellpadding="5">
     <tr align="center">
          <td colspan="3">   <p>WELCOME</p>
                   <img src="logo1.jpg" style="width:150px;height=250px;" align="center" hspace="5" vspace="5""/></td>
            
          </tr>
            
              <tr align="center" valign="top">
  
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


</style>
<td colspan="3" height="435">
<div class="topnav">
  <a class="active" href="awel.html">Home</a>
  <a href="default.html">Register</a>
  <a href="#about">About</a>
</div><br>
<form action="" method="post">

<img src="addq.jpg" style="width:350px;height=400px;" align="left" hspace="2" vspace="2">
<b> <font face="ink free" size="3" color="black">
id: <input type="text" placeholder="Enter qid" name="id" ><br><br>
Question: <input type="text" placeholder="Enter Question" name="Question" ><br><br>
Option 1: <input type="text" placeholder="Enter the option1" name="opt1" ><br><br>
Option 2: <input type="text" placeholder="Enter the option2" name="opt2" ><br><br>
Option 3: <input type="text" placeholder="Enter the option3" name="opt3" ><br><br>
Option 4: <input type="text" placeholder="Enter the option4" name="opt4" ><br><br>
Answer:   <input type="text" placeholder="Answer" name="ans" ><br><br>
Level:    <input type="text" placeholder="easy/moderate/hard" name="level" ><br><br>

<input type="submit" name="submit" placeholder="submit"><br>
<a href="awel.html"><b><font face="ink free" size="3" color="purple">Back</a></font>
</form>
</body>
</html>