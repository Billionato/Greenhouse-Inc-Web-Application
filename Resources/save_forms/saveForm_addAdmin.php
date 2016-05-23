<?php require_once('../../Connections/Greenhouse.php'); ?>
<?php
	if(isset($_GET) && $_GET['save'] == 'save') {
		$department=$_GET['Department'];
		$firstName=$_GET['FirstName'];
  		$lastName=$_GET['LastName'];
		$username = $_GET['Username'];
  		$password=$_GET['Password'];
		
		mysql_select_db($database_Greenhouse, $Greenhouse);
	
		$strSQL = "INSERT INTO admin (Department, FirstName, LastName, Username, Password) VALUES ('$department', '$firstName', '$lastName', '$username', '$password')";
//note that because $firstname and $lastname are variables that contain text, they must be inside single quotes: '" . $firstname . "', the double quotes stop and restart the INSERT string


	$result = mysql_query($strSQL, $Greenhouse);

	if ($result == 1) 
		$msg = "Admin Added!";
	else
		$msg = mysql_error();
	}
	
	echo $msg;
?>