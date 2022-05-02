<?php require_once('Connections/Indoor_req.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "Access_denied.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
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

mysql_select_db($database_Indoor_req, $Indoor_req);
$query_Outdoor = "SELECT * FROM outdoor ORDER BY RAND() LIMIT 1";
$Outdoor = mysql_query($query_Outdoor, $Indoor_req) or die(mysql_error());
$row_Outdoor = mysql_fetch_assoc($Outdoor);
$totalRows_Outdoor = mysql_num_rows($Outdoor);
$title2 = $row_Outdoor['title'];
$pth2 = $row_Outdoor['pth'];
$embed2 = $row_Outdoor['embed'];
$website2 = $row_Outdoor['website'];


mysql_select_db($database_Indoor_req, $Indoor_req);
$query_Outdoor = "SELECT * FROM outdoor";
$Outdoor = mysql_query($query_Outdoor, $Indoor_req) or die(mysql_error());

$arr_title2 = array();
$arr_pth2 = array();
$arr_embed2 = array();
$arr_website2 = array();
while($row_Outdoor = mysql_fetch_assoc($Outdoor))
{
	$arr_title2[] = $row_Outdoor['title'];
	$arr_pth2[] = $row_Outdoor['pth'];
	$arr_embed2[] = $row_Outdoor['embed'];
	$arr_website2[] = $row_Outdoor['website'];
}





$totalRows_Outdoor = mysql_num_rows($Outdoor);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Outdoors</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="StyleOutdoors.css" rel="stylesheet" type="text/css">
</head>
<div class="container-fluid">
  <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php">MACH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
<!--          <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>-->
          <li class="nav-item"> <a class="nav-link" href="indoors.php">Indoor Randomizer</a></li>
          <li class="nav-item"> <a class="nav-link" href="Outdoors.php">Outdoor Randomizer</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $logoutAction ?>">Log out</a></li>
        </ul>
</div>
			
    </nav><br>
<br>
    <h1 class="text-center">Outdoor Randomizer&nbsp; &nbsp;&nbsp;</h1>
	  <br>
    <div class="card col-md-4"> <img class="card-img-top" src="<?php echo $pth2?>" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title"><?php echo $title2?></h5>
	      <p class="card-text"></p>
	      <a href="<?php echo $website2?>" class="btn btn-primary">Website</a> </div>
    </div>


	  
	  <div class = "embed-responsive embed-responsive-4by3">
		  <div id= "map-container" class="embed-responsive-item">
			  <div id ="map"><?php echo $embed2?>
			  </div>	
		  </div>
	  </div><br>
<br>
<br>
<br>
<br>

	<a href="Outdoors.php" class="btn btn-light">Randomzie</a>
	 
    <p class="text-center">(Randomizer selection)</p>
<div class="row">
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[0]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[0]?></h5>
            <p class="card-text"></p>
          <a href="<?php echo $arr_website2[0]?>" class="btn btn-primary">Website</a> </div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[1]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[1]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[1]?>" class="btn btn-primary">Website</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[2]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[2]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[2]?>" class="btn btn-primary">Website</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[3]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[3]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[3]?>" class="btn btn-primary">Website</a></div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[4]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[4]?></h5>
            <p class="card-text"></p>
          <a href="<?php echo $arr_website2[4]?>" class="btn btn-primary">Website</a> </div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[5]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[5]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[5]?>" class="btn btn-primary">Website</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[6]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[6]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[6]?>" class="btn btn-primary">Website</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[7]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[7]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[7]?>" class="btn btn-primary">Website</a></div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[8]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[8]?></h5>
            <p class="card-text"></p>
          <a href="<?php echo $arr_website2[8]?>" class="btn btn-primary">Website</a> </div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[9]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[9]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[9]?>" class="btn btn-primary">Website</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[10]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[10]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[10]?>" class="btn btn-primary">Website</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth2[11]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title2[11]?></h5>
            <p class="card-text"></p>
            <a href="<?php echo $arr_website2[11]?>" class="btn btn-primary">Website</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>

<body>
</body>
</html>
<!--        //<div class="col-lg-2">Logo&nbsp;</div>-->
<div class="col-lg-6 col-xl-12">MACH © 2022  All rights reserved &nbsp;</div>
<?php
mysql_free_result($Outdoor);
?>
