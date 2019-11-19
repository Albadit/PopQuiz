<?php
## database logingegevens ##
$db_hostname = 'localhost';
$db_username = 'popquiz_test';
$db_password = 'qDw62a&268jBi3c$';
//--> Bijv. :: https://passwordsgenerator.net/
$db_database = 'popquiz_test';

## maak de database-verbinding ##
$mysqli = new mysqli($db_hostname, $db_username, $db_password, $db_database);

## controleer connectie ##
if ($mysqli -> connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

##  Nu zorg ik ervoor dat de bovenstaande user/pass niet later op de pagina ##
##  waar deze ge-included wordt, uitgelezen kan worden. ##
unset($DB_user, $DB_password);
?>
