<!DOCTYPE html>
<html lang="nl">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Host</title>
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
</head>
<body>

<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Pop quiz GLR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- left navigation links -->
      <ul class="navbar-nav mr-auto">

        <!-- active navigation link -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>

        <!-- regular navigation link -->
        <li class="nav-item">
          <a class="nav-link" href="#">Over ons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pop quiz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="beginscherm_user.html">Join als HOST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="beginscherm_host.php">Join als USER</a>
        </li>
        <!-- more navigation links -->

      </ul>

      <!-- right navigation link -->
    </div>
  </div>
</nav>
<!--------->
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
         <img src="img/Logo.jpg" style="width:250px; height:250px;" alt=""/>
        <h3>HOST scherm</h3>
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="CENTER">GLR Pop quiz</h1>
    <table>
      <!--Hier kan je de while loop maken voor als hij gegevens uit de Database gaat halen en deze in een Table neer zet netjes onder elkaar-->
    </table>
    <h4 class="CENTER">Hier onder vind u de al gespeelde games</h4>
    <?php
    include_once 'config_test.php';
//
    //$query_oud = "SELECT MAX(`score`) FROM `Speler` WHERE `spelerID` IN (SELECT `teamRed` FROM `Team` WHERE `sessieCode` = 546158) OR `spelerID` IN (SELECT `teamBlue` FROM `Team` WHERE `sessieCode` = (SELECT `sessieCode` FROM `Sessie` WHERE `gameID` = 2))";
    $query = "SELECT DISTINCT `score`, `teamNaam`, `team` FROM `Speler`, `Game` WHERE `score` != 0 ORDER BY `score` DESC";
    $result = mysqli_query($mysqli, $query);
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
    <br><br><form action="gameVerwerk.php" method="POST">
          <p class="CENTER"><input type="text" name="gameName" placeholder="Game naam"></p>
    <p class="CENTER"> <input type="submit" name="submit" value="Maak een nieuwe game aan" class="Green_Bean"> </p>
    </form>
  </div>
</section>
<!-- Page Content -->
<!--------->
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Designed by Cust0m-I0 in Rotterdam, made in China</span>
  </div>
</footer>
</body>
</html>