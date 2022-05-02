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
	
  $logoutGoTo = "login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet" type="text/css">
</head>
  <body>
<div class="container-fluid">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php">MACH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
<!--          <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>-->
          <li class="nav-item"> <a class="nav-link" href="Indoors.php">Indoor Randomizer</a></li>
          <li class="nav-item"> <a class="nav-link" href="Outdoors.php">Outdoor Randomizer</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $logoutAction ?>">Log out</a></li>
        </ul>
</div>
    </nav>
    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"> <img class="d-block mx-auto img-thumbnail" src="images/100.jpg" alt="First slide">
          <div class="carousel-caption">
            <h5>First slide Heading</h5>
            <p>First slide Caption</p>
          </div>
        </div>
        <div class="carousel-item"> <img class="d-block mx-auto" src="images/101.jpg" alt="Second slide">
          <div class="carousel-caption">
            <h5>Second slide Heading</h5>
            <p>Second slide Caption</p>
          </div>
        </div>
        <div class="carousel-item"> <img class="d-block mx-auto rounded" src="images/103.jpg" alt="Third slide">
          <div class="carousel-caption">
            <h5>Third slide Heading</h5>
            <p>Third slide Caption</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    <h1 class="text-center">&nbsp; &nbsp;&nbsp;</h1>
    <h1 class="text-center">Welcome To Our Website&nbsp; &nbsp;&nbsp;</h1>
    <p class="text-center">We take you places</p>
    <div class="row">
      <div class="col-lg-6">
        <div class="card col-md-4 col-lg-10"> <img class="card-img-top" src="images/11.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Indoor Activities</h5>
            <p class="card-text"></p>
            <a href="Indoors.php" class="btn btn-primary">Let's GO!</a> </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="card col-md-4 col-lg-12"> <img class="card-img-top" src="images/12.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Outdoor Activities</h5>
            <p class="card-text"></p>
            <a href="Outdoors.php" class="btn btn-primary">Let's GO!</a> </div>
        </div>
      </div>
</div>
<br>
<br>
    <div id="accordion1" role="tablist">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne1">
          <h5 class="mb-0"> <a data-toggle="collapse" href="#collapseOne1" role="button" aria-expanded="true" aria-controls="collapseOne1"> Indoors </a> </h5>
        </div>
        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1">
          <div class="card-body"> The Indoor Activities link takes you to a page with a list of fun indoor places. All places are local to San Jose and contain a mix of resurants, malls, and movie theaters. On that page, you may click on the "Randomize" button for the website to randomly suggest an indoor place you should visit. You may also keep pressing the "Randomize" button until you find something that is to your liking. </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo1">
          <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo1" role="button" aria-expanded="false" aria-controls="collapseTwo1"> Outdoors </a> </h5>
        </div>
        <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordion1">
          <div class="card-body">The Outdoor Activities link takes you to a page with a list of fun outdoor places. All places are local to San Jose and contain a mix of different parks and things you might do on a sunny day. On that page, you may click on the "Randomize" button for the website to randomly suggest an outdoor place you should visit. You may also keep pressing the "Randomize" button until you find something that is to your liking.</div>
        </div>
      </div>
</div>
<br>
<br>
    <footer>
      <div class="row">
<!--        <div class="col-lg-2">Logo&nbsp;</div>-->
        <div class="col-lg-6">MACH © 2022  All rights reserved &nbsp;</div>
      </div>
    </footer>
	  <br>
	  <br>
  </div>
</div>
<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>