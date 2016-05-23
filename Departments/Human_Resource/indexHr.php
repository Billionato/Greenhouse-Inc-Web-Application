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
<script>
	function saveForm() {
		var msg = "";
		var department = document.getElementById('lstDepartment').value;
		var firstName = document.getElementById('txtFirstName').value;
		var lastName = document.getElementById('txtLastName').value;
		var username = document.getElementById('txtUsername').value;
		var password = document.getElementById('txtPassword').value;
		var confirmPassword = document.getElementById('txtConfirmPassword').value;
		if (department == "")
			msg = msg + " - a department<BR>";
		if (firstName == "")
			msg = msg + " - a first name<BR>";
		if (lastName == "")
			msg = msg + " - a last name<BR>";
		if (username == "")
			msg = msg + " - a username<BR>";
		if (password == "")
			msg = msg + " - a password<BR>";
		if (confirmPassword != password)
			msg = msg + "Please ensure that the passwords match";
		if (msg.length > 0) {
			msg = "Please enter:<BR>" + msg;
					/*document.getElementById('msg').innerHTML = "<font color='red'>" + msg + "</font>";*/
					document.getElementById('msg').className = "invalid";
					document.getElementById('msg').innerHTML = msg;
					return false;
		} else {
		var randNum = parseInt(Math.random()*2647923);
		var url = '../../Resources/save_forms/saveForm_addAdmin.php?Department=' + department + '&FirstName=' + firstName + '&LastName=' + lastName + '&Username=' + username + '&Password='+ password +'&rand=' + randNum + "&save=save";
	callAHAH(url, 'msg', '', 'Error: Creating Account...');
		document.getElementById('msg').className = "valid";
		clearForm();
		}
	}
	
	function clearForm() {
		document.getElementById('lstDepartment').value = "";
		document.getElementById('txtFirstName').value = "";
		document.getElementById('txtLastName').value = "";
		document.getElementById('txtUsername').value = "";
		document.getElementById('txtPassword').value = "";
		document.getElementById('txtConfirmPassword').value = "";
	}
</script>
<title>Human Resource Home</title>
</head>

<body>
<div id="header">
	<div id="nav">
    	<a href="indexHr.php" class="linkHeader">Menu Page</a>
        <a href="admins.php" class="linkHeader">Edit Admins</a>
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
    	<a href="javascript:void();"><input id="optNextPage" type="button" class="optButton" value="Add Admin"></a>
        <a href="admins.php"><input type="button" class="optButton" value="Edit Admins"></a>
        <a href="logins.php"><input type="button" class="optButton" value="View Logins"></a>
        <!--<a href="SignUp_ Forms/signUp_parent.php"><input type="button" class="button" value="Parent"></a>
        <a href="SignUp_ Forms/signUp_interestedPerson.php"><input type="button" class="button" value="Interested Person"></a>
        <a href="SignUp_ Forms/signUp_organization.php"><input type="button" class="button" value="Organization"></a>-->
        </div>
        <div class="phForm">
        <form id="form_intPerson" name="form_intPerson" method="post" action="">
        	<select name="lstDepartment" class="lst" id="lstDepartment">
        	  <option value="""">Select Department:</option>
        	  <option value="bod">Board of Directors</option>
        	  <option value="finance">Finance</option>
        	  <option value="marketing">Marketing</option>
        	  <option value="production">Operations</option>
              <option value="hr">Human Resource</option>
              <option value="tech">Tech</option>
        	</select>
        	<input name="txtFirstName" type="text" class="txtField" id="txtFirstName" placeholder="First Name" />
            <input name="txtLastName" type="text" class="txtField" id="txtLastName" placeholder="Last Name"  />
            <input name="txtUsername" type="text" class="txtField" id="txtUsername" placeholder="Username" />
            <div id="infoMsg">Take the first letter of first name and add last name e.g. bcurrey</div>
            <input name="txtPassword" type="password" class="txtField" id="txtPassword" placeholder="Password" />
            <input name="txtConfrimPassword" type="password" class="txtField" id="txtConfirmPassword" placeholder="Confirm Password" />
            <input name="cmdSignUp" type="button" class="button" id="cmdSignUp" onclick="saveForm();" value="Submit" />
            <div id="msg"><?php echo $msg ?></div>
        </form>
        </div>
    </div>
</div>
</body>
</html>