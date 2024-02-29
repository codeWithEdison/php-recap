<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condition </title>
</head>
<body>
    <form action="condition.php" method="post">
        <label for="number">Enter a Positve</label>
        <input type="text" name="num">
        <input type="submit" value="output">
    </form>
</body>
</html>
<?php
$number = $_POST["num"];
echo "<br>";
if(!$number){
    echo "nothing entered";
}
else{
    echo "you enter:  {$number} <br>";
    if($number >=18){
        echo "if this is your age  u will be old enough  to take any action <br>";
    }
    else{
        echo "if this is your age you were too young even law can not penish you <br>";
    };;

    echo "-------counter up to {$number} -------------- <br>";
for($i = 0 ; $i <=$number; $i++){
echo "number {$i} <br>";
}
}

?>