
<!doctype html>
<?php


$conn =  mysqli_Connect('localhost', 'root', '', 'userdb');
    # check connection
    if ($conn->connect_errno) {
        echo "<p>MySQL error no {$conn->connect_errno} : {$conn->connect_error}</p>";
        exit();
    }
?>
<html>
<head>
<meta charset="utf-8">


<title>Quiz</title>
</head>
 
<body>
<center>
     <table border="1" cellspacing="0" width="1350" cellpadding="10">
     <tr align="center">
          <td colspan="3"></p><ailgn="right"></p> 
                   <img src="logo.jpg"/></td>
            
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

</style>

<td colspan="3" height="500">
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a class="active" href="default.html">Logout</a>
  </div>
<img src="comp.gif" style="width:400px;height=450px;" align="left" hspace="1" vspace="1">
<?php
$sql = mysqli_query($conn,"SELECT id2,qsn,opt1,opt2,opt3,opt4 FROM java where id2 = '2.1' and level='moderate'");
if($row = mysqli_fetch_assoc($sql))
{

$id=$row['id2'];
$question=$row['qsn'];
?>
<form action="result4.php?id=<?php echo($id);?>" method="post">
<?php
/*$ans=$row['ans']*/
$opt1= $row['opt1'];
$opt2= $row['opt2'];
$opt3= $row['opt3'];
$opt4= $row['opt4'];
?>
<center>
<b><font face="ink free" size="5" color="black">
<?php
/*$ans=$row['ans'];*/

echo" $id.$question";?> <br>
&nbsp;&nbsp;1.<?php echo"<input  type='radio' name='a' value='".$opt1."' required>".$opt1;?> <br>
&nbsp;&nbsp;2.<?php echo"<input type='radio' name='a' value='".$opt2."'>".$opt2;?> <br>
&nbsp;&nbsp;3.<?php echo"<input type='radio' name='a' value='".$opt3."'>".$opt3;?> <br>
&nbsp;&nbsp;4.<?php echo"<input type='radio' name='a' value='".$opt4."'>".$opt4;?> <br>
<br><input type="submit" name="submit" placeholder="submit">
</form>
<?php
$answer=['result'];
/*/select>-->*/
	 
}

?>

<!--<input type="submit" name="check" placeholder="Check Result" value="Check Result">-->
</center>
</body>
</html>