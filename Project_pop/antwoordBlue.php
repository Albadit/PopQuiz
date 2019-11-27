<?php
require 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$antwoord = $_POST['antwoord'];
$value = '';
$nummerAnt = count($antwoord);
$a = 0;

$query = "INSERT INTO AntwoordBlue (ID, antwoord0, antwoord1, antwoord2, antwoord3) VALUES (NULL, '', '', '', '')";
$result = mysqli_query($mysqli, $query);

$query2 = "SELECT `ID` FROM `AntwoordBlue` WHERE `ID` ORDER BY `ID` DESC LIMIT 1";
$result2 = mysqli_query($mysqli, $query2);
$resultaat2 = mysqli_fetch_array($result2);
$lastID = $resultaat2['ID'];
echo $lastID;

while ($a < $nummerAnt) {
  $antwoord2 = 'antwoord' . $a;
  $update = "UPDATE `AntwoordBlue` SET `$antwoord2`= '$antwoord[$a]' WHERE ID = '$lastID'";
  $result3 = mysqli_query($mysqli, $update);
  $a++;
}
var_dump($update);
echo "<br><br><br>";
?>
