<?php require_once('Connections/Web_rest.php'); ?>
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

mysql_select_db($database_Web_rest, $Web_rest);
$query_reeq = "SELECT * FROM rest";
$random = "SELECT * FROM rest ORDER BY RAND() LIMIT 1";
$reeq = mysql_query($query_reeq, $Web_rest) or die(mysql_error());

$arr_title = array();
$arr_pth = array();
$arr_addr = array();
while($row_reeq = mysql_fetch_assoc($reeq))
{
	$arr_title[] = $row_reeq['title'];
	$arr_pth[] = $row_reeq['pth'];
	$arr_addr[] = $row_reeq['address'];
}
$totalRows_reeq = mysql_num_rows($reeq);

//for ($x = 0; $x < $totalRows_reeq; $x++){
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>
	

<body>
<div class="container-fluid">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">Navbar</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
	        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
	          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
	            <div class="dropdown-divider"></div>
	            <a class="dropdown-item" href="#">Something else here</a> </div>
            </li>
	        <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
          </ul>
	      <form class="form-inline my-2 my-lg-0">
	        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
    </nav>
<div class="row">
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-11"> <img class="card-img-top" src="<?php echo $arr_pth[0]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[0]?></h5>
            <p class="card-text"><?php echo $arr_addr[0]?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a> </div>
        </div>
      Content goes here</div>
		
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[1]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[1]?></h5>
            <p class="card-text"><?php echo $arr_addr[1]?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a> </div>
        </div>
      Content goes here</div>
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-10"> <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $random['title']?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a> </div>
        </div>
      Content goes here</div>
    </div>
  </div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
<?php
mysql_free_result($reeq);
?>
