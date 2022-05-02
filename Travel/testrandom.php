<?php require_once('Connections/Indoor_req.php'); ?>
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
$query_test1 = "SELECT * FROM indoor ORDER BY RAND() LIMIT 1";
$test1 = mysql_query($query_test1, $Indoor_req) or die(mysql_error());
$row_test1 = mysql_fetch_assoc($test1);
$totalRows_test1 = mysql_num_rows($test1);
echo $row_test1['title'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="StyleTestRandom.css" rel="stylesheet" type="text/css">
</head>
	

<body>
<div class="container-fluid">
  <div class="container"></div>
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
  </nav><br><br><br><br><br 1="&lt;br&gt;&lt;div class=&quot;row&quot;&gt;&lt;div class=&quot;col-xl-12&quot;&gt;Content goes here&lt;/div&gt;&lt;/div&gt;">
<a href="testrandom.php" class="btn btn-light">Randomzie</a>
	<br><br><br><br><br><br><br>
<br>
<br>
<br>
<div class="row">
  <div class="col-xl-12">
    <div class="card col-md-4"> <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">You should go toooo...     !!!</h5>
        <p class="card-text"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.778849525986!2d-122.41215030792128!3d37.80885900255083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d88c63d939321f4!2sPier%20Market%20Seafood%20Restaurant!5e0!3m2!1sen!2sus!4v1651424079950!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        <a href="#" class="btn btn-primary">Go somewhere</a> </div>
    </div>
    Content goes here</div>
</div>


</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
<?php


mysql_free_result($test1);
?>
