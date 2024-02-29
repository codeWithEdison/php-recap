<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDATE FORM DATA</title>
    <style>
        body{
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            flex-direction: column;

        }
        form{
            box-shadow: 0px 0px 20px gray;
        padding: 30px;
        border-radius: 8px;
        }
        input{
            border-radius: 8px;
            padding: 10px;
            font-weight: bold;
            border: 2px solid blue;
        }
    </style>
</head>
<body>
    <form action="./validate_sanitize.php" method="post">
        <label for="username">username: </label> <br>
        <input type="text" name="username" id="username"> <br>
        <label for="age">Age: </label> <br>
        <input type="text" name="age" id="age"><br>
        <label for="email">email: </label> <br>
        <input type="text" name="email" id="email"> <br>

        <input type="submit" value="login" name="login">
    </form>
</body>
</html>
<?php
$username = null;
$age = null;
$email = null;

if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST, "username",
    FILTER_SANITIZE_SPECIAL_CHARS
    );
    $age = filter_input(INPUT_POST, "age",
        FILTER_VALIDATE_INT
        );
    $email = filter_input(INPUT_POST, "email",
            FILTER_VALIDATE_EMAIL);
            if(empty($email)){
                echo "invalid email";
            }
            elseif(empty($age)){
                echo "invalid age";
            }
            else{

                echo" username : {$username} <br>";
                echo" age : {$age} <br>";
                echo" email : {$email} <br>";
            }
}

?>