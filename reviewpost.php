<?php
require("mydbcon.php");
$cid=$_POST["caveid"];
$content=$_POST["reviewcont"];
if(!isset($_COOKIE["login"]))
{
die("<script>alert('OOPS! You must be logged in to post reviews! Please Login!');window.location.assign('index.php');</script>");
}
$uid=$_COOKIE["login"];
$chk11=mysql_query("SELECT * FROM rank WHERE uid='$uid' AND caveid='$cid' AND urank='3'");
$c11=@mysql_fetch_array($chk11);
if($c11=="")
{
	$chk111=mysql_query("SELECT * FROM uservisits WHERE caveid='$cid' AND userid='$uid'");
	$c111=@mysql_fetch_array($chk111);
	if($c111!="")$num_rows = mysql_num_rows($chk111);
	else
	$num_rows=0;
	if($num_rows>=5)
	{
	mysql_query("INSERT INTO rank (uid,caveid,urank) VALUES ('$uid','$cid','3')") or die("OOPS! An error occured in insertion of data!");
	}
	
}
mysql_query("INSERT INTO cavereview (caveid,review,uid) VALUES ('$cid','$content','$uid')") or die("OOPS! Unable to post reviews! Try Again!");
$chk=mysql_query("SELECT * FROM cavedb.user WHERE uid='$uid'") or die("OOPS! Unable to fetch data!");
$c=@mysql_fetch_array($chk);
if($c!="")
{
	mysql_query("UPDATE cavedb.user SET reviews=reviews+1 WHERE uid='$uid'") or die("OOPS! Unable to insert data!");
}
echo "<script type='text/javascript'>alert('Your Review has been posted successfully!');window.location.assign('cavereview.php?caveid=".$cid."');</script>";
?>