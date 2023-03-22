<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Claim</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php
	session_start();
	include'connection.php';
	
	$username = $_SESSION["username"];
?>
<?php
   

	    $client_id = $_POST["client_id1"];
		
		$name = $_POST["name1"];
		
		$pname =rand(1000,1000)."-".$_FILES["title"]["name"];
		$tname=$_FILES["title"]["tmp_name"];
		$uploads_dir='images';
		move_uploaded_file($tname,$uploads_dir.'/'.$pname);
	$sql = "INSERT INTO claim "."VALUES('$client_id', '$name', '$pname','-')";
	
	if ($conn->query($sql) === true) {
			echo "Claim requested...We will get back to you...";  echo '</br>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;  echo '</br>';
		}
		
		
	
?>

   
    


</body>
</html>
