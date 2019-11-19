<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
<?php

$x = $_GET['Team_RED'];
$y = $_GET['Team_Blue'];

if (isset($x) && $x < $y) {
   echo "<header class='masthead_BAD'>";
}  
elseif (isset($x) && $x > $y ) {
	echo "<header class='masthead_GOOD'";
}
elseif (isset($x) && $x = $y) {
	echo "<header class='masthead_DRAW'";
}
else{
   echo "<header class='masthead_ERROR'";                
}
?>
<div class='container h-100'>
<div class='row h-100 align-items-center'>
<div class='col-12 text-center'>
</div>
</div>
</div>
</header>
</body>
</html>