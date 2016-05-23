<?php require_once('../Connections/Greenhouse.php'); ?>
<?php
if (isset($_GET['division']))
	$division = $_GET['division'];
else
	$division = "ES";
	
mysql_select_db($database_Greenhouse, $Greenhouse);
$query_rs_name = "SELECT FacultyID, LastName, FirstName FROM faculty WHERE Division= '$division' ORDER BY FirstName, LastName";
//echo $query_rs_name;
$rs_name = mysql_query($query_rs_name, $Greenhouse) or die(mysql_error());
$row_rs_name = mysql_fetch_assoc($rs_name);
$totalRows_rs_name = mysql_num_rows($rs_name);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<select name="lstNames" class="lst" id="lstNames">
              <option value="""">Select Name:</option>
              <?php
do {  
?>
              <option value="<?php echo $row_rs_name['FacultyID']?>"><?php echo $row_rs_name['FirstName']?> <?php echo $row_rs_name['LastName']?></option>
       <?php
        } while ($row_rs_name = mysql_fetch_assoc($rs_name));
      ?>
?>
            </select>
</body>
</html>