<?php
$friends = array("edsn", "kvn","bbx", "dx", "dtc", "jas");
array_shift($friends);
array_pop($friends);
$friends[6] = "cdx";
array_push($friends, "mosh");
echo " we have "; 
echo count($friends) ." friends <br>";
foreach($friends as $friend){
    echo $friend ."<br>";
}
?>