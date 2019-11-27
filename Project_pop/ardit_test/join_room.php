<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(isset($_POST['join'])) {
    include_once '../config_test.php';
    $lastQuery = "SELECT `gameID` FROM `Game` WHERE 1 ORDER BY `gameID` DESC LIMIT 1";
    $resultQuery = mysqli_query($mysqli, $lastQuery);
    $resultaatQuery = mysqli_fetch_array($resultQuery);
    $gameID = $resultaatQuery['gameID'];
    $sessiecode = $_POST['Code'];
    $items = array(";", "#", "'", '"', "''", '""');
    $pattern2 = str_replace($items, '', preg_quote($sessiecode, '/'));
    $query = "SELECT `sessieCode`, `teamID` FROM `Sessie` WHERE `gameID` = '$gameID'";
    $result = mysqli_query($mysqli, $query);
    $resultaat = mysqli_fetch_array($result);
    if ($sessiecode == $resultaat['sessieCode']) {
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['teamID'] = $resultaat['teamID'];
            $_SESSION['sessiecode'] = $resultaat['sessieCode'];
            header("Location: team_choice.php");
        } else {
            echo "geen game gevonden";
        }
    } else {
        echo "geen goede code ingevoerd";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Room | Pop Quiz</title>
    <link rel="shortcut icon" href="img/Logo.png">
    <link rel="stylesheet" href="css/syle.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>
    <div class="Grid-pane">
        <div class="Jumbotron FlexEmbed FlexEmbed-ratio FlexEmbed-ratio--3by1 u-bgCover"
            style="background-image: url(img/collage-2020.jpg)">
            <div class="FlexEmbed-content">
                <a class="Site-logo u-posAbsolute" href="#">
                    <img draggable="false" src="img/Logo.png" alt="Grafisch Lyceum ">
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

    <div class="Grid-pane Grid-pane--right">
        <div class="Grid u-sizeMax PageIntro">
            <div class="Grid-row u-marginTop">
                <div class="Grid-cell u-sizeFull">
                    <h1 class="h2">Inloggen</h1 class="h2">
                    <div class="TextPlus TextIntro">
                        <div class="grid">
                            <form method="POST" class="form login" action="#">
                                <div class="form__field">
                                    <label for="login__username">
                                        <svg class="icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#code"></use>
                                        </svg>
                                        <span class="hidden">Code</span>
                                    </label>
                                    <input id="login__username" type="text" name="Code" class="form__input"
                                        placeholder="Code" maxlength="6" required>
                                </div>

                                <div class="form__field">
                                    <input type="submit" name="join" value="Join Room">
                                </div>
                            </form>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
                            <symbol id="code" viewBox="0 0 522.5 522.5">
                                <path 
                                    d="M325.8,70.5l-17.7-4.9c-2.3-0.8-4.5-0.5-6.7,0.7c-2.2,1.2-3.7,3.1-4.4,5.6L190.4,440.5c-0.8,2.5-0.5,4.8,0.7,7
                                c1.2,2.2,3.1,3.7,5.6,4.4l17.7,4.9c2.3,0.8,4.5,0.5,6.7-0.7c2.2-1.2,3.7-3.1,4.4-5.6L332,81.9c0.8-2.5,0.5-4.8-0.7-7
                                C330.1,72.7,328.2,71.3,325.8,70.5z" />
                                <path d="M166.2,142.5c0-2.5-1-4.7-2.9-6.6L149,121.6c-1.9-1.9-4.1-2.9-6.6-2.9s-4.7,1-6.6,2.9l-133,133c-1.9,1.9-2.9,4.1-2.9,6.6
                                s1,4.7,2.9,6.6l133,133c1.9,1.9,4.1,2.9,6.6,2.9s4.7-1,6.6-2.9l14.3-14.3c1.9-1.9,2.9-4.1,2.9-6.6c0-2.5-1-4.7-2.9-6.6L51.1,261.2
                                L163.3,149C165.2,147.1,166.2,144.9,166.2,142.5z" />
                                <path
                                    d="M519.6,254.7l-133-133c-1.9-1.9-4.1-2.9-6.6-2.9c-2.5,0-4.7,1-6.6,2.9l-14.3,14.3c-1.9,1.9-2.9,4.1-2.9,6.6
                                s0.9,4.7,2.9,6.6l112.2,112.2L359.2,373.4c-1.9,1.9-2.9,4.1-2.9,6.6c0,2.5,0.9,4.7,2.9,6.6l14.3,14.3c1.9,1.9,4.1,2.9,6.6,2.9
                                c2.5,0,4.7-1,6.6-2.9l133-133c1.9-1.9,2.9-4.1,2.9-6.6C522.5,258.8,521.5,256.6,519.6,254.7z" />
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
                            <h2 class="h1 Icon icon--arrows middel">
                                Enter the<br>music world
                            </h2>
                        </div>
                        <div class="Grid-cell u-size2of4">
                            <img draggable="false" class="FooterVisual" src="img/footer.png" alt="Enter the world music">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>