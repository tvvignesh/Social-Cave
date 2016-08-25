<?php
require("mydbcon.php");
   $var=$_POST["name1"];
   $pass=$_POST["epass"];
   $pass=md5($pass);
   $chk2=mysql_query("SELECT * FROM cavedb.sign WHERE flag='1' AND emailid='$var' AND password='$pass'") or die(mysql_error());
   $c=@mysql_fetch_array($chk2);
   if($c!="")
   {
		$rid=mt_rand(0,99999);
		mysql_query("UPDATE cavedb.sign SET randid='$rid' WHERE emailid='$var'") or die("OOPS! Unable to login! Contact the Web Admin!");
		setcookie("randid",$rid,0);
		$uid=$c["uid"];
		setcookie("login",$uid,0);
		echo "<script>alert('You are logged in');window.location.assign('index.php');</script>";
   }
else
echo "<script>alert('Sorry! Access denied! If you have already registered for an account, check your email for the verification link!');window.location.assign('index.php');</script>";
?>