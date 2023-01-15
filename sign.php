<html>
<head><title>Sign up</title></head>

  <link href="./index1.css" rel="stylesheet">
<?php
$a=1;
$sname="localhost";
$uname= "root";
$pass="saikiranrao";
$conn = new mysqli($sname, $uname, $pass);
$usern = $_POST["txt"];
$usere = $_POST["email"];
$userp = $_POST["pswd"];

$sql ="use books;";

$conn->query($sql);

$sql ="select username from users where username='$usern';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$a=10;
}

$sql ="insert into users(username,email,password)values('$usern','$usere','$userp');";
if ($a==1) {
$conn->query($sql);


$user='user';
setcookie($user, $usern, time() + 86400, "/");
header("Location:./home.html");
exit();


}else{
echo "
<body>
<div id=\"box\">

				<form action=\"sign.php\" method=\"post\">
<input type=\"text\" id=\"box1\" name=\"txt\" placeholder=\"username\" required=\"\"/>
<input type=\"text\" id=\"box2\" name=\"email\" placeholder=\"email\" required=\"\"/>
<input type=\"text\" id=\"box3\" name=\"pswd\" placeholder=\"password\" required=\"\"/>
<div id=\"p1\"><b>username:</b></div>
<div id=\"p2\"><b>email:</b></div>
<div id=\"p3\"><b>password:</b></div>
<button class=\"button-15\" role=\"button\" type=\"submit\">sign up</button>";
echo "<div id=\"d2\"><b>Username is all ready used</b></div>";
echo "
</form>
<div id=\"p4\"><b><a href=\"./index.html\">login</a></b></div>

</div>
</body>";}
$conn->close();
?>
</html>