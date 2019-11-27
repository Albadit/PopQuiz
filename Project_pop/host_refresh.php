<?php
include_once 'config_test.php';
//
//$query_oud = "SELECT MAX(`score`) FROM `Speler` WHERE `spelerID` IN (SELECT `teamRed` FROM `Team` WHERE `sessieCode` = 546158) OR `spelerID` IN (SELECT `teamBlue` FROM `Team` WHERE `sessieCode` = (SELECT `sessieCode` FROM `Sessie` WHERE `gameID` = 2))";
$query = "SELECT DISTINCT `score`, `teamNaam`, `team` FROM `Speler`, `Game` WHERE `score` != 0 ORDER BY `score` DESC";
$result = mysqli_query($mysqli, $query);
//$resultaat = mysqli_fetch_array($result);
//$topScore = $resultaat['0'];
//$query2_oud = "SELECT `Game`, `date`, `teamNaam`, `team` FROM `Game`, `Speler` WHERE `score` = '$topScore'";
$query2 = "SELECT DISTINCT `Game`, `date` FROM `Game`, `Speler` WHERE `gameID` IN (SELECT `gameID` FROM `Sessie` WHERE `teamID` IN (SELECT `teamID` FROM `Team` WHERE `sessieCode` IN (SELECT `sessieCode` FROM `Speler` WHERE `teamNaam` != '')))";
$result2 = mysqli_query($mysqli, $query2);
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Score</th>";
echo "<th>Gewonnen Team</th>";
echo "<th>teamNaam</th>";
echo "</tr>";
echo "</head>";
while ($resultaat = mysqli_fetch_array($result)) {
    // array uitpakken
    echo "<tr>";
    // alle gegevens weergeven
    echo "<td>" . $resultaat['score'] . "</td>";
    echo "<td>" . $resultaat['team'] . "</td>";
    echo "<td>" . $resultaat['teamNaam'] . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>