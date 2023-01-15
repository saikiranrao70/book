<?php
$user="user";
$usern=$_COOKIE[$user];
setcookie($usern, $usern, time() - 86400, "/");
$userh="./index.html";


header("location: $userh");
exit();

?>