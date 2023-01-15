<?php
$man=$_POST["search"];
$use="search";
setcookie($use, $man, time() + 86400, "/");

$s=0;
$ai=curl_init();

$c=$_COOKIE['search'];
$url="https://www.googleapis.com/books/v1/volumes?q=".$man."&maxResults=8";

curl_setopt($ai,CURLOPT_URL,$url);
curl_setopt($ai,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ai, CURLOPT_SSL_VERIFYPEER, FALSE);
$ai1=curl_exec($ai);
?>

<html>
<head><title>Home</title></head>
<link href="./home.css" rel="stylesheet">
<style>
.buttonp {
background-color: #000099; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
border-radius: 15px;
width:50%;
height:15%;
margin-left:25%;
position:relative;
top:5px;
}

.button2 {} /* Blue */
.button3 {} /* Red */ 
.button4 {} /* Gray */ 
.button5 {} /* Black */
</style>
<body style="background-image: linear-gradient(to right, #1f066b, #1f066b, #1f066b, #1f066b, #1f066b, #14247e, #043b8f, #00509e, #277eb7, #66aaca, #abd4de, #f3fcfc);">
<div id="header">
<a href="./account.php"><span id="tname2"><b>  Account  </b></span></a>
<a href="./cart.php"><span id="tname3"><b>  cart </b></span></a>
<a href="./logout.php"><span id="tname4"><b>  Logout  </b></span></a>
</div>
<form action="./home.php" method="post">
<div id="box">
<input type="text" id="box1" name="search" placeholder="search" required=""/>
<button class="button-26" type="submit">search</button>
</div>
</form>

<?php

$ai2=json_decode($ai1);

$ai3=(array) $ai2;

?>
<b>
<div id="par">
<img src="./pics/ezgif-3-cc53b144ab.jpg" style="width:100%; height:65%;
border-radius: 15px;">
<p id="p"><?php  
$ai4=(array)$ai3['items'][$s];

$ai5=(array)$ai4['volumeInfo'];
echo $ai5['title'];
$s=$s+1;
 ?></p>
<form action="./home1.php" method="post">
<button class="buttonp" type="submit" name="button" value="<?php echo $ai5['title']?>">Add</button>
</form>
</div>

<div id="par1">
<img src="./pics/ezgif-3-cc53b144ab.jpg" style="width:100%; height:65%;
border-radius: 15px;">
<p id="p"><?php  
$ai4=(array)$ai3['items'][$s];

$ai5=(array)$ai4['volumeInfo'];
echo $ai5['title'];
$s=$s+1;
 ?></p>
<form action="./home1.php" method="post">
<button class="buttonp" type="submit" name="button" value="<?php echo $ai5['title']?>">Add</button>
</form>
</div>

<div id="par2">
<img src="./pics/ezgif-3-cc53b144ab.jpg" style="width:100%; height:65%;
border-radius: 15px;">
<p id="p"><?php  
$ai4=(array)$ai3['items'][$s];

$ai5=(array)$ai4['volumeInfo'];
echo $ai5['title'];
$s=$s+1;
 ?></p>
<form action="./home1.php" method="post">
<button class="buttonp" type="submit" name="button" value="<?php echo $ai5['title']?>">Add</button>
</form>
</div>

<div id="par3">
<img src="./pics/ezgif-3-cc53b144ab.jpg" style="width:100%; height:65%;
border-radius: 15px;">
<p id="p"><?php  
$ai4=(array)$ai3['items'][$s];

$ai5=(array)$ai4['volumeInfo'];
echo $ai5['title'];
$s=$s+1;
 ?></p>
<form action="./home1.php" method="post">
<button class="buttonp" type="submit" name="button" value="<?php echo $ai5['title']?>">Add</button>
</form>
</div>

<div id="par4">
<img src="./pics/ezgif-3-cc53b144ab.jpg" style="width:100%; height:65%;
border-radius: 15px;">
<p id="p"><?php  
$ai4=(array)$ai3['items'][$s];

$ai5=(array)$ai4['volumeInfo'];
echo $ai5['title'];
$s=$s+1;
 ?></p>
<form action="./home1.php" method="post">
<button class="buttonp" type="submit" name="button" value="<?php echo $ai5['title']?>">Add</button>
</form>
</div>

<div id="par5">
<img src="./pics/ezgif-3-cc53b144ab.jpg" style="width:100%; height:65%;
border-radius: 15px;">
<p id="p"><?php  
$ai4=(array)$ai3['items'][$s];

$ai5=(array)$ai4['volumeInfo'];
echo $ai5['title'];
$s=$s+1;
 ?></p>
<form action="./home1.php" method="post">
<button class="buttonp" type="submit" name="button" value="<?php echo $ai5['title']?>">Add</button>
</form>
</div>

<div id="par6">
<img src="./pics/ezgif-3-cc53b144ab.jpg" style="width:100%; height:65%;
border-radius: 15px;">
<p id="p"><?php  
$ai4=(array)$ai3['items'][$s];

$ai5=(array)$ai4['volumeInfo'];
echo $ai5['title'];
$s=$s+1;
 ?></p>
<form action="./home1.php" method="post">
<button class="buttonp" type="submit" name="button" value="<?php echo $ai5['title']?>">Add</button>
</form>
</div>

<div id="par7">
<img src="./pics/ezgif-3-cc53b144ab.jpg" style="width:100%; height:65%;
border-radius: 15px;">
<p id="p"><?php  
$ai4=(array)$ai3['items'][$s];

$ai5=(array)$ai4['volumeInfo'];
echo $ai5['title'];
$s=$s+1;
 ?></p>
<form action="./home1.php" method="post">
<button class="buttonp" type="submit" name="button" value="<?php echo $ai5['title']?>">Add</button>
</form>
</div>
</b>

<?php
curl_close($ai);

?>
</body></html>