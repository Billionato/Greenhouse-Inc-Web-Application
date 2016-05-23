<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../../login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php require_once('../../Connections/Greenhouse.php'); ?>
<?php
	$msg = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="Images/favicon.ico"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../../Images/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="../../CSS/menuPage.css"/>
<link rel="stylesheet" type="text/css" href="../../CSS/signUp_forms.css"/>
<!--<link rel="stylesheet" type="text/css" href="../../CSS/indexHr.css" />-->
<link rel="stylesheet" type="text/css" href="../../CSS/nav.css"/>
<script type="text/javascript" src="../../Resources/ahahLib.js"></script>
<script type="text/javascript" src="../../Resources/jquery-2.0.2.js"></script>
<script type="text/javascript" src="../../JavaScript/indexMenu.js"></script>
<title>Tech Home</title>
</head>

<body>
<div id="header">
	<div id="nav">
    	<a href="indexTech.php" class="linkHeader">Menu Page</a>
	  	<a href="<?php echo $logoutAction ?>" id="linkLogout" class="linkHeader">Logout</a>
    </div>
</div>
<div id="cardContainer">
	<div id="cardTitle">
    	<h3>Menu Page</h3>
    </div>
    <div id="cardBody">
    	<div id="nav_cardBody">
    		<div id="optMenuBack">Back</div>
        </div>
    	<div class="phMenu">
    	<a href="javascript:void();"><input id="optNextPage" type="button" class="optButton" value="Modify Data"></a>
        <!--<a href="transaction.php"><input type="button" class="optButton" value="View Transactions"></a>-->
        </div>
        <div class="phForm">
        	<a href="../../Resources/clear/clear_transactions.php"><input type="button" class="optButton" value="Clear Transaction Data"></a>
            <a href="../../Resources/clear/clear_logins.php"><input type="button" class="optButton" value="Clear Login Data"></a>
        </div>
    </div>
</div>
</body>
</html>