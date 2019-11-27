<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
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
          <a class="nav-link" href="beginscherm_user.php">Join als HOST</a>
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
        <h3>U joint als een SPELER</h3>
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="CENTER">GLR Pop quiz</h1>
    <h4 class="CENTER">Vul hier alstublieft u unieke GAME CODE in</h4>
    <form>
    <p class="CENTER"> <input type="text" name="GAME_CODE" placeholder="GAME CODE" class="Bean_Input"> </p>
    <p class="CENTER"> <input type="submit" name="submit" value="Join!" class="Green_Bean"> </p>
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