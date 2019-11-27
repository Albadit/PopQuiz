<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loading...</title>
  <link rel="shortcut icon" href="../img/Logo.png">
  <link rel="stylesheet" href="../css/loading.css">
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config.php';

session_start();
$lastGameVraag = $_SESSION['tijdelijkeVraag'];
//$lastGameID = $_SESSION['tijdelijkeGameID'];
//echo $lastGameVraag;
$query2 = "SELECT `vraagID` FROM `Vraag` WHERE 1 ORDER BY `vraagID` DESC LIMIT 1";
$result2 = mysqli_query($mysqli, $query2);
$resultaat2 = mysqli_fetch_array($result2);
echo $resultaat2['vraagID'];
if ($lastGameVraag == 0) {
    echo '<p>Wacht alsjeblieft totdat de host het spel start</p>';
} else if ($lastGameVraag > 0 && $lastGameVraag < 7) {
    echo '<p>Wacht alsjeblieft tot u naar de vraag gaat </p>';
} else if ($lastGameVraag == 7) {
    echo '<p>Ipad niet nodig voor deze vraag</p>';
} else {
    echo '<p>FATAL ERROR: party in de tent</p>';
}


//echo $resultaat2['Vraag'];
if ($lastGameVraag == $resultaat2['vraagID']) {

} else {
    if ($resultaat2['vraagID'] == 7) {
        header("Location: loading_before.php");
    } else {
        header("Location: vraag.php");
    }
}
 ?>
</body>
</html>