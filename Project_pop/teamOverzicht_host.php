<?php
include_once "config_test.php";
session_start();
$gameID = 1;
$kleur = "Red";
$team = "team" . $kleur;
## moet uiteindelijk vanaf host komen in de session
$query = "SELECT * FROM `Speler` WHERE `spelerID` = (SELECT $team FROM `Team` AS R WHERE `sessieCode` = (SELECT `sessieCode` FROM `Sessie` WHERE `gameID` = '$gameID'))";
//OR `spelerID` = (SELECT `teamBlue` FROM `Team` AS B WHERE `sessieCode` = (SELECT `sessieCode` FROM `Sessie` WHERE `gameID` = 1))
$result = mysqli_query($mysqli, $query);
if ($result) {
    //echo "c";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>overzicht Team</title>
    <link rel="stylesheet" type="text/css" href="css/overzichtTeam_user.css">
</head>
<body>
<header>
    <figure>
        <img src="img/Logo.jpg" alt="test">
    </figure>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th>Captain</th>
            <th>Speler1</th>
            <th>Speler2</th>
            <th>Speler3</th>
            <th>Team</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['captain'] . "</td>";
            echo "<td>" . $row['speler1'] . "</td>";
            echo "<td>" . $row['speler2'] . "</td>";
            echo "<td>" . $row['speler3'] . "</td>";
            echo "<td>" . $row['team'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</main>
</body>
</html>