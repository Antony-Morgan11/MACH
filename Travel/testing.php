<?php require_once('Connections/Web_rest.php'); ?>
<div class="container">
  <div class="container-fluid">
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
$query_Web_req = "SELECT * FROM rest";
$Web_req = mysql_query($query_Web_req, $Web_rest) or die(mysql_error());

//$row_Web_req = mysql_fetch_assoc($Web_req);
//$totalRows_Web_req = mysql_num_rows($Web_req);
<div class="row">
  <div class="col-xl-3">Content goes here</div>


?>
  </div>
</div>
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
<div class="card text-center col-md-4">
  <div class="card-header"> Header </div>
  <div class="card-body">
    <h5 class="card-title">Card Title</h5>
    <p class="card-text">Card with header and footer.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> </div>
  <div class="card-footer text-muted"> Footer </div>
</div>
<div class="row">
  <div class="col-xl-3">Content goes here</div>
  <div class="col-xl-3">Content goes here</div>
  <div class="col-xl-3">Content goes here</div>
  <div class="col-xl-3">Content goes here</div>
</div>
<div class="row">
  <div class="col-xl-2">
    <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="<?php echo $row_Web_req [ 'pth']?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row_Web_req [ 'title']?></h5>
        <p class="card-text"><?php echo $row_Web_req [ 'address']?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a> </div>
    </div>
  Content goes here</div>
</div>
</body>
</html>
<?php
mysql_free_result($Web_req);
?>
