<?php require_once('../../Connections/Greenhouse.php'); ?>
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
<?php
if (isset($_GET['sort']))
	$sort = $_GET['sort'];
else
	$sort = "LoginDate";
mysql_select_db($database_Greenhouse, $Greenhouse);
$query_rs_logins = "SELECT * FROM `logins` ORDER BY $sort";
$rs_logins = mysql_query($query_rs_logins, $Greenhouse) or die(mysql_error());
$row_rs_logins = mysql_fetch_assoc($rs_logins);
$totalRows_rs_logins = mysql_num_rows($rs_logins);
?>
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="../../Images/favicon.ico"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../CSS/transaction.css"/>
<link rel="stylesheet" type="text/css" href="../../CSS/nav.css"/>

<title>Logins</title>
</head>

<body>
<div id="header">
	<div id="nav">
    	<a href="indexHr.php" class="linkHeader">Menu Page</a>
        <a href="admins.php" class="linkHeader">Edit Admins</a>
  	  <a href="<?php echo $logoutAction ?>" id="linkLogout" class="linkHeader">Logout</a>
    </div>
</div>
<table>
	<thead>
  		<tr>
   		<th><a href="logins.php?sort=AdminID">AdminID</a></th>
        <th><a href="logins.php?sort=Username">Username</a></th>
        <th><a href="logins.php?sort=Department">Department</a></th>
        <th><a href="logins.php?sort=Department">Login Date</a></th>
  </thead>
    
    <tbody>
    	<?php 
			$i = 0;
			do {
				if ($i % 2 == 0) $even = "class='even'"; else $even = "";
		?>
  		<tr <?php echo $even; ?>>
    	    <td><?php echo $row_rs_logins['AdminID']; ?></td>
      		<td><?php echo $row_rs_logins['Username']; ?></td>
      		<td><?php echo $row_rs_logins['Department']; ?></td>
          	<td><?php echo $row_rs_logins['LoginDate']; ?></td>
   	    </tr>
    	  <?php 
		  	$i = $i + 1;
		  	} while ($row_rs_logins = mysql_fetch_assoc($rs_logins)); ?>
    </tbody>
</table>
</body>
</html>
<?php
mysql_free_result($rs_logins);
?>