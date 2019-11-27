<?php
// update van score woensdag 20/11
// if (isset($_POST['submit']))
// {
// require 'config.php';
//
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//
// $id = $_POST['ID'];
// $scoreRed = $_POST['scoreRed'];
// $scoreBlue = $_POST['scoreBlue'];
//
// $query3 = "UPDATE `Score` SET `scoreRed`='$scoreRed',`scoreBlue`='$scoreBlue'
// WHERE `Score`.`ID` = $id;";
//
// echo $query3 . "<br>";
// }



// if (isset($_POST['submit']))
// {
require 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$scoreRed = $_POST['scoreRed'];
$scoreBlue = $_POST['scoreBlue'];
$antRed = $_POST['AntwoordRed'];
$antBlue = $_POST['AntwoordBlue'];

$query = "INSERT INTO `Score` (`ID`, `scoreRed`, `scoreBlue`)
VALUES (NULL, '$scoreRed', '$scoreBlue');";

session_start();
//$kleur = $_SESSION['team'];
$kleur = 'Red';
$color = 'Antwoord' . $kleur;

//if ($antRed == 'AntwoordRed') {
//  $antwoord = $antRed;
//  $q2 = "UPDATE `$color` SET `aantalGoed`= '$antwoord' WHERE `ID` = 19";
//} else if ($antBlue == 'AntwoordBlue') {
//  $antwoord = $antBlue;
//
//}



//$query2 = "UPDATE `$color` SET `aantalGoed`= '$antwoord' WHERE `ID` = 19";

if (mysqli_query ($mysqli, $query))
{
  if (mysqli_query($mysqli, $q2) && mysqli_query($mysqli, $q3)){
    echo "<script>
  alert('punten zijn toegevoegd!');
  window.location.href='uitlezen.php';
  </script>";
  }
}
// }
?>
