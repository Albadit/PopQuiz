<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <title>opdr3</title>
  <link rel="stylesheet" href="../CSS/tabel.css">
</head>

<?php
include_once "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT * FROM `AntwoordSpeler`";

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
      echo"<table>";
        echo"<thead>";
          echo"<tr>";
            echo"<th>Player</th>";
            echo"<th>Team</th>";
            echo"<th>Antwoord</th>";
            echo"<th>Goed</th>";
            echo"<th>fout</th>";
          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
        while ($rij = mysqli_fetch_array($resultaat))
        {
          echo"<tr class='achter'>";
          // echo"<td>" . $rij['antspelID'] . "</td>";
          echo"<td>" . $rij['speler'] . "</td>";
          echo"<td>" . $rij['team'] . "</td>";
          echo"<td>" . $rij['antwoord'] . "</td>";
          echo"<td>  <input type='checkbox' name='punt[]' value='yes' id='goed" . $rij['antspelID'] . "'></td>";
          echo"<td>  <input type='checkbox' name='punt[]' value='no' id='fout" . $rij['antspelID'] . "'></td>";
          echo"</tr>";
        }


        // if(isset($_POST['punt'])){
        //   $rij = mysqli_fetch_array($resultaat)
        //   $punt[] = 0;
        //   $tellen = count($punt);
        //   var_dump($punt);
        //   if (is_array($_POST['punt'])) {
        //     foreach($_POST['punt'] as $value){
        //       echo $value;
        //       $punt[] .= $value;
        //       echo"<br>";
        //     }
        //   }
        //   var_dump($punt);
        //   $i = 0;
        //   while ($i <= $punt)
        //   {
        //     if($value == "yes")
        //     {
        //       $speler = $rij['speler'];
        //       $query = "UPDATE `AntwoordSpeler` SET `punt` = WHERE speler = '$speler'";
        //     }else {
        //       // $query = "INSERT INTO `AntwoordSpeler` (`punt`)
        //       // VALUES ('0');";
        //     }
        //     $i++;
        //   }
        // }

        $sql = 'SELECT * FROM AntwoordSpeler';
        if($result = mysqli_query($mysqli, $sql)){
           $array = array();
           while($row = mysqli_fetch_array($result)){
              $array[]=$row['kolomnaam'];
              }
           }

    echo"</tbody>";
    echo"</table>";
    echo"<input type='submit' name='submit' value='submit' id='knop' />";
    echo"</form>";
    echo"</div>";

  ?>

  </main>
</body>

</html>
