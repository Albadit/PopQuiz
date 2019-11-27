<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config_test.php';

$query = "SELECT `gameID`, `Vraag` FROM `Game` WHERE 1 ORDER BY `gameID` DESC LIMIT 1";
$result = mysqli_query($mysqli, $query);
$resultaat = mysqli_fetch_array($result);

$lastGameID = $resultaat['gameID'];
$lastGameVraag = $resultaat['Vraag'];

session_start();
$_SESSION['tijdelijkeVraag'] = $lastGameVraag;
$_SESSION['tijdelijkeGameID'] = $lastGameID;

header("Location: loading.php");