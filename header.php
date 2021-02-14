<!doctype html>

<?php
    session_start();
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of meta description . This will often show up in search results.">
        <meta name="viewport" content="width=device-width, initial-scale1">
        <link rel="stylesheet" href="loginstylesheet.css">
        <title></title>
    </head>
    <body>
        <header>
            <nav>
                <a href="#">
                    <img class="image" src="img/newlogo.png" alt="logo">
                </a>
<!--
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">About me</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> 
-->
                    <div>
                        <form class ="form1" action="includes/login.inc.php" method="post">
                            <input class="abcd" type="text" name="mailuid" placeholder="Username/E-mail..."><br>
                            <input class="abcd" type="password" name="pwd" placeholder="Password..."><br>
                            <button class="owl" type="submit" name="login-submit">Login</button>
                        </form>
                        <a href="signup.php"><h2>Signup</h2></a>
                        <form class="form2" action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                        </form>
                    </div>
<!--                </ul>-->
            </nav>
        </header>
    </body>
</html>