<?php require_once('../Connections/Greenhouse.php'); ?>
<?php
	$msg = "";
?>
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
	
  $logoutGoTo = "../login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!--Sign Up Section-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="file:///C|/Users/Ninja/Documents/Sites/Images/favicon.ico"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/indexMarketing.css"/>
<link rel="stylesheet" type="text/css" href="../CSS/nav.css"/>
<script type="text/javascript" src="../Resources/ahahLib.js"></script>
<script type="text/javascript" src="../Resources/jquery-2.0.2.js"></script>
<script type="text/javascript" src="../JavaScript/indexMarketing.js"></script>
<script>
	function checkout() {
		//Edit Prices using getElementById
		var price_romano = 200;
		var price_corazon = 250;
		var price_pepper = 150;
		var price_chili = 25;
		var price_bag = 300;
		var romano = document.getElementById('txtRomano').value;
		var corazon = document.getElementById('txtCorazon').value;
		var pepper = document.getElementById('txtPepper').value;
		var chili = document.getElementById('txtChili').value;
		var bag = document.getElementById('txtBag').value;
		var total = (romano * price_romano) + (corazon * price_corazon) + (pepper * price_pepper) + (chili * price_chili) + (bag * price_bag);
		
		document.getElementById('output_Total').innerHTML = total;
		
		var msg = "";
		var randNum = parseInt(Math.random()*2647923);
		var url = '../Resources/save_forms/saveForm_online_orders.php?romano=' + romano + '&corazon=' + corazon +'&pepper=' + pepper +'&chili=' + chili + '&bag='+ bag + '&total='+ total +'&rand=' + randNum + "&save=save";
	callAHAH(url, 'msg', '', 'Error: Saving transaction...');
}
	
	function newTransaction() {
		document.getElementById('txtRomano').value = "";
		document.getElementById('txtCorazon').value = "";
		document.getElementById('txtPepper').value = "";
		document.getElementById('txtChili').value = "";	
		document.getElementById('txtBag').value = "";
		document.getElementById('output_Total').innerHTML = "";
		document.getElementById('msg').innerHTML = "";
	}
	
</script>
<title>Cash Register</title>
</head>

<body>
<div id="header">
	<div id="nav">
    	<a href="index_regUsers.php" class="linkHeader">Menu Page</a>
		<a href="<?php echo $logoutAction ?>" id="linkLogout" class="linkHeader">Logout</a>
    </div>
</div>
<div class="phMsgInfo">
	<p class="msgInfo">All online orders should be made one day prior to the date when they are to be collected. That is, if the collection day is Thursday, online should be placed on Wednesday.</p>
</div>
<div id="systemContainer">
<div id="itemContainer" class="cardContainer">
	<h3 class="cardTitle">ITEMS</h3>
    <div class="cardBody">
    	<label id="label_txtRomano" class="label_txtField">Romano/Kg</label>
    	<input name="txtRomano" type="text" class="txtField" id="txtRomano" autocomplete="off" placeholder="Romano/Kg" />
        <label id="label_txtCorazon" class="label_txtField">Corazon/Kg</label>
        <input name="txtCorazon" type="text" class="txtField" id="txtCorazon" autocomplete="off" placeholder="Corazon/Kg"/>
        <label id="label_txtPepper" class="label_txtField">Pepper/Kg</label>
        <input name="txtPepper" type="text" class="txtField" id="txtPepper" autocomplete="off" placeholder="Pepper/Kg" />
        <label id="label_txtChili" class="label_txtField">Chili</label>
        <input name="txtChili" type="text" class="txtField" id="txtChili" autocomplete="off" placeholder="Chili" />
        <label id="label_txtBag" class="label_txtField">Bag</label>
        <input name="txtBag" type="text" class="txtField" id="txtBag" autocomplete="off" placeholder="Bag" />
<input name="cmdCheckout" type="button" class="button" id="cmdCheckout" value="Checkout" onclick="checkout();" />
        <input name="cmdClear" type="button" class="button" id="cmdClear" value="New Transaction" onclick="newTransaction();" />
     <div id="msg"><?php echo $msg ?></div>
    </div>
</div>
<div id="totalContainer" class="cardContainer">
	<h3 class="cardTitle">TOTAL</h3>
    <div class="cardBody">
    	<div class="section_title">Ksh</div>
        <div id="output_Total" class="totalAmount"></div>
    </div>
  </div>
</div>
</body>
</html>