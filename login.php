<?php require_once('Connections/Greenhouse.php'); ?>
<?php
//Login section for business admins
//start a session, so we can create a session variable in line 27
if (!isset($_SESSION)) {
  session_start();
}
$msgAdmin = ""; //we need to initialize these two variables which we use in the HTML so we don't create error messages in the php log file
$username = "";

//get user input from the form's fields
//this code below runs only if the user clicks the Login button
if (isset($_POST['cmdLoginAdmin'])) {
  $username=$_POST['txtUsername'];
  $password=$_POST['txtPasswordAdmin'];
  $adminType=$_POST['lstAdminType'];
  $redirectLoginSuccess = "";
  
switch($adminType){
	  case 'bod':
	  $redirectLoginSuccess = "Departments/Board_Of_Directors/indexBod.php";
	  break;
	  
	  case 'finance':
	  $redirectLoginSuccess = "Departments/Finance/indexFinance.php";
	  break;
	  
	  case 'marketing':
	  $redirectLoginSuccess = "Departments/Marketing/indexMarketing.php";
	  break;
	  
	  case 'production':
	  $redirectLoginSuccess = "Departments/Production/indexProduction.php";
	  break;
	  
	  case 'hr':
	  $redirectLoginSuccess = "Departments/Human_Resource/indexHr.php";
	  break;
	  
	  case 'tech':
	  $redirectLoginSuccess = "Departments/Tech/indexTech.php";
	  break;
};

//connect to the biomes database  
  mysql_select_db($database_Greenhouse, $Greenhouse);
//create the SQL string, using the user input for username and password to check for a matching record in the database
  $strSQL="SELECT AdminID, Username, Password, Department FROM admin WHERE Username='$username' AND Password='$password' AND Department='$adminType'";
//ask the MySQL database to run the query
  $rs = mysql_query($strSQL, $Greenhouse) or die(mysql_error());
  $row_rs = mysql_fetch_assoc($rs);
  $found = mysql_num_rows($rs);
//if there is a match in the users table $found will be 1, if not it will be 0 -- the equivalent of false
  if ($found) {
//create a session variable to retain the username
    $_SESSION['MM_UserGroup'] = "";
	
	
//insert record in logins table
$strSQL = "INSERT INTO logins (AdminID, Username, Department) VALUES (" . $row_rs['AdminID'] . ", '" . $row_rs['Username'] . "', ' " . $row_rs['Department'] . "')";
mysql_query($strSQL, $Greenhouse) or die(mysql_error());
//redirect the user to the index page 
  	header(sprintf("Location: %s", $redirectLoginSuccess));
  }
//if there isn't a match in the users table give the user an error message
  else {
	$msgAdmin = "The login information you entered was incorrect";
  }
}
?>
<?php
//Login section for regular users
//start a session, so we can create a session variable in line 27
if (!isset($_SESSION)) {
  session_start();
}
$msgSignIn = ""; //we need to initialize these two variables which we use in the HTML so we don't create error messages in the php log file
$username = "";

//get user input from the form's fields
//this code below runs only if the user clicks the Login button
if (isset($_POST['cmdLogin'])) {
  $username=$_POST['txtEmailAddress'];
  $password=$_POST['txtPassword'];
  $redirectLoginSuccess = "regUserSystem/index_regUsers.php";

//connect to the biomes database  
  mysql_select_db($database_Greenhouse, $Greenhouse);
//create the SQL string, using the user input for username and password to check for a matching record in the database
  $strSQL="SELECT EmailAddress, Password FROM registered_users WHERE EmailAddress='$username' AND Password='$password'";
//ask the MySQL database to run the query
  $rs = mysql_query($strSQL, $Greenhouse) or die(mysql_error());
  $found = mysql_num_rows($rs);
//if there is a match in the users table $found will be 1, if not it will be 0 -- the equivalent of false
  if ($found) {
//create a session variable to retain the username
   $_SESSION['MM_UserGroup'] = "";
//redirect the user to the index page 
  	header(sprintf("Location: %s", $redirectLoginSuccess));
  }
//if there isn't a match in the users table give the user an error message
  else {
	$msgSignIn = "The login information you entered was incorrect";
  }
}
?>
<?php
	//Initializes variable for sign up form message output
	$msg = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="Images/favicon.ico"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="CSS/login.css"/>
