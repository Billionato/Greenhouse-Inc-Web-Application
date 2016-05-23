<?php require_once('../../Connections/Greenhouse.php'); ?>
<?php
	if(isset($_GET) && $_GET['save'] == 'save') {
		$romano = $_GET['romano'];
		$corazon = $_GET['corazon'];
		$pepper = $_GET['pepper'];
		$chili = $_GET['chili'];
		$bag = $_GET['bag'];
		$total = $_GET['total'];
		
		mysql_select_db($database_Greenhouse, $Greenhouse);
	
		$strSQL = "INSERT INTO checkout (Romano,Corazon,Pepper,Chili,Bag,Total) VALUES ('$romano', '$corazon', '$pepper', '$chili','$bag', '$total')";
//note that because $firstname and $lastname are variables that contain text, they must be inside single quotes: '" . $firstname . "', the double quotes stop and restart the INSERT string


	$result = mysql_query($strSQL, $Greenhouse);

	if ($result == 1) 
		$msg = "Transaction Saved";
	else
		$msg = mysql_error();
	}
	
	echo $msg;
?>