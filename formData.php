<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            box-shadow: 0px 0px 20px gray;
            border-radius: 10px;
            padding: 20px;

        }
        label{
            font-size: 32px;
        }
        input{
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            margin: 5px;
        }
    </style>
</head>
<body>
    <form action="formData.php" method="get">

    <label for="name">UserName: </label> <br>
    <input type="text" name="name"> <br>
    <label for="pswd"> password: </label> <br>
    <input type="password" name="pswd" id="pswd"> <br>
    <input type="submit" value="Display Data">
    </form>
</body>
</html>
<?php
$name = $_GET['name'];
$password = $_GET['pswd'];


echo" hey {$name} <br>  ";
echo "your Password is : {$password} <br>";
?>
