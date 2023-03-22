<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	include'connection.php';
	
	$username = $_SESSION["username"];
?>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 2px 0;
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
body {
  width: 100%;
  height: 100%;
  margin: auto;
  text-align-last: center;
}

#inp {
  text-align-last: center;
  margin: auto;
  display:block; 
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Claim </title>
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
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="index.php">DTA Life Insurance</a>
            </div>

            <div class="header-right">
			
                 <a href="<?php echo "logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                
								  <?php
									
										echo "welcome, ".$_SESSION["username"];
									
								?>
								
                            <br />
                              
                            </div>
                        </div>

                    </li>    
                     
                </ul>

            </div>
		

        </nav>
		 
		  
	
   
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Claim Form</h1>
                    
                
                <!-- /. ROW  -->
		<?php

	
		
		$client_id = $_SESSION["username"];
	
	            //   PRINTS CLIENT's info
	$sql = "SELECT * from client where client_id='$client_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	   
	while($row = $result->fetch_assoc()) {
	$client_id = $row["client_id"];
	$client_name =$row["name"]; }
?> 
	
<form action="insertClaim.php" method="post" enctype="multipart/form-data" align="center">
Client ID:       <input type="text" name="client_id1" value="<?php echo"$client_id";?>" ><br>
Name:            <input type="text" name="name1" value="<?php echo"$client_name";?>" ><br>
Insert death certificate:	     <input class="img" type="file" name="title"/  align="center" required> </br>


<input type="submit">
</form>
  </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
</body>
</html>
