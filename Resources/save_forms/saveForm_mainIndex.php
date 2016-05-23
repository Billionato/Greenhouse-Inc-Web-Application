<?php require_once('../../Connections/Greenhouse.php'); ?>
<?php
	if(isset($_GET) && $_GET['save'] == 'save') {
		$email = $_GET['emailAddress'];
		
		mysql_select_db($database_Greenhouse, $Greenhouse);
	
		$strSQL = "INSERT INTO subscriptions (EmailAddress) VALUES ('$email')";
//note that because $firstname and $lastname are variables that contain text, they must be inside single quotes: '" . $firstname . "', the double quotes stop and restart the INSERT string


	$result = mysql_query($strSQL, $Greenhouse);

	if ($result == 1) 
		$msg = "Thanks, you have been successfully subscribed!";
	else
		$msg = mysql_error();
	}
	
	echo $msg;
?>