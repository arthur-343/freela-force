<?php
include("config.php");
include("firebaseRDB.php");

if(!isset($_SESSION['user'])){
    header('location: login.php');
}
echo "<div class='php-message'>Hello ".$_SESSION['user']['name'].", welcome to my website<br>";
echo "<a href='logout.php'>Logout</a></div>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Freela-Force</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .welcome-message {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        .welcome-message h1 {
            color: #007BFF;
        }

        .welcome-message p {
            color: #333;
            font-size: 1.2em;
        }

        .user-message {
            text-align: center;
            margin-top: 20px;
        }
        .php-message {
    position: absolute;
    top: 0;
    left: 0;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}




    </style>
</head>
<body>
    <div class="welcome-message">
        <h1>Welcome to Freela-Force</h1>
        <p>Your journey starts here</p>
    </div>

</body>
</html>
