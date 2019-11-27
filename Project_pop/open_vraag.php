<!DOCTYPE html>
<html lang="nl">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/overflow-hidder.css">
</head>
<body>
<header class="masthead_V1">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="Question_Center">
      	<div class="Center">
                              <?php
require 'config_test.php';
session_start();
$GAME_ID = $_SESSION['GAME'];
$ROUND_ID = $_SESSION['ROUND'];
//maak de query
$query = "SELECT * FROM Vraag WHERE nummer = $Vraag_Nummer";
$Ronde = "SELECT * FROM GAME WHERE ROUND = $ROUND_ID";
//vang het resultaat van de query op in 'resultaat'
$resultaat = mysqli_query($mysqli, $query);
$RoundResult = mysqli_query($mysqli, $Ronde);

$Vraag_Nummer = $rij['Vraag_Nummer'];
//als het resultaat uit 0 rijen bestaat:
if (mysqli_num_rows($resultaat) == 0)
{
  echo "<p>Er is geen ronde informatie gevonden.</p>";
}
//als er wel rijen zijn gevonden:
else
{
$rij = mysqli_fetch_array($resultaat);
$rij2 = mysqli_fetch_array($RoundResult);
    echo "<p>" . $rij['Vraag_Nummer'] . "</p>";
    echo "<div class='SPACE'> </div>";
    echo "<p>" . $rij['Vraag'] . "</p>";
    echo "<div class='SPACE'> </div>";
  }
          ?>
      		<img src="img/music.jpeg" class="rounded-circle img-fluid" alt=""/>
      		<div class="SPACE"> </div>
      		<form action="open_vraag_ontvangen_en_verzenden.php">
      		<input type="text" name="" placeholder="Antwoord" class="Long_Input" required="">
      		<div class="SPACE"> </div>
      		<button type="button" name="Submit" id="Submit" class="btn btn-success btn-lg">Verzenden</button>
      		</form>
      	</div>
      </div>
    </div>
  </div>
</header>
</body>
</html>