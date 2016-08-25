<?php
require("mydbcon.php");
//if(!isset($_COOKIE["login"]))die("Access denied!");
//if($_COOKIE["login"]!=3012)die("Access denied!");
do
{
$caveid=mt_rand(0,9999999);
$chk=mysql_query("SELECT * FROM caveinfo WHERE caveid='$caveid'");
$c=@mysql_fetch_array($chk);
}while($c!="");
$cavename=$_POST["cavename"];
$cavetype=$_POST["cavetype"];
$address=$_POST["address"];
$fcave=$_POST["fcave"];
$io=$_POST["cityloc"];
$phone=$_POST["phone"];
if(isset($_POST["ac"]))
{
$ac=1;
}
else
$ac=0;
if(isset($_POST["bar"]))
{
$bar=1;
}
else
$bar=0;
if(isset($_POST["buffet"]))
{
$buffet=1;
}
else
$buffet=0;
if(isset($_POST["cards"]))
{
$cards=1;
}
else
$cards=0;
if(isset($_POST["dance"]))
{
$dance=1;
}
else
$dance=0;
if(isset($_POST["dinein"]))
{
$dinein=1;
}
else
$dinein=0;
if(isset($_POST["homedelivery"]))
{
$homedelivery=1;
}
else
$homedelivery=0;
if(isset($_POST["music"]))
{
$music=1;
}
else
$music=0;
if(isset($_POST["seating"]))
{
$seating=1;
}
else
$seating=0;
if(isset($_POST["veg"]))
{
$veg=1;
}
else
$veg=0;
if(isset($_POST["smoking"]))
{
$smoking=1;
}
else
$smoking=0;
if(isset($_POST["snacks"]))
{
$snacks=1;
}
else
$snacks=0;
if(isset($_POST["wifi"]))
{
$wifi=1;
}
else
$wifi=0;
$flag=0;
//PHOTO UPLOAD
if(count($_FILES['filestoUpload']['name'])) {
  foreach ($_FILES['filestoUpload']['name'] as $file) 
  {
		if ($file["error"] > 0)
	  {
	  echo "Error: " . $file["error"] . "<br />";
	  }
	else
	  {
	   move_uploaded_file($file["tmp_name"],
		  "caveuploads/" . $file["name"]);
		  $picurl="caveuploads/" . $file["name"];
		  if($flag==0)
		  {
		  $mainurl=$picurl;
		  $flag=1;
		  }
		  mysql_query("INSERT INTO cavephotos (uid,caveid,photourl) VALUES ('3012','$caveid','$picurl')");
	  }
  }
}
$option1=$_POST["opt1"];
$option2=$_POST["hangout"];
$money=$_POST["money"];
$ba=$_POST["bonapp"];
$cwn=$_POST["cwn"];
$jff=$_POST["jff"];
$nlyf=$_POST["nlyf"];
$fulldesc=$_POST["cavefulldesc"];
$menu=$_POST["menu"];
mysql_query("INSERT INTO caveinfo (cavename,caveid,cavedesc,cavephoto,featured,option1,option2,option3,phone,address,cavefulldesc,bonappetit,cwn,jff,nlyf,ac,bar,buffet,cards,delivery,music,seating,vegetarian,smoking,wifi,dance,dinein,menu,insideoutside) 
VALUES ('$cavename','$caveid','$cavetype','$mainurl','$fcave','$option1','$option2','$money','$phone','$address','$fulldesc','$ba','$cwn','$jff','$nlyf','$ac','$bar','$buffet','$cards','$delivery','$music','$seating','$veg','$smoking','$wifi','$dance','$dinein','$menu','$io')");

echo "CAVE CREATED SUCCESSFULLY!";
?>
