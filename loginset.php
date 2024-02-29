<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check input data</title>
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
    <form action="./loginset.php" method="post">
        <label for="usename">username</label> <br>
        <input type="text" name="username" id="username"> <br>
        <label for="pswd"> password </label><br>
        <input type="password" name="password" id="password"> <br>
        <input type="radio" name="gender"  value="male"> Male <br>
        <input type="radio" name="gender"  value="female"> Female <br>
        <input type="submit" value="submit" name="submit"> 
    </form>
</body>
</html>

<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $pswd = $_POST["password"];
    // echo " you clicked me !! <br>";
    // foreach($_POST as $key => $value){
    //     echo" {$key} = {$value} <br>";
    if(empty($pswd) && empty($username)){
        echo"   WTF ARRE U !! you are trying to login with out credential";
    }
    elseif(empty($username)){
        echo" my guy how i call you with out any user name";
    }
    elseif(empty($pswd)){
        echo " this is protected stuff you must provide password to know if you are exact who  we expect";
    }
    else{

        echo "welcome back {$username} <br>";
    }
    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
        if($gender == "male"){
            echo " you are handsome";
        }
        elseif($gender == "female"){
            echo " you are beatfull";
         }
        }
  else{
            echo "what is you gender please !";
            }
}

?>