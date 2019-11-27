<?php
require 'config_test.php';

session_start();

$team = $_SESSION['team'];
if ($team = 'Red') {
  $DBkleur = 'AntwoordRed';
} else if ($team == 'Blue') {
  $DBkleur = 'AntwoordBlue';
} else {
  echo "fatal error. team failt. We can get them next time";
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$antwoord = $_POST['answer'];

## het laatste id bepalen
$query2 = "SELECT `ID` FROM `$DBkleur` WHERE `ID` ORDER BY `ID` DESC LIMIT 1";
$result2 = mysqli_query($mysqli, $query2);
var_dump($query2);
$resultaat2 = mysqli_fetch_array($result2);
$lastID = $resultaat2['ID'];
echo $lastID;

# met het laatste id alle colums ophalen
$query1 = "SELECT * FROM `$DBkleur` WHERE `ID` = '$lastID'";
$result1 = mysqli_query($mysqli, $query1);
$resultaat1 = mysqli_fetch_array($result1);
echo $resultaat1['antwoord0'];
# kijken welke er leeg zijn en welke niet
if ($resultaat1['antwoord0'] == '') {
  $updateValue = "`antwoord0` = '$antwoord'";
} else if ($resultaat1['antwoord1'] == '') {
  $updateValue = "`antwoord1` = '$antwoord'";
} else if ($resultaat1['antwoord2'] == '') {
  $updateValue = "`antwoord2` = '$antwoord'";
} else if ($resultaat1['antwoord3'] == '') {
  $updateValue = "`antwoord3` = '$antwoord'";
} else {
  echo "Fatal error";
}
$query3 = "UPDATE `$DBkleur` SET $updateValue WHERE `ID` = '$lastID'";
$result3 = mysqli_query($mysqli, $query3);
if ($result3) {
  echo "jkdzfgbkjccgzhb nvtfcjsktrvhfbkvnkxbukhvnc";
}
# voor elke colum die leeg is een andere query maken zodat ze allemaal gevuld kunnen worden
?>
