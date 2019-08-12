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
$query= "INSERT INTO `ds2`(`id2`, `qsn`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES ('$id','$question','$opt1','$opt2','$opt3','$opt4','$ans')";
$query1 = "UPDATE qno SET count = count+1 where level = '$level'";
$conn->exec($query);
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
                   <img src="logo.jpg"/></td>
            
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
  <a class="active" href="#home">Home</a>
  <a href="default.html">Register</a>
  <a href="#about">About</a>
</div><br>
<form action="" method="post">
id: <input type="text" placeholder="Enter qid" name="id" ><br><br>
Question: <input type="text" placeholder="Enter Question" name="Question" ><br><br>
Option 1: <input type="text" placeholder="Enter the option1" name="opt1" ><br><br>
Option 2: <input type="text" placeholder="Enter the option2" name="opt2" ><br><br>
Option 3: <input type="text" placeholder="Enter the option3" name="opt3" ><br><br>
Option 4: <input type="text" placeholder="Enter the option4" name="opt4" ><br><br>
Answer number:<input type="text" placeholder="Answer" name="ans" ><br><br>
<input type="submit" name="submit" placeholder="submit">
</form>
</body>
</html>