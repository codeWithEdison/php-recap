<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUESS THE COUNTRY </title>
</head>
<body>
    <form action="./GuessCountry.php" method="get">
        <label for="country">
            Enter The Country:
        </label> <br>
        <input type="text" name="country" id="country"> <br>
        <input type="submit" value="Guess Catital">
    </form>
</body>
</html>
<?php
$countries = array("rwanda" => "kigali",
 "burundi" =>"bujumbura", 
 "tanzania" => "dodoma",
 "uganda" => "kampala",
 "kenya" => "nairobi");
$country = $_GET["country"];
$capital = $countries[$country];
echo "capital city of {$country} is {$capital}";
?>