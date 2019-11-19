<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$sessieCode = $_SESSION['sessiecode'];
include_once 'config_test.php';
if(isset($_POST['join_game'])) {


    $naam = $_POST['name'];
//    $teamname = $_POST['teamname'];
//    echo $teamname;
    $team = $_POST['team'];

// nog zorgen voor team naam invoerveld
    $keuzeSpeler = "SELECT * FROM `Speler` WHERE `team` = '$team' AND `sessieCode` = '$sessieCode'";
    $result = mysqli_query($mysqli, $keuzeSpeler);
    if ($result) {
        $resultaat = mysqli_fetch_array($result);
//        if ($teamname == '') {
//            echo "ds";
//        }
        if ($resultaat['captain'] == '') {
            echo "1";
            $query = "UPDATE `Speler` SET `captain`= '$naam' WHERE `team` = '$team' AND `sessieCode` = '$sessieCode'";
        } else if ($resultaat['captain'] != '' && $resultaat['speler1'] == '') {
            echo "2";
            $query = "UPDATE `Speler` SET `speler1`= '$naam' WHERE `team` = '$team' AND `sessieCode` = '$sessieCode'";
        } else if ($resultaat['captain'] != '' && $resultaat['speler1'] != '' && $resultaat['speler2'] == '') {
            echo "3";
            $query = "UPDATE `Speler` SET `speler2`= '$naam' WHERE `team` = '$team' AND `sessieCode` = '$sessieCode'";
        }
        else if ($resultaat['captain'] != '' && $resultaat['speler1'] != '' && $resultaat['speler2'] != '' && $resultaat['speler3'] == '') {
            echo "4";
            $query = "UPDATE `Speler` SET `speler3`= '$naam' WHERE `team` = '$team' AND `sessieCode` = '$sessieCode'";
        } else {
            echo "team is vol";
            //exit();
        }
        $result2 = mysqli_query($mysqli, $query);
        if ($result2) {
            header("Location: user_wachtscherm.html");
        }
    }
    //$insertPlayers = "UPDATE `Speler` SET `teamNaam`=[value-2],`captain`=[value-3],`speler1`=[value-4],`speler2`=[value-5],`speler3`=[value-6] WHERE `team` = '$team'";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Team choice || popquiz</title>
  <link rel="shortcut icon" href="img/Logo.png">
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>
  <div class="grid">
    <form method="POST" class="form login">
      <div class="form__field">
        <label for="login__username">
              <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>
              </svg>
              <span class="hidden">Naam</span>
          </label>
        <input id="login__username" type="text" name="name" class="form__input" placeholder="Naam" required>
      </div>
<!--        --><?php
//        $teamnameCheck = "SELECT * FROM `Speler` WHERE `sessieCode` = '$sessieCode' AND `teamNaam` IS NOT NULL";
//        $result3 = mysqli_query($mysqli, $teamnameCheck);
//        if ($result3) {
//        }
//        $resultaat2 = mysqli_fetch_array($result3);
//        //var_dump($resultaat2);
//        if ($resultaat2['teamNaam'] == '' && $resultaat2['teamNaam'] == NULL) {
////            echo "z" . $resultaat2['teamNaam'] . "sdf";
//          echo '<div class="form__field">';
//              echo '<label for="login__teamname">';
//                  echo '<svg class="icon">';
//                      echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>';
//                  echo '</svg>';
//                  echo '<span class="hidden">Team name</span>';
//              echo '</label>';
//              echo '<input id="login__teamname" type="text" name="teamname" class="form__input" placeholder="Team name" required>';
//          echo '</div>';
//        } ?>
        <span id="qqqq">* vergeet niet een team te kiezen</span>
      <div class="form__field">
        <input type="submit" name="join_game" value="Join Game">
      </div>
        <label class="bleu">
          <input type="radio" name="team" value="blue" required>
          <img draggable="false" src="img/bleu.png" alt="">
        </label>
        <label class="red">
          <input type="radio" name="team" value="red" >
          <img draggable="false" src="img/red.png" alt="">
        </label>
    </form>
  </div>

  <img draggable="false" id="vs" src="img/vs.png" alt="vs">

  <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="user" viewBox="0 0 1792 1792">
      <path
        d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
    </symbol>
  </svg>
</body>
</html>