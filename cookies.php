<?php
setcookie("username", "edsnkvn", time()+(86400*2));
setcookie("password", "password", time()+(86400*2));
setcookie("email", "email@fake.com", time()+(86400*2));
setcookie("age", 20, time()+(86400*2));

foreach($_COOKIE as $key => $value){
    echo "{$key} :  {$value}  <br>";
}
?>