<!DOCTYPE html>
<html lang="nl">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>k*t leven en shyit code</title>
    <meta http-equiv="refresh" content="3" />
    <link rel="shortcut icon" href="img/Logo.png">
	<link rel="stylesheet" href="css/Animated_FUN.css">
</head>
<body>
<p>Wacht alsjeblieft totdat de host het spel start</p>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config.php';

session_start();

$query = "SELECT `gameID`, `Vraag` FROM `Game` WHERE 1 ORDER BY `gameID` DESC LIMIT 1";
$result = mysqli_query($mysqli, $query);
$resultaat = mysqli_fetch_array($result);

$lastGameID = $resultaat['gameID'];
$lastGameVraag = $resultaat['Vraag'];

//echo $lastGameVraag;

if ($lastGameVraag == 1) {
    header("Location: vraag.php");
}
?>
</body>
</html>