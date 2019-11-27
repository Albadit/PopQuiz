<!DOCTYPE html>
<html lang="nl">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vragen | Pop Quiz</title>
      <link rel="shortcut icon" href="img/Logo.png">
      <link rel="stylesheet" href="css/vragen.css">
</head>
<body>
<main>
      <div class="center">
            <figure>
                  <img src="img/icon.png" alt="icon">
            </figure>
            <form method="post">
                  <label for="answer">
                        <input type="text" name="answer" placeholder="Antwoord" required id="answer">
                  </label>
                  <input type="submit" name="Submit" id="Submit">
            </form>
      </div>
      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      require 'config_test.php';

      $team = $_SESSION['team'];
      #$team = 'Red';
      # session

      session_start();
      if(isset($_POST['Submit'])) {
      //$team = $_SESSION['team'];
      if ($team = 'Red') {
      $DBkleur = 'AntwoordRed';
      } else if ($team == 'Blue') {
      $DBkleur = 'AntwoordBlue';
      } else {
      echo "fatal error. team failt. We can get them next time";
      }

      $antwoord = $_POST['answer'];

      ## het laatste id bepalen
      $query2 = "SELECT `ID` FROM `$DBkleur` WHERE `ID` ORDER BY `ID` DESC LIMIT 1";
      $result2 = mysqli_query($mysqli, $query2);
      $resultaat2 = mysqli_fetch_array($result2);
      $lastID = $resultaat2['ID'];
      
      $query1 = "SELECT * FROM `$DBkleur` WHERE `ID` = '$lastID'";
      $result1 = mysqli_query($mysqli, $query1);
      $resultaat1 = mysqli_fetch_array($result1);
      
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
      header("Location: loading_before.php");
      }
      # voor elke colum die leeg is een andere query maken zodat ze allemaal gevuld kunnen worden
      # dit moet gebeuren als er een nieuwe vraag komt
      }
      ?>
</main>
</body>
</html>