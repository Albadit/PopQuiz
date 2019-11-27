<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loading...</title>
  <link rel="shortcut icon" href="img/Logo.png">
  <link rel="stylesheet" href="../css/loading.css">
</head>
<body>
  <p>Wacht alsjeblieft totdat de host het spel start</p>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config_test.php';

session_start();
$lastGameVraag = $_SESSION['tijdelijkeVraag'];
$lastGameID = $_SESSION['tijdelijkeGameID'];

$query2 = "SELECT `Vraag` FROM `Game` WHERE `gameID` = '$lastGameID'";
$result2 = mysqli_query($mysqli, $query2);
$resultaat2 = mysqli_fetch_array($result2);
//echo $resultaat2['Vraag'];
if ($lastGameVraag == $resultaat2['Vraag']) {

} else {
    header("Location: open_vraag_professioneel.php");
}
 ?>
</body>
</html>