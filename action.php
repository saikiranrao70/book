<?php
$a = $_POST["txt"];
$s = $_POST["button"];
$d=$_COOKIE['user'];
$cookie_name = "user";
$sname="localhost";
$uname= "root";
$pass="saikiranrao";
$conn = new mysqli($sname, $uname, $pass);
$sql ="use books;";

$conn->query($sql);

switch ($s) {
  case 1:
$sql ="UPDATE users SET username='$a' WHERE username = '$d';";
$conn->query($sql);

setcookie($cookie_name, $a, time() + 86400, "/");
    break;
  case 2:
$sql ="UPDATE users SET password='$a' WHERE username = '$d';";
$conn->query($sql);

    break;
  case 3:
$sql ="UPDATE users SET email='$a' WHERE username = '$d';";
$conn->query($sql);

    break;
  }
echo "
<html>
<head><title>Account</title></head>
<link href=\"./home.css\" rel=\"stylesheet\">
<body>
<div id=\"header\">
<a href=\"./home.html\"><span id=\"tname2\"><b>  Home  </b></span></a>
<a href=\"./cart.php\"><span id=\"tname3\"><b>  cart </b></span></a>
<a href=\"./logout.php\"><span id=\"tname4\"><b>  Logout  </b></span></a>
</div>
<div id=\"bar\">
<form action=\"action.php\" method=\"post\">
<input type=\"text\" id=\"bar1\" name=\"txt\" placeholder=\"change username\" required=\"\">

<button class=\"button-2\" type=\"submit\" name=\"button\" value=\"1\">change username</button>
</form>
<form action=\"action.php\" method=\"post\">
<hr style=\"width:70%;position:relative;top:90px;height:0.8px;\">
<input type=\"text\" id=\"bar2\" name=\"txt\" placeholder=\"change password\" required=\"\">

<button class=\"button-3\" type=\"submit\" name=\"button\" value=\"2\">change password</button>
</form>
<form action=\"action.php\" method=\"post\">
<hr style=\"width:70%;position:relative;top:140px;height:0.8px;\">
<input type=\"text\" id=\"bar3\" name=\"txt\" placeholder=\"change email\" required=\"\">

<button class=\"button-4\" type=\"submit\" name=\"button\" value=\"3\">change email</button>
</from>
</div>
</body>
</html>";

?>