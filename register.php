<html>
<head>
    <title>Registration</title>
</head>
<body>  
<?php
    if(isset($_POST['userid'])){}
    $userid     = 'userid';
    $username   = $_POST['username'];
    $userid     = $_POST['userid'];
	$address    = $_POST['address'];
    $phone      = $_POST['phone'];
    $password   = $_POST['password'];
	/*$role       = $_POST['role'];*/
	$sem        = $_POST['sem'];
## connect mysqli server
    $mysqli =  mysqli_Connect('localhost', 'root', '', 'userdb');
    # check connection
    if ($mysqli->connect_errno) {
        echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
        exit();
    }
## query database
    # prepare data for insertion
	
    # check if name and email exist else insert
    $exists = 0;
    $result = $mysqli->query("SELECT username from user WHERE username = '{$username}' LIMIT 1");
    if ($result->num_rows == 1) {
        $exists = 1;
        $result = $mysqli->query("SELECT userid from user WHERE userid = '{$userid}' LIMIT 1");
        if ($result->num_rows == 1) $exists = 2;    
    } else {
        $result = $mysqli->query("SELECT userid from user WHERE userid = '{$userid}' LIMIT 1");
        if ($result->num_rows == 1) $exists = 3;
    }

    if ($exists == 1) echo "<p>name already exists!</p>";
    else if ($exists == 2) echo "<p>name and user id already exists!</p>";
    else if ($exists == 3) echo "<p>user id already exists!</p>";
    else {
        # insert data into mysql database
        $sql = "INSERT  INTO `user` (`userid`, `username`, `address`, `phone`, `password`,`sem`) 
                VALUES ('{$userid}', '{$username}', '{$address}', '{$phone}', '{$password}','{$sem}')";
				
       /* $query = "INSERT  INTO `login` (`userid`, `username`, `password`) 
                VALUES ('{$userid}', '{$username}', '{$password}')"; */
			/*$query = "CALL insertdata(' ".$_POST["userid"]."','".$_POST["username"]."','".$_POST["password"]."')";*/
        if ($mysqli->query($sql)/*&&$mysqli->query($query)*/) {
            //echo "New Record has id ".$mysqli->insert_id;
            echo "<p>Registred successfully!</p>";
			include("default.html");
        } else {
            echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
            exit();
        }
    }
	
?>      
