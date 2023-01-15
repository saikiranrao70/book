<?php
$d=$_COOKIE['user'];
$cookie_name = "user";
$sname="localhost";
$uname= "root";
$pass="saikiranrao";
$conn = new mysqli($sname, $uname, $pass);
$sql ="use books;";

$conn->query($sql);
$sql ="select * from usersc where users='$d';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<html>
<head><title>Home</title></head>
<style>
#p{
position:relative;
top:20px;
}
</style>
<link href="./home.css" rel="stylesheet">
<body style="background-image: linear-gradient(to right, #1f066b, #1f066b, #1f066b, #1f066b, #1f066b, #14247e, #043b8f, #00509e, #277eb7, #66aaca, #abd4de, #f3fcfc);">
<div id="header">
<a href="./home.html"><span id="tname2"><b>  Home  </b></span></a>
<a href="./account.php"><span id="tname3"><b>  Account </b></span></a>
<a href="./logout.php"><span id="tname4"><b>  Logout  </b></span></a>
</div>
<div id="cart"><b>Cart</b></div>

<b>
<?php
if($result->num_rows > 0){
echo "<div id=\"par\">
<img src=\"./pics/ezgif-3-cc53b144ab.jpg\" style=\"width:100%; height:65%;
border-radius: 15px;\">
<p id=\"p\">".$row["books"]."</p>
</div>";
$row = $result->fetch_assoc();
}?>

<?php
if($result->num_rows > 1){
echo "<div id=\"par1\">
<img src=\"./pics/ezgif-3-cc53b144ab.jpg\" style=\"width:100%; height:65%;
border-radius: 15px;\">
<p id=\"p\">".$row["books"]."</p>
</div>";
$row = $result->fetch_assoc();
}?>

<?php
if($result->num_rows > 2){
echo "
<div id=\"par2\">
<img src=\"./pics/ezgif-3-cc53b144ab.jpg\" style=\"width:100%; height:65%;
border-radius: 15px;\">
<p id=\"p\">".$row["books"]."</p>
</div>";
$row = $result->fetch_assoc();
}?>

<?php
if($result->num_rows > 3){
echo "<div id=\"par3\">
<img src=\"./pics/ezgif-3-cc53b144ab.jpg\" style=\"width:100%; height:65%;
border-radius: 15px;\">
<p id=\"p\">".$row["books"]."</p>
</div>";
$row = $result->fetch_assoc();
}?>

<?php
if($result->num_rows > 4){
echo "<div id=\"par4\">
<img src=\"./pics/ezgif-3-cc53b144ab.jpg\" style=\"width:100%; height:65%;
border-radius: 15px;\">
<p id=\"p\">".$row["books"]."</p>
</div>";
$row = $result->fetch_assoc();
}?>

<?php
if($result->num_rows >5){
echo "<div id=\"par5\">
<img src=\"./pics/ezgif-3-cc53b144ab.jpg\" style=\"width:100%; height:65%;
border-radius: 15px;\">
<p id=\"p\">".$row["books"]."</p>
</div>";
$row = $result->fetch_assoc();
}?>

<?php
if($result->num_rows > 6){
echo "<div id=\"par6\">
<img src=\"./pics/ezgif-3-cc53b144ab.jpg\" style=\"width:100%; height:65%;
border-radius: 15px;\">
<p id=\"p\">".$row["books"]."</p>
</div>";
$row = $result->fetch_assoc();
}?>

<?php
if($result->num_rows > 7){
echo "<div id=\"par7\">
<img src=\"./pics/ezgif-3-cc53b144ab.jpg\" style=\"width:100%; height:65%;
border-radius: 15px;\">
<p id=\"p\">".$row["books"]."</p>
</div>";
$row = $result->fetch_assoc();

}?>


</b>
</body>
</html>