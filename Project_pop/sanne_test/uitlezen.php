<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <title>Uitslag</title>
  <link rel="stylesheet" href="tabel.css">
</head>

<?php
include_once "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT * FROM `AntwoordRed` WHERE 1 ORDER BY ID DESC LIMIT 1";

$resultaat = mysqli_query($mysqli,$query);

if(mysqli_num_rows ($resultaat) ==0){
echo "Er zijn geen resulaten gevonden";
}


?>
  <body>
    <main>
  <?php
  echo"<div id='contain'>";
    echo"<form action='controle.php' method='post'>";
    echo "<h2>Antwoorden Rode team</h2>";
      echo"<table>";
        echo"<thead>";
          echo"<tr>";
            echo"<th>Antwoord 1</th>";
            echo"<th>Antwoord 2</th>";
            echo"<th>Antwoord 3</th>";
            echo"<th>Antwoord 4</th>";
          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
        while ($rij = mysqli_fetch_array($resultaat))
        {
          echo"<tr class='achter'>";
          // echo"<td>" . $rij['antspelID'] . "</td>";
          echo"<td>" . $rij['antwoord0'] . "</td>";
          echo"<td>" . $rij['antwoord1'] . "</td>";
          echo"<td>" . $rij['antwoord2'] . "</td>";
          echo"<td>" . $rij['antwoord3'] . "</td>";
          echo"</tr>";
        }

    echo"</tbody>";
    echo"</table>";
    echo"</form>";
    echo"</div>";

    $query2 = "SELECT * FROM `AntwoordBlue` WHERE 1 ORDER BY ID DESC LIMIT 1";

    $resultaat = mysqli_query($mysqli,$query2);

    if(mysqli_num_rows ($resultaat) ==0){
    echo "Er zijn geen resulaten gevonden";
    }

    echo"<div id='contain'>";
      echo"<form action='controle.php' method='post'>";
      echo "<h2>Antwoorden Blauwe team</h2>";
        echo"<table>";
          echo"<thead>";
            echo"<tr>";
              echo"<th>Antwoord 1</th>";
              echo"<th>Antwoord 2</th>";
              echo"<th>Antwoord 3</th>";
              echo"<th>Antwoord 4</th>";
            echo"</tr>";
          echo"</thead>";
          echo"<tbody>";
          while ($rij = mysqli_fetch_array($resultaat))
          {
            echo"<tr class='achter'>";
            // echo"<td>" . $rij['antspelID'] . "</td>";
            echo"<td>" . $rij['antwoord0'] . "</td>";
            echo"<td>" . $rij['antwoord1'] . "</td>";
            echo"<td>" . $rij['antwoord2'] . "</td>";
            echo"<td>" . $rij['antwoord3'] . "</td>";
            echo"</tr>";
          }

      echo"</tbody>";
      echo"</table>";
      echo"</form>";
      echo"</div>";

      $query3 = "SELECT * FROM `Score` WHERE 1 ORDER BY ID DESC LIMIT 1";

      $resultaat = mysqli_query($mysqli,$query3);

      if(mysqli_num_rows ($resultaat) ==0){
        echo "Er zijn geen resulaten gevonden";
      }

      echo"<div id='contain'>";
        echo"<form action='punten.php' method='post'>";
        echo "<h2>Score</h2>";
          echo"<table>";
            echo"<thead>";
              echo"<tr>";
                echo"<th>score Red</th>";
                echo"<th>score Blue</th>";
              echo"</tr>";
            echo"</thead>";
            echo"<tbody>";
            while ($rij = mysqli_fetch_array($resultaat))
            {
              echo"<tr class='achter'>";
            ?>
            <td><input type="number" name="scoreRed"></td>
            <td><input type="number" name="scoreBlue"></td>
            <?php
            }
        echo"</tbody>";
        echo"</table>";
        echo"<input type='submit' name='submit' value='punten optellen' id='knop'/>";
        echo"</form>";
        echo"</div>";
        echo"<input type='submit' name='submit' value='Einde van de ronde' id='button' formaction='goedkeuring.php'/>";

  echo"<div id='contain'>";
  echo"<form action='punten.php' method='post'>";
  echo "<h2>Aantal goede antwoorden</h2>";
  echo"<table>";
  echo"<thead>";
  echo"<tr>";
  echo"<th>Antwoorden Red</th>";
  echo"<th>Antwoorden Blue</th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
//  while ($rij = mysqli_fetch_array($resultaat))
//  {
      echo"<tr class='achter'>";
      ?>
      <td><input type="number" name="AntwoordRed"></td>
      <td><input type="number" name="AntwoordBlue"></td>
      <?php
 // }
  echo"</tbody>";
  echo"</table>";
  echo"<input type='submit' name='submit' value='aantalAntwoorden' id='knop'/>";
  echo"</form>";
  echo"</div>";
  echo"<input type='submit' name='submit' value='Einde van de ronde' id='button' formaction='goedkeuring.php'/>";
    ?>
