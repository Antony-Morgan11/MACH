<?php require_once('Connections/User_Information1.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == " registration")) {
  $insertSQL = sprintf("INSERT INTO users (username, password, email) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['passwrod'], "text"),
                       GetSQLValueString($_POST['email'], "text"));

  mysql_select_db($database_User_Information1, $User_Information1);
  $Result1 = mysql_query($insertSQL, $User_Information1) or die(mysql_error());

  $insertGoTo = "login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_User_Information1, $User_Information1);
$query_User_Request1 = "SELECT * FROM users";
$User_Request1 = mysql_query($query_User_Request1, $User_Information1) or die(mysql_error());
$row_User_Request1 = mysql_fetch_assoc($User_Request1);
$totalRows_User_Request1 = mysql_num_rows($User_Request1);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="StyleRegister.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h1>Register</h1>
<form action="<?php echo $editFormAction; ?>" method="POST" name = " registration">
<label>Username:</label><br/>
	<input name = "username" type = "text" required="required"><br/>
<label>Password:</label><br/>
	<input name = "passwrod" type = "password" required="required"><br/>
<label>Email:</label><br/>
	<input name = "email" type = "email" required="required"><br/><br/>
	
  <input type="submit" value = "Register">
  <input type="hidden" name="MM_insert" value=" registration">
 
</form>
	Already have an account? <a href = "login.php"> Login</a>
</body>
</html>
<?php
mysql_free_result($User_Request1);
?>
