<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sadasd</title>
  </head>
<body>
    <?php
    require "config.php";

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $query2 = "SELECT `gameID` FROM `Game` WHERE 1 ORDER BY `gameID` DESC LIMIT 1";
    $result2 = mysqli_query($mysqli, $query2);
    $resultaat2 = mysqli_fetch_array($result2);
    $lastGameID = $resultaat2['gameID'];

    $query = "UPDATE Vraag SET Goedkeuring = '1' WHERE 1 ORDER BY vraagID DESC LIMIT 1";

    if(mysqli_query($mysqli, $query))
    {
      echo "Het is gelukt";
    }else {
      echo "Er ging iets fout";
    }
    ?>


    </body>
</html>
