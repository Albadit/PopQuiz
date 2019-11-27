<?php
//session_start();
//if(!isset($_SESSION['ID']))
//{
//	header("Location: inloggen.php");
//}
require "config_test.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Host | Pop Quiz</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/host.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>
  <header>
    <figure>
      <img src="img/Logo.png" alt="logo"/>
      <h1>HOST PAGE</h1>
    </figure>
  </header>

  <main>
    <a href="logout.php">
    <div class="box-3">
      <div class="btn btn-three">
        <span>LOGOUT</span>
      </div>
    </div>
    </a>
    <h1>GLR Pop Quiz</h1>
    <h3>Hier onder vind u de al gespeelde games</h3>
    <form action="gameVerwerk.php" method="POST">
      <div id="refresh"></div>
      <input type="text" name="gameName" placeholder="Game naam">
      <br>
      <br>
      <input type="submit" name="submit" value="Maak een nieuwe game aan">
    </form>
  </main>

  <button onclick="window.location.href='../../www.youtube.com'">Click me</button>

  <script src="js/jquery.min.js"></script>
  <script>
  $(document).ready(function() {
    $.ajaxSetup({ cache: false });
    setInterval(function() {
      $('#refresh').load('host_refresh.php');
    }, 1000);
  });
  </script>
</body>
</html>