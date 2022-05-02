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
$query_Place_req = "SELECT * FROM indoor";
$Place_req = mysql_query($query_Place_req, $Indoor_req) or die(mysql_error());

$arr_title = array();
$arr_pth = array();
$arr_embed = array();
$arr_website = array();
$x = 0;
while($row_Place_req = mysql_fetch_assoc($Place_req))
{
	$arr_title[] = $row_Place_req['title'];
	$arr_pth[] = $row_Place_req['pth'];
	$arr_embed[] = $row_Place_req['embed'];
	$arr_website[] = $row_Place_req['website'];
}

echo $row_Place_req['title'];
$totalRows_Place_req = mysql_num_rows($Place_req);



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
          <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Randomizer</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Contact</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $logoutAction ?>">Log out</a></li>
        </ul>
</div>
    </nav><br>
<br>
<br>
<br>
<br>

	  <h1 class="text-center">Indoor&nbsp; &nbsp;&nbsp;</h1>
    <p class="text-center">(Randomizer selection)</p>
<div class="row">
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="images/20.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[0]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="<?php echo $arr_website[0]?>" class="btn btn-primary">Go somewhere</a> </div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[1]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[1]?>
</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[1]?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[2]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[2]?>
</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[2]?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[3]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[3]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[3]?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
      Content goes here</div>
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[4]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[4]?>
</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="<?php echo $arr_website[4]?>" class="btn btn-primary">Go somewhere</a> </div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[5]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[5]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[5]?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[6]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[6]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[6]?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[7]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[7]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[7]?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
      Content goes here</div>
      <div class="col-xl-4">
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[8]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[8]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="<?php echo $arr_website[8]?>" class="btn btn-primary">Go somewhere</a> </div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[9]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[9]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[9]?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[10]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[10]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[10]?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
        <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $arr_pth[11]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $arr_title[11]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo $arr_website[11]?>" class="btn btn-primary">Go somewhere</a></div>
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
mysql_free_result($Place_req);
?>
