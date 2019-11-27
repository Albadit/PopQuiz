<!DOCTYPE html>
<html lang="nl">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>K*T leven en geen code leven</title>
        <link rel="stylesheet" href="css/Quinten.css">
</head>
<body>
<main>
    <?php
    session_start();
//    $_SESSION['team'] = 'Red';
    ?>
      <div>
          <figure><img src="img/music.jpeg" alt=""/></figure>
      		<form action="antwoord_verwerk.php" method="post">
                <label for="answer">
      	        	<input type="text" name="answer" placeholder="Antwoord" required="" id="answer">
                </label>
      		<input type="submit" name="Submit" id="Submit">
      		</form>
      </div>
</main>
</body>
</html>