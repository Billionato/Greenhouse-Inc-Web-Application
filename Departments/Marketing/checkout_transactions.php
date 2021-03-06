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
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (isset($_GET['sort']))
	$sort = $_GET['sort'];
else
	$sort = "TransactionID";
mysql_select_db($database_Greenhouse, $Greenhouse);
$query_rs_transactions = "SELECT * FROM checkout ORDER BY $sort";
$rs_transactions = mysql_query($query_rs_transactions, $Greenhouse) or die(mysql_error());
$row_rs_transactions = mysql_fetch_assoc($rs_transactions);
$totalRows_rs_transactions = mysql_num_rows($rs_transactions);
?>
<?php
if (isset($_GET['delete'])) {
	if (isset($_GET['ID'])) {
		$ID = $_GET['ID'];
		mysql_select_db($database_Greenhouse, $Greenhouse);
		$strSQL = "DELETE FROM checkout WHERE TransactionID = " . $ID;
		mysql_query($strSQL, $Greenhouse) or die(mysql_error());
		header(sprintf("Location: %s", "checkout_transactions.php?sort =" . $sort));
	}	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="../../Images/favicon.ico"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../CSS/transaction.css"/>
<link rel="stylesheet" type="text/css" href="../../CSS/nav.css"/>
<title>Transactions</title>
</head>

<body>
<div id="header">
	<div id="nav">
    	<a href="indexMarketing.php" class="linkHeader">Menu Page</a>
    	<a href="checkout_till.php" class="linkHeader">Checkout Till</a>
    	<a href="checkout_transactions.php" class="linkHeader">Edit Checkouts</a>
		<a href="<?php echo $logoutAction ?>" id="linkLogout" class="linkHeader">Logout</a>
    </div>
</div><table>
	<thead>
  		<tr>
   		<th><a href="checkout_transactions.php?sort=TransactionID">Transaction ID</a></th>
   		<th><a href="checkout_transactions.php?sort=Romano">Romano</a></th>
        <th><a href="checkout_transactions.php?sort=Corazon">Corazon</a></th>
        <th><a href="checkout_transactions.php?sort=Pepper">Pepper</a></th>
        <th><a href="checkout_transactions.php?sort=Chili">Chili</a></th>
        <th><a href="checkout_transactions.php?sort=Total">Total</a></th>
        <th>&nbsp;</th>
        </thead>
    
    <tbody>
    	<?php 
			$i = 0;
			do {
				if ($i % 2 == 0) $even = "class='even'"; else $even = "";
		?>
   	    <tr <?php echo $even; ?>>
    	    <td><?php echo $row_rs_transactions['TransactionID']; ?></td>
    	    <td><?php echo $row_rs_transactions['Romano']; ?></td>
    	    <td><?php echo $row_rs_transactions['Corazon']; ?></td>
    	    <td><?php echo $row_rs_transactions['Pepper']; ?></td>
    	    <td><?php echo $row_rs_transactions['Chili']; ?></td>
    	    <td><?php echo $row_rs_transactions['Total']; ?></td>
    	    <td><a id="row_delete" href="checkout_transactions.php?delete=y&amp;ID=<?php echo $row_rs_transactions['TransactionID']; ?>">Delete</a></td>
   	    </tr>
    	  <?php 
		  	$i = $i + 1;
		  	} while ($row_rs_transactions = mysql_fetch_assoc($rs_transactions)); ?>
    </tbody>
    
    <!--<tfoot>
    	<tr>
   	  	  	<td>Total:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>-->
    </tfoot>
</table>
</body>
</html>
<?php
mysql_free_result($rs_transactions);
?>
