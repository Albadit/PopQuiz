<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include_once 'config_test.php';

### game tabel
$gameName = $_POST['gameName'];
if (strlen($gameName) > 0){
    $date = date("Y-m-d");
    $gameAdd = "INSERT INTO `Game`(`gameID`, `Game`, `Ronde`, `Goedkeuring`, `Vraag`, `date`) VALUES (NULL, '$gameName', '1', '0', '0', '$date')";
    $result = mysqli_query($mysqli, $gameAdd);
    var_dump($gameAdd);
    if ($result) {
//        echo "sd";
    } else {
        header("Location: beginscherm_host.php");
        exit();
//        echo "1";
    }
    $lastGame = mysqli_query($mysqli, "SELECT `gameID` FROM `Game` WHERE 1 ORDER BY `gameID` DESC");
    $resultGame = mysqli_fetch_array($lastGame);
    $lastGameResult = $resultGame['gameID'];
    $lastGameResult1 = $resultGame['gameID'] + 1;
    $_SESSION['gameID'] = $lastGameResult;
######################### werkt ^^^^
### speler tabel
    $laatsteSpeler = "SELECT `spelerID` FROM `Speler` WHERE 1 ORDER BY `spelerID` DESC LIMIT 1";
    $Speler = mysqli_query($mysqli, $laatsteSpeler);
    $Speler_result = mysqli_fetch_array($Speler);
    $spelerID1 = $Speler_result['spelerID'] + 1;
    $spelerID2 = $Speler_result['spelerID'] + 2;
    $spelerAdd = "INSERT INTO `Speler`(`spelerID`, `team`) VALUES (NULL, 'red')";
    $spelerAdd2 = "INSERT INTO `Speler`(`spelerID`, `team`) VALUES (NULL, 'blue')";
    $result = mysqli_query($mysqli, $spelerAdd);
    $result2 = mysqli_query($mysqli, $spelerAdd2);
    if ($result && $result2) {
//        echo "sd";
    } else {
         header("Location: beginscherm_host.php");
        exit();
//        echo "2";
    }
######################### werkt ^^^^
### team tabel
    function random_str(
        $length, $keyspace = '0123456789'
    ) {
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        if ($max < 1) {
            throw new Exception('$keyspace must be at least two characters long');
        }
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        //echo $str;
        return $str;
    }
    $sessieCode = random_str(6);
    $_SESSION['sessieCode'] = $sessieCode;
    $teamAdd = "INSERT INTO `Team` (`teamID`, `teamRed`, `teamBlue`, `sessieCode`) VALUES (NULL, '$spelerID1', '$spelerID2', '$sessieCode')";
    $result = mysqli_query($mysqli, $teamAdd);
    if ($result) {
//        echo "sd";
    } else {
        header("Location: beginscherm_host.php");
        exit();
//        echo "3";
    }
    $Team = mysqli_query($mysqli, "SELECT `teamID` FROM `Team` WHERE 1 ORDER BY `teamID` DESC");
    $resultTeam = mysqli_fetch_array($Team);
    $ResultTeam2 = $resultTeam['teamID'];
######################### werkt ^^^^
### sessie speler
$spelerUpdate = "UPDATE `Speler` SET `sessieCode`= '$sessieCode' WHERE `spelerID` = '$spelerID1'";
$spelerUpdate1 = "UPDATE `Speler` SET `sessieCode`= '$sessieCode' WHERE `spelerID` = '$spelerID2'";
$spelerUpdate2 = mysqli_query($mysqli, $spelerUpdate);
$spelerUpdate2_1 = mysqli_query($mysqli, $spelerUpdate1);
if ($spelerUpdate2 && $spelerUpdate2_1) {
//    echo "sddd";
} else {
    header("Location: beginscherm_host.php");
    exit();
//    echo "4";
}
######################### werkt ^^^^
### sessie tabel
    $query = "INSERT INTO `Sessie` (`sessieID`, `sessieCode`, `gameID`, `teamID`) VALUES (NULL, '$sessieCode', '$lastGameResult', '$ResultTeam2')";
    $result = mysqli_query($mysqli, $query);
    //var_dump($result);
    if ($result) {
        header("Location: teamOverzicht_host.php");
        //echo "last";
    } else {
        header("Location: beginscherm_host.php");
        exit();
        //echo "5";
    }
} else {
    echo "Vul een game naam in";
}
