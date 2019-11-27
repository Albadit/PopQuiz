<?php
include_once "config_test.php";
session_start();
$query3 = "SELECT `gameID` FROM `Game` WHERE 1 ORDER BY `gameID` DESc LIMIT 1";
$result3 = mysqli_query($mysqli, $query3);
$resultaat3 = mysqli_fetch_array($result3);
$gameID = $resultaat3['gameID'];
$kleur = "Red";
$team = "team" . $kleur;
## moet uiteindelijk vanaf host komen in de session
$query = "SELECT * FROM `Speler` WHERE `spelerID` = (SELECT $team FROM `Team` AS R WHERE `sessieCode` = (SELECT `sessieCode` FROM `Sessie` WHERE `gameID` = '$gameID'))";
$kleur = "Blue";
$team = "team" . $kleur;
$query2 = "SELECT * FROM `Speler` WHERE `spelerID` = (SELECT $team FROM `Team` AS R WHERE `sessieCode` = (SELECT `sessieCode` FROM `Sessie` WHERE `gameID` = '$gameID'))";
//OR `spelerID` = (SELECT `teamBlue` FROM `Team` AS B WHERE `sessieCode` = (SELECT `sessieCode` FROM `Sessie` WHERE `gameID` = 1))
$result = mysqli_query($mysqli, $query);
$result2 = mysqli_query($mysqli, $query2);
if ($result && $result2) {
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
            <th>TeamNaam</th>
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
            echo "<td>" . $row['teamNaam'] . "</td>";
            echo "<td>" . $row['captain'] . "</td>";
            echo "<td>" . $row['speler1'] . "</td>";
            echo "<td>" . $row['speler2'] . "</td>";
            echo "<td>" . $row['speler3'] . "</td>";
            echo "<td>" . $row['team'] . "</td>";
            echo "</tr>";
        }
        while ($row2 = mysqli_fetch_array($result2)) {
            echo "<tr>";
            echo "<td>" . $row2['teamNaam'] . "</td>";
            echo "<td>" . $row2['captain'] . "</td>";
            echo "<td>" . $row2['speler1'] . "</td>";
            echo "<td>" . $row2['speler2'] . "</td>";
            echo "<td>" . $row2['speler3'] . "</td>";
            echo "<td>" . $row2['team'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</main>
</body>
</html>