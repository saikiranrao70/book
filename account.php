<html>
<head><title>Account</title></head>
<link href="./home.css" rel="stylesheet">
<body>
<div id="header">
<a href="./home.html"><span id="tname2"><b>  Home  </b></span></a>
<a href="./cart.php"><span id="tname3"><b>  cart </b></span></a>
<a href="./logout.php"><span id="tname4"><b>  Logout  </b></span></a>
</div>
<div id="bar">
<form action="action.php" method="post">
<input type="text" id="bar1" name="txt" placeholder="change username" required="">

<button class="button-2" type="submit" name="button" value="1">change username</button>
</form>
<form action="action.php" method="post">
<hr style="width:70%;position:relative;top:90px;height:0.8px;">
<input type="text" id="bar2" name="txt" placeholder="change password" required="">

<button class="button-3" type="submit" name="button" value="2">change password</button>
</form>
<form action="action.php" method="post">
<hr style="width:70%;position:relative;top:140px;height:0.8px;">
<input type="text" id="bar3" name="txt" placeholder="change email" required="">

<button class="button-4" type="submit" name="button" value="3">change email</button>
</from>
</div>
</body>
</html>