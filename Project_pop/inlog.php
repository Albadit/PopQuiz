<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="#">
</head>
<body>
<form action="#" method="POST">
    <fieldset>
        <label for="username">Username:<input type="text" name="username" id="username" required></label>
        <label for="password">Password:<input type="password" name="password" id="password" required></label>
        <input type="submit" name="submit" value="submit">
    </fieldset>
</form>
<?php
if(isset($_POST['submit'])) {
    // als er op de submit button wordt gedrukt
    ## wel goede config
    require_once 'config.inc.php';

    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    if (strlen($username) > 0 && strlen($password) > 0) {
        ## query aanpassen
        $query = "SELECT * FROM `back2_users` WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: index.php");
        }
    } else {
        echo "Niet alles is ingevuld!!!";
        exit();
    }
}
?>
</body>
</html>