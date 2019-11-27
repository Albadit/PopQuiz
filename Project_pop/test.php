<?php
require 'config_test.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$antwoord = $_POST['antwoord'];
$value = '';
$nummerAnt = count($antwoord);
$a = 0;

$query = "INSERT INTO AntwoordRed (ID, antwoord0, antwoord1, antwoord2, antwoord3) VALUES (NULL, '', '', '', '')";
$result = mysqli_query($mysqli, $query);

$query2 = "SELECT `ID` FROM `AntwoordRed` WHERE `ID` ORDER BY `ID` DESC LIMIT 1";
$result2 = mysqli_query($mysqli, $query2);
$resultaat2 = mysqli_fetch_array($result2);
$lastID = $resultaat2['ID'];
echo $lastID;

while ($a < $nummerAnt) {
  $antwoord2 = 'antwoord' . $a;
  $update = "UPDATE `AntwoordRed` SET `$antwoord2`= '$antwoord[$a]' WHERE ID = '$lastID'";
  $result3 = mysqli_query($mysqli, $update);
  $a++;
}
var_dump($update);
echo "<br><br><br>";
//while ($a < $nummerAnt) {
//  $value .= '"' . $antwoord[$a] . '", ';
//  $a++;
//}
//var_dump($value);
//echo "<br><br>" . $value;


//$query = "INSERT INTO AntwoordRed (ID, antwoord0, antwoord1, antwoord2, antwoord3) VALUES (NULL, $value)";
//$result = mysqli_query($mysqli, $query);


// $data = array();
//
// array_push($data, $antwoord);
//
// print_r($data);



// while ($a <= $nummerAnt) {
//   $url .= $antwoord[$i];
//   $a++
// }

// foreach ($_POST['antwoord'] as $j => $antwoord)
// {
//   $i=0;
//   $url .= ($j[$i]);
//
//
//
// while($i <= 3)
// {
//   $i++;
// }
// }


// $antwoord_array = array(
//   "0" => array($antwoord[0])
//   "1" => array($antwoord[1])
//   "2" => array($antwoord[2])
//   "3" => array($antwoord[3])
// );

// function option1($data, $mysqli)
// {
//   if(is_array($data))
//   {
//     foreach ($data as $row => $value)
//     {
//       $antwoord0 = ($mysqli, $value[0]);
//       $antwoord1 = ($mysqli, $value[1]);
//       $antwoord2 = ($mysqli, $value[2]);
//       $antwoord3 = ($mysqli, $value[3]);
//
//       $sql = "INSERT INTO AntwoordRed(antwoord0, antwoord1, antwoord2, antwoord3)
//               VALUES('".$antwoord0."', '".$antwoord1."', '".$antwoord2."', '".$antwoord3."')"
//
//       mysqli_query($mysqli, $sql)
//     }
//   }
// }
//
// $query = "INSERT INTO `AntwoordRed` (`ID`, `antwoord0`, `antwoord1`, `antwoord2`, `antwoord3`)
// VALUES (NULL, '$antwoord[$i]', '$antwoord[$i]', '$antwoord[$i]', '$antwoord[$i]');";

// $antwoord = $_POST['antwoord']);
//
//     $DataArr = array();
//
//         $antwoord0 = ($antwoord[0]);
//         $antwoord1= ($antwoord[1]);
//         $antwoord2 = ($antwoord[2]);
//         $antwoord3 = ($antwoord[3]);
//
//         $DataArr[] = "('$antwoord0', '$antwoord1', '$antwoord2', '$antwoord3')";
//
//
//     $query = "INSERT INTO AntwoordRed (antwoord0, antwoord1, antwoord2, antwoord3) values
//               VALUES (NULL, '$DataArr');";
//
//     mysqli_query($mysqli, $query);



?>
