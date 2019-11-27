<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config.php';

$query = "SELECT `vraagID` FROM `Vraag` WHERE 1 = 1 ORDER BY `vraagID` DESC LIMIT 1";
$result = mysqli_query($mysqli, $query);
$resultaat = mysqli_fetch_array($result);
var_dump($resultaat);
//$lastGameID = $resultaat['gameID'];
$lastGameVraag = $resultaat['vraagID'];
//echo $lastGameVraag;
//
session_start();
$_SESSION['tijdelijkeVraag'] = $lastGameVraag;
//$_SESSION['tijdelijkeGameID'] = $lastGameID;
//echo $lastGameVraag;
header("Location: loading.php");