<?php
include("./database.php")
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    
<p>hey am edison</p>
</body>
</html> -->
<?php
$username = "Gatanazi";
$pswd = "incorrect";
$hash = password_hash($pswd, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users(username, password) VALUES ('edsnking', '1234')";
$sql = "INSERT INTO users(username, password) VALUES ('$username', '$hash')"; 
$sql1 = "SELECT * FROM users ";


try{

    $result = mysqli_query($conn, $sql1);
    // echo" user registered successfully";
    if(mysqli_num_rows($result) >0){
        while($row = mysqli_fetch_assoc($result)){
        echo $row["id"] ."<br>";
        echo $row["username"] ."<br>";
        echo $row["password"] ."<br>";
        echo $row["reg_date"] ."<br> <br>";
        echo"----------<br>";
        };
    }


}
catch(mysqli_sql_exception){
    // echo "could not register";
    echo "no user found";
}
mysqli_close($conn);
?>