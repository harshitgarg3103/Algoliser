<html>
<head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of meta description . This will often show up in search results.">
        <meta name="viewport" content="width=device-width, initial-scale1">
        <link rel="stylesheet" href="loginstylesheet.css">
</head>

<?php
    require "header.php"
?>

<main>
    <h1>Signup</h1>
    <h4>
    <?php
    if(isset($_GET['error'])){
        if($_GET["error"] == "emptyfields") {
            echo 'Fill in all the fields!' ;
        }
        else if($_GET["error"] == "invaliduidmail"){
            echo 'Fill in all the fields!';
        }
        else if($_GET["error"] == "invalimail"){
            echo 'Invalid email';
        }
        else if($_GET["error"] == "invaliduid"){
            echo 'Invalid Username';
        }
        else if($_GET["error"] == "passwordcheck"){
            echo 'your passwords do no match!';
        }
        else if($_GET["error"] == "usertaken"){
            echo 'Username is already taken!';
        }

    }
//    else if($_GET["sign_up"] == "success"){
//        echo 'Sign up Successfull';
//    }
?>
    </h4>
    <form class="form3" action="includes/signup.inc.php" method="post">
        <input class="xyz" type="text" name="uid" placeholder="Username"><br>
        <input class="xyz" type="text" name="mail" placeholder="E-mail"><br>
        <input class="xyz" type="password" name="pwd" placeholder="Password"><br>
        <input class="xyz" type="password" name="pwd-repeat" placeholder="Repeat password"><br>
        <button class="cat" type="submit" name="signup-submit">Sign up</button>
    </form>
</main>

<?php
   require "footer.php"     
?>   
    
</html>