<link rel="stylesheet" type="text/css" href="CSS/signUp_forms.css"/>
<script type="text/javascript" src="Resources/jquery-2.0.2.js"></script>
<script type="text/javascript" src="JavaScript/login.js"></script>
<script type="text/javascript" src="Resources/ahahLib.js"></script>
<script>
	function saveForm() {
		var msg = "";
		var userType = document.getElementById('lstUserType').value;
		var firstName = document.getElementById('txtFirstName').value;
		var lastName = document.getElementById('txtLastName').value;
		var emailAddress = document.getElementById('SignUp_txtEmailAddress').value;
		var password = document.getElementById('SignUp_txtPassword').value;
		var confirmPassword = document.getElementById('txtConfirmPassword').value;
		//Required Fields
		if (userType == "")
			msg = msg + " - a usertype<BR>";
			
		if (firstName == "")
			msg = msg + " - a first name<BR>"
			
		if (lastName == "")
			msg = msg + " - a last name<BR>";
			
		if (emailAddress == "")
			msg = msg + " - an email address<BR>";
		
		//Edit
		if (emailAddress != "")
	    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    if (!regex.test(emailAddress))
			msg = msg + " - a valid email address<BR>";
			
		//Required Fields
		if (password == "")
			msg = msg + " - a password<BR>";
		
		if (confirmPassword != password)
			msg = msg + "Please ensure that passwords match<BR>";
			
		if (msg.length > 0) {
			msg = "Please enter:<BR>" + msg;
					//ocument.getElementById('msg').innerHTML = "<font color='red'>" + msg + "</font>";
					document.getElementById('msg').className = "invalid";
					document.getElementById('msg').innerHTML = msg;
					return false;
		}
		var randNum = parseInt(Math.random()*2647923);
		var url = 'Resources/save_forms/saveForm_signUp_main.php?UserType=' + userType + '&FirstName=' + firstName + '&LastName=' + lastName + '&EmailAddress=' + emailAddress + '&Password='+ password +'&rand=' + randNum + "&save=save";
	callAHAH(url, 'msg', '', 'Error: Creating Account...');
		document.getElementById('msg').className = "valid";
		clearForm();
}
	function clearForm() {
		document.getElementById('lstUserType').value = "";
		document.getElementById('txtFirstName').value = "";
		document.getElementById('txtLastName').value = "";
		document.getElementById('SignUp_txtEmailAddress').value = "";
		document.getElementById('SignUp_txtPassword').value = "";
		document.getElementById('txtConfirmPassword').value = "";	
	}
</script>
<title>Login</title>
</head>

<body>
<div id="header">
	<a class="linkHeader" href="index.php">Home</a>
</div>
<div id="cardContainer">
	<div id="cardTitle">
    	<h3>Login</h3>
    </div>
    <div id="loginAdmin">
    	<div id="bodyAdmin">
        	<form id="form_admin" name="form_admin" method="post" action="">
            	<select name="lstAdminType" class="lst" id="lstAdminType">
            	  <option value="&quot;&quot;">Select Department:</option>
            	  <option value="bod">Board of Directors</option>
                  <option value="marketing">Marketing</option>
            	  <option value="finance">Finance</option>
            	  <!--<option value="production">Production</option>-->
            	  <option value="hr">Human Resource</option>
                  <option value="tech">Tech</option>
            	</select>
                <input name="txtUsername" type="text" class="txtField" id="txtUsername" placeholder="Enter Username" />
                <input name="txtPasswordAdmin" type="password" class="txtField" id="txtPasswordAdmin" placeholder="Password" />
                <input name="cmdLoginAdmin" type="submit" class="button" id="cmdLoginAdmin" value="Login" />
                <div class="invalidMsg"><?php echo $msgAdmin; ?></div>
            </form>
        </div>
    </div>
    <div id="toggleAdmin">Admin Login</div>
    <div id="cardBody">
    	<div id="phForm">
        <form id="form_signIn" name="form_signIn" method="post" action="">
            <input id="txtEmailAddress" class="txtField" name="txtEmailAddress" type="text" placeholder="Email Address" />
            <input id="txtPassword" class="txtField" name="txtPassword" type="password" placeholder="Password" />
            <input class="button" name="cmdLogin" type="submit" id="cmdLogin" value="Login"  />
            <div class="invalidMsg"><?php echo $msgSignIn; ?></div>
        </form>
        </div>
        <p>Don't Have An Account?<br/><!--<a id="signUp_button" href="#">Sign Up</a>--></p>
        <div id="phSignUpForm">
        <h2 class="page_section_title">Sign Up</h2>
        <div id="msg"><?php echo $msg ?></div>
    	<form id="form_SignUp" method="post" action="">
        	<select name="lstUserType" class="lst" id="lstUserType">
        	  <option value="""">Select User Type:</option>
        	  <option value="parent">Parent</option>
        	  <option value="faculty">Faculty</option>
        	  <option value="student">Student</option>
        	  <option value="interested_person">Interested Person</option>
        	</select>
            <div class="section_title">Basic Information</div>
        	<input name="txtFirstName" type="text" class="txtField" id="txtFirstName" placeholder="First Name" />
            <input name="txtLastName" type="text" class="txtField" id="txtLastName" placeholder="Last Name"  />
            <div class="section_title">Login Credentials</div>
            <input name="txtEmailAddress" type="text" class="txtField" id="SignUp_txtEmailAddress" placeholder="Email Address" />
            <input name="txtPassword" type="password" class="txtField" id="SignUp_txtPassword" placeholder="Password" />
            <input name="txtConfrimPassword" type="password" class="txtField" id="txtConfirmPassword" placeholder="Confirm Password" />
            <input name="cmdSignUp" type="button" class="button" id="cmdSignUp" onclick="saveForm();" value="Sign Up" />
        </form>
    </div>
    </div>
</div>
</body>
</html>