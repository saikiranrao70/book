
<html>
<head><title>Login</title></head>

  <link href="./index.css" rel="stylesheet">
<?php
$sname="localhost";
$uname= "root";
$pass="saikiranrao";
$conn = new mysqli($sname, $uname, $pass);
$usern = $_POST["txt"];
$userp = $_POST["pswd"];


$sql ="use books;";
$conn->query($sql);

$sql = "SELECT username,password FROM users where username='$usern' and password='$userp';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

$user='user';
setcookie($user, $usern, time() + 86400, "/");
	
$user="./home.html";


header("location: $user");
exit();





  
}else{
echo "
<body>
<div id=\"box\">
<form action=\"index.php\" method=\"post\">
<div> <input type=\"text\" id=\"box1\" name=\"txt\" placeholder=\"username\" required=\"\"></div>
<div> <input type=\"password\" id=\"box2\" name=\"pswd\" placeholder=\"password\" required=\"\"></div>
<div id=\"p1\"><b>username:</b></div>
<div id=\"p2\"><b>password:</b></div>
<button class=\"button-15\" role=\"button\" type=\"submit\">Login</button>

<div id=\"p3\"><b><a href=\"./sign.html\">sign up</a></b></div>";
echo "<div id=\"d2\"><b>Username and Password combination does not exist</b></div>";
echo "
</form>
</div>
</body>";
}
?>

</html>