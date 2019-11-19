<?php
if(isset($_POST['inlog'])) {
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    error_reporting(E_ALL);
    error_reporting(-1);
    ini_set('error_reporting', E_ALL);
    // als er op de submit button wordt gedrukt
    require_once 'config_test.php';

    $username = $_POST['username'];
    $password = sha1($_POST['password']);
//    $password = sha1($_POST['password']);
    if (strlen($username) > 0 && strlen($password) > 0) {
        $query = "SELECT * FROM `User` WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($mysqli, $query);
        //var_dump($query);
        if (mysqli_num_rows($result) == 1) {
            session_start();
            //phpinfo();
            $row = mysqli_fetch_array($result);
            $level = $row['level'];
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $level;
            flush();
            header("Location:index.php");
            exit();


            //var_dump($result);
        }
    } else {
        echo "Niet alles is ingevuld!!!";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen | Pop Quiz</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/syle.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<div class="Grid-pane">
    <div class="Jumbotron FlexEmbed FlexEmbed-ratio FlexEmbed-ratio--3by1 u-bgCover"
        style="background-image: url(img/collage-2020.jpg)">
        <div class="FlexEmbed-content">
            <a class="Site-logo u-posAbsolute" href="/">
                <img src="img/logo-2020.png" alt="Grafisch Lyceum ">
            </a>
            <div class="Grid u-sizeMax u-sizeMax--large">
                <div class="Grid-row Arrange Arrange--bottom">
                    <div class="Grid-cell u-sizeFull Arrange-sizeFit">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<body>
<div class="Grid-pane Grid-pane--right">
    <div>
        <div class="Grid u-sizeMax PageIntro">
            <div class="Grid-row u-marginTop">
                <div class="Grid-cell u-sizeFull">
                    <h1 class="h2">Inloggen</h1>
                    <div class="TextPlus TextIntro">
                        <div class="grid">
                            <form method="POST" class="form login" action="#">
                                <div class="form__field">
                                    <label for="login__username">
                                        <svg class="icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>
                                        </svg>
                                        <span class="hidden">Username</span>
                                    </label>
                                    <input id="login__username" type="text" name="username" class="form__input" placeholder="Gebruikersnaam" required>
                                </div>

                                <div class="form__field">
                                    <label for="login__password">
                                        <svg class="icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use>
                                        </svg>
                                        <span class="hidden">Password</span>
                                    </label>
                                    <input id="login__password" type="password" name="password" class="form__input" placeholder="Wachtwoord" required>
                                </div>

                                <div class="form__field">
                                    <input type="submit" name="inlog" value="log in">
                                </div>
                            </form>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
                            <symbol id="lock" viewBox="0 0 1792 1792">
                                <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
                            </symbol>
                            <symbol id="user" viewBox="0 0 1792 1792">
                                <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
                            </symbol>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="Grid-section bg-sub-0">
            <div class="Grid-section-content">
                <div class="Grid u-sizeMax">
                    <div class="Grid-row">
                        <div class="Grid-cell u-sizeFull">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    <div class="Grid-section bg-sub-1 SiteFooter">
        <div class="Grid-section-content">
            <div class="Grid u-sizeMax--medium">
                <div class="Grid-row">
                    <div class="Grid-cell u-size2of4 left">
                        <h2 class="h1 Icon icon--arrows">
                            Enter the<br>music world
                        </h2>
                    </div>
                    <div class="Grid-cell u-size2of4">
                        <img class="FooterVisual" src="img/footer.png" alt="Enter the world music">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>