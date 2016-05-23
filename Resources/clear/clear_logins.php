<?php require_once('../../Connections/Greenhouse.php'); ?>
<?php
	$msg = "";
    // Create connection
    $con=mysqli_connect("localhost","root","root","greenhouse_web");
    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }    
    $sql = "TRUNCATE TABLE logins";
    mysqli_query($con, $sql) or die(mysqli_error());
	$msg = "Login Data Cleared<BR>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="../Images/favicon.ico"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="file:///Macintosh HD/Users/ibcs/web/Images/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="../../CSS/menuPage.css"/>
<link rel="stylesheet" type="text/css" href="../../CSS/signUp_forms.css"/>
<!--<link rel="stylesheet" type="text/css" href="../../CSS/indexHr.css" />-->
<!--<link rel="stylesheet" type="text/css" href="../CSS/nav.css"/>
<script type="text/javascript" src="../../Resources/ahahLib.js"></script>
<script type="text/javascript" src="../../Resources/jquery-2.0.2.js"></script>
<script type="text/javascript" src="../../JavaScript/indexMenu.js"></script>-->
<title>Data Cleared Verification</title>
</head>

<body>
<div id="cardContainer">
	<div id="cardTitle">
    	<h3>Message</h3>
    </div>
    <div id="cardBody">
		<div class="phMenu">
    			<p class="verificationMsg"><?php echo $msg; ?><a href="../../Departments/Tech/indexTech.php">Go Back to Menu Page</a></p>
      	</div>
    </div>
</div>
</body>
</html>