<?php require_once('../../Connections/Greenhouse.php'); ?>
<?php
	if(isset($_GET) && $_GET['save'] == 'save') {
		$userType=$_GET['UserType'];
		$firstName=$_GET['FirstName'];
  		$lastName=$_GET['LastName'];
  		$email=$_GET['EmailAddress'];
  		$password=$_GET['Password'];
		
		mysql_select_db($database_Greenhouse, $Greenhouse);
	
		$strSQL = "INSERT INTO registered_users (UserType, FirstName, LastName, EmailAddress, Password) VALUES ('$userType', '$firstName', '$lastName', '$email', '$password')";
//note that because $firstname and $lastname are variables that contain text, they must be inside single quotes: '" . $firstname . "', the double quotes stop and restart the INSERT string


	$result = mysql_query($strSQL, $Greenhouse);

	if ($result == 1) 
		$msg = "Account Created!<br>Login Above";
	else
		$msg = mysql_error();
	}
	
	echo $msg;
?>