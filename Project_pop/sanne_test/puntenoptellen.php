<?php
include_once "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//voor rode score optellen
$query = "SELECT SUM(scoreRed) total FROM Score;";

$resultaat = mysqli_query($mysqli,$query);

if(mysqli_num_rows ($resultaat) ==0){
echo "Er zijn geen resulaten gevonden";
}


else{
  while($rij = mysqli_fetch_array($resultaat))
  {
     echo $rij[0];
  }
}


//voor blauw score optellen

$query2 = "SELECT SUM(scoreBlue) total FROM Score;";

$resultaat2 = mysqli_query($mysqli,$query2);

if(mysqli_num_rows ($resultaat2) ==0){
echo "Er zijn geen resulaten gevonden";
}
else{
  while($rij2 = mysqli_fetch_array($resultaat2))
  {
    echo $rij2[0];
  }
}
