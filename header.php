<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Social Cave</title>
	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/hpquestion.js"></script>
	<script type="text/javascript" src="js/css_browser_selector.js"></script>
	<script type="text/javascript" src="js/categories.js"></script>
</head>
<div id="logotop"><img src="images/logo.png"></div>
<div id="pselect">
	<select>
	<option name="manipal">Manipal</option>
	</select>
</div>
<?php
if(!isset($_COOKIE["login"]))
{
echo '
<div id="lspanel">
<div id ="loginbox" style="display:none;">
<form name= "input" action= "login.php" method="post">
<input type = "text" name= "name1" placeholder="USER ID" id="id" /><br/>
<input type ="password" name = "epass" placeholder="PASSWORD" id="id" />
<input type="submit" value="Log In" id="btn">
</form>
</div>

	<img src="images/login.png" id="loginbtn"> 
	<img src="images/signup.png" id="signupbtn">
</div>';
}
else
{
require("mydbcon.php");
$uid=$_COOKIE["login"];

$var=mysql_query("SELECT * FROM cavedb.sign WHERE uid='$uid'");
$c=mysql_fetch_array($var);
$uname=$c["fname"];
echo '
<div id="lspanel">
<select id="prof">
<option value="1">'.$uname.'</option>
<option value="2">Profile</option>
<option value="3">Logout</option>
</select>
</div>';
}
?>
<div id="topmenu">
<div class="menuitem" id="home">home</div>
<div class="menuitem" id="menu2" onmouseover="myfunc1()" onmouseout="myfunc1()">categories</div>
<div class="menuitem" id="blogmenu">blog</div>
	<div id="csearch">
	<form name="namesearch" id="csform" action="namesearch.php">
		<input type="text" placeholder="Search for your favourite caves" title="Search for your favourite caves here.." name="search" style="width:230px;height:30px;position:relative;top:-12px;">
	</form></div>
	<div id="categories" style="display:none" onmouseover="myfunc1()" onmouseout="myfunc1()">
		<div id="cat1">
			<div class="cat" id="bon" name='1'>Bon Appettit</div>
			<div class="cat" id="con" name='2'>Connect with Nature</div>
			<div class="cat" id="fun" name='3'>Just for Fun</div>
			<div class="cat" id="night" name='4'>Nightlife</div>
		</div>
	</div>
</div>
<?php     
if(!isset($_COOKIE["login"]))
{
$lgn='../';

}
else$lgn=$_COOKIE["login"];
echo '
<script type="text/javascript">
	$(document).ready(function(){
		$("#loginbtn").click(function(){
			$("#loginbox").toggle();
		});
		
		$("#prof").change(function(){
			var val=$(this).val();
			switch(val)
			{
			case "2":window.location.assign("userprofile/index.php?uid='.$lgn.'");break;
			case "3":window.location.assign("logout.php");break;
			}
			
			});
	});
	</script>'; ?>