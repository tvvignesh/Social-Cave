<?php
require("header.php");
?>
<script type="text/javascript" src="searchscript.js"></script>
<div id="results">
<?php
$option1=$_GET["option1"];
echo "
<script type='text/javascript'>
$(document).ready(function(){
";
$f1=0;
switch($option1)
{
case 1:echo "$('#family').attr('checked',true);";break;
case 2:echo "$('#friends').attr('checked',true);";break;
case 3:echo "$('#specialone').attr('checked',true);";break;
case 4:echo "$('#coolbymyself').attr('checked',true);";break;
default:echo "});</script>Invalid Option Selected! Please try again<br>";$f1=1;break;
}
if($f1!=1)
echo "});</script>";

$option2=$_GET["option2"];

echo "
<script type='text/javascript'>
$(document).ready(function(){
";
$f1=0;
switch($option2)
{
case 1:echo "$('#broke').attr('checked',true);";break;
case 2:echo "$('#littlemaybe').attr('checked',true);";break;
case 3:echo "$('#moneynoproblem').attr('checked',true);";break;
default:echo "});</script>Invalid Option Selected! Please try again<br>";$f1=1;break;
}
if($f1!=1)
echo "});</script>";

$option3=$_GET["option3"];

echo "
<script type='text/javascript'>
$(document).ready(function(){
";
$f1=0;
switch($option3)
{
case 1:echo "$('#bonappetit').attr('checked',true);";break;
case 2:echo "$('#connectwithnature').attr('checked',true);";break;
case 3:echo "$('#justforfun').attr('checked',true);";break;
case 4:echo "$('#nightlife').attr('checked',true);";break;
default:echo "});</script>Invalid Option Selected! Please try again<br>";$f1=1;break;
}
if($f1!=1)
echo "});</script>";

$var1=0;
$var2=5;
if(isset($_GET["start"])&&isset($_GET["end"]))
{
$var1=$_GET["start"]+5;
$var2=$_GET["end"]+5;
}

require("mydbcon.php");

$ba=$ac=$bar=$buffet=$cards=$delivery=$music=$outseat=$veg=$smoking=$wifi=$cwn=$jff=$nlyf=$dance=$dinein=0;
if(isset($_GET["ba"]))
{
$ba=$_GET["ba"];
}
if(isset($_GET["ac"]))
{
$ac=$_GET["ac"];
}
if(isset($_GET["bar"]))
{
$bar=$_GET["bar"];
}
if(isset($_GET["buffet"]))
{
$buffet=$_GET["buffet"];
}
if(isset($_GET["cards"]))
{
$cards=$_GET["cards"];
}
if(isset($_GET["delivery"]))
{
$delivery=$_GET["delivery"];
}
if(isset($_GET["music"]))
{
$music=$_GET["music"];
}
if(isset($_GET["outseat"]))
{
$outseat=$_GET["outseat"];
}
if(isset($_GET["veg"]))
{
$veg=$_GET["veg"];
}
if(isset($_GET["smoking"]))
{
$smoking=$_GET["smoking"];
}
if(isset($_GET["wifi"]))
{
$wifi=$_GET["wifi"];
}
if(isset($_GET["cwn"]))
{
$cwn=$_GET["cwn"];
}
if(isset($_GET["jff"]))
{
$jff=$_GET["jff"];
}
if(isset($_GET["nlyf"]))
{
$nlyf=$_GET["nlyf"];
}
if(isset($_GET["dance"]))
{
$dance=$_GET["dance"];
}
if(isset($_GET["dinein"]))
{
$dinein=$_GET["dinein"];
}

echo "
<script type='text/javascript'>
$(document).ready(function(){
";
switch($ba)
{
case 1:echo "$('#bakery').attr('checked',true);";break;
case 2:echo "$('#Cafe').attr('checked',true);";break;
case 3:echo "$('#fastfood').attr('checked',true);";break;
case 4:echo "$('#dinein').attr('checked',true);";break;
}
switch($ac)
{
case 1:echo "$('input[name=facilities_1]').attr('checked',true);";break;
}
switch($bar)
{
case 1:echo "$('input[name=facilities_2]').attr('checked',true);";break;
}
switch($buffet)
{
case 1:echo "$('input[name=facilities_3]').attr('checked',true);";break;
}
switch($cards)
{
case 1:echo "$('input[name=facilities_4]').attr('checked',true);";break;
}
switch($delivery)
{
case 1:echo "$('input[name=facilities_5]').attr('checked',true);";break;
}
switch($music)
{
case 1:echo "$('input[name=facilities_6]').attr('checked',true);";break;
}
switch($outseat)
{
case 1:echo "$('input[name=facilities_7]').attr('checked',true);";break;
}
switch($veg)
{
case 1:echo "$('input[name=facilities_8]').attr('checked',true);";break;
}
switch($smoking)
{
case 1:echo "$('input[name=facilities_9]').attr('checked',true);";break;
}
switch($wifi)
{
case 1:echo "$('input[name=facilities_10]').attr('checked',true);";break;
}
switch($cwn)
{
case 1:echo "$('#greenery').attr('checked',true);";break;
case 2:echo "$('#worshipplace').attr('checked',true);";break;
case 3:echo "$('#waterbody').attr('checked',true);";break;
}
switch($jff)
{
case 1:echo "$('#gamingzone').attr('checked',true);";break;
case 2:echo "$('#movietheatre').attr('checked',true);";break;
case 3:echo "$('#poolsnooker').attr('checked',true);";break;
case 4:echo "$('#sports').attr('checked',true);";break;
}
switch($nlyf)
{
case 1:echo "$('#discotheque').attr('checked',true);";break;
case 2:echo "$('#bar1').attr('checked',true);";break;
}
switch($ac)
{
case 1:echo "$('input[name=facilities_11]').attr('checked',true);";break;
}
switch($cards)
{
case 1:echo "$('input[name=facilities_12]').attr('checked',true);";break;
}
switch($dance)
{
case 1:echo "$('input[name=facilities_13]').attr('checked',true);";break;
}
switch($dinein)
{
case 1:echo "$('input[name=facilities_14]').attr('checked',true);";break;
}
switch($music)
{
case 1:echo "$('input[name=facilities_15]').attr('checked',true);";break;
}
switch($outseat)
{
case 1:echo "$('input[name=facilities_16]').attr('checked',true);";break;
}
switch($smoking)
{
case 1:echo "$('input[name=facilities_17]').attr('checked',true);";break;
}
echo "});</script>";
$var=mysql_query("SELECT * from cavedb.caveinfo where option1='$option1' AND option2='$option2' AND option3='$option3' AND bonappetit='$ba' AND ac='$ac' AND bar='$bar' AND buffet='$buffet' AND cards='$cards' AND delivery='$delivery' AND music='$music' AND seating='$outseat' AND vegetarian='$veg' AND smoking='$smoking' AND wifi='$wifi' AND cwn='$cwn' AND jff='$jff' AND nlyf='$nlyf' AND dance='$dance' AND dinein='$dinein' ORDER BY featured DESC") or die("OOPS! Unable to search! Try again!".mysql_error());
$no=0;
while($c=@mysql_fetch_array($var,MYSQL_ASSOC))
{
$no++;
$id=$c["caveid"];
$feat=$c["featured"];
echo"<div class='us' id='".$c["caveid"]."'><font color='red' style='font-family: myFirstFont;font-size:44px;'>".$c["cavename"]."</font><br>".$c["cavedesc"]."<br><table cellspacing='5px'><tr><td><font color='red'>Address: </font></td><td>".$c["address"]."</td><br></tr><tr><td><font color='red'>Phone: </font></td><td>".$c["phone"].
"</td></tr><tr><td><font color='red'>Cave Rating: </font></td><td>".round($c["totalrating"]/$c["noofrates"],2)."  (".$c["noofrates"]." Votes)
</td></tr><tr><td><font color='red'>Share on: </font></td><td><a href='http://www.facebook.com/sharer.php?u=http://www.thesocialcave.com/caveprofile.php?caveid=$id' title='Share on Facebook...' target='_blank'>
<img height='27px' width='27px' src='images/fblogo.png'>
</a>
<a href='http://twitter.com/home?status=http://www.thesocialcave.com/caveprofile.php?caveid=$id' target='_blank'>
<img height='30px' width='30px' src='images/twtlogo.png'>
</a>
</td><td>| ".$c["visits"]."Visitors</td></tr></table>
<img src='images/featured.png' style='position:relative;top:-240px;left:585px;display:none;' class='fpic'>
<img src='images/caveofweek.png' height='210' style='position:relative;top:-280px;left:270px;'>
";
echo "</div><br>";
if($feat==1)
{
echo "
<script type='text/javascript'>
$('#".$id." img.fpic').css('display','block');
</script>";
}

}
if($no==0)
{
echo "Sorry! There are no results to show! Please change your search criteria and try again!";
}
echo "</div><div id='showmore'><a style='color:red' href='categories.php?start=".$var1."+&end=".$var2."+&option3=".$option3."+&option2=".$option2."+&option1=".$option1."'>Show More</a></div>";
?>


<html>
<head>
<link href="css_search.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
</head>
<title> Search results </title>
<body>

<div class="searchtop" style="position:absolute;top:-1px;"> Search Results </div>
<div class="left" style="position:absolute;top:195px;">
  <div class="modify">
    
  <font color="#FF0000"><center><strong>Modify Your Search
  </strong></center></font><br>
    <form name="sresult" id="sresult">
  <div >
  <p class="heading"> Who do you want to hangout with? </p>
  <input name="hangout" type="radio" id="family" value='1'> Family <br>
  <input name="hangout" type="radio" id="friends" value='2'> Friends<br>
  <input name="hangout" type="radio" id="specialone" value='3'>The Special One<br>
  <input name="hangout" type="radio" id="coolbymyself" value='4'> Cool By Myself<br>
  </div>
  <div>
  <p class="heading" > How much do you want to <br>spend ?</p>
  <input name="spend"  type="radio" id="broke" value='1'> I'm Broke <br>
  <input name="spend"  type="radio" id="littlemaybe" value='2'> A Little Maybe <br>
  <input name="spend"  type="radio" id="moneynoproblem" value='3'> Money No problem <br>
  </div>
    
  <div> 
  <p class="heading" > What do you want to do? </p>
  <input name="wantdo" type="radio" id="bonappetit" value='1'> Bon Appetit<br>
  <input name="wantdo" type="radio" id="connectwithnature" value='2'> Connect with Nature<br>
  <input name="wantdo" type="radio" id="justforfun" value='3'> Just for Fun<br>
  <input name="wantdo" type="radio" id="nightlife" value='4'> Nightlife<br>
  </div>
  
  <div id="CollapsiblePanel1" class="CollapsiblePanel">
     <div class="CollapsiblePanelTab" tabindex="0"><font color="#FF0000"><center><strong>Advanced Options</strong></center></font></div>
     <div class="CollapsiblePanelContent">
	 <p class="heading"> Bon Appetit </p>
	 <input name="appetit" type="radio" id="bakery" value='1'> Bakery <br>
	 <input name="appetit" type="radio" id="Cafe" value='2'> Cafe <br>
	 <input name="appetit" type="radio" id="fastfood" value='3'> Fast Food <br>
	 <input name="appetit" type="radio" id="dinein" value='4'> Dine-In Restaurant <br>
	      <div class="facilities" > <p class="heading">Facilities Available </p>
	      <input name="facilities_1" type="checkbox" id="ac"> Air Conditioner <br>
	      <input name="facilities_2" type="checkbox" id="bar"> Bar<br>
	      <input name="facilities_3" type="checkbox" id="buffet"> Buffet<br>
	      <input name="facilities_4" type="checkbox" id="cards"> Cards Accepted <br>
	      <input name="facilities_5" type="checkbox" id="Home delivery"> Home Delivery <br>
	      <input name="facilities_6" type="checkbox" id="music"> Music <br>
	      <input name="facilities_7" type="checkbox" id="outseat"> Outdoor Seating <br>
	      <input name="facilities_8" type="checkbox" id="Pure veg"> Pure Vegetarian <br>
	      <input name="facilities_9" type="checkbox" id="smoking"> Smoking Allowed <br>
	      <input name="facilities_10" type="checkbox" id="WiFi"> WiFi <br>
	      </div>
	<p class="heading"> Connect With Nature	 </p>
    <input name="nature" type="radio" id="greenery" value='1'> Greenery <br>	
	<input name="nature" type="radio" id="worshipplace" value='2'> Worship Place<br>	
	<input name="nature" type="radio" id="waterbody" value='3'> Water Body <br>	
	<p class="heading" > Just for Fun </p>
	<input name="fun" type="radio" id="gamingzone" value='1'> Gaming Zone <br>
	<input name="fun" type="radio" id="movietheatre" value='2'> Movie Theatre <br>
	<input name="fun" type="radio" id="poolsnooker" value='3'>Pool & Snooker <br>
   	<input name="fun" type="radio" id="sports" value='4'> Sports <br>  
	<p class="heading"> Nightlife </p>
	<input name="nightlife" type="radio" id="discotheque" value='1'> Discotheque <br>
	<input name="nightlife" type="radio" id="bar1" value='2'> Bar <br>
	<div class="facilities" > <p class="heading">Facilities Available </p>
	      <input name="facilities_11" type="checkbox" id="Air Conditioner" /> Air Conditioner <br>	    
	      <input name="facilities_12" type="checkbox" id="Cards Accepted" /> Cards Accepted <br>
		  <input name="facilities_13" type="checkbox" id="Dance floor" /> Dance Floor <br>
	      <input name="facilities_14" type="checkbox" id="Dine In/Snacks" /> Dine In/Snacks <br>
	      <input name="facilities_15" type="checkbox" id="Music" /> Music <br>
	      <input name="facilities_16" type="checkbox" id="Outdoor Seating" /> Outdoor Seating <br>
	      <input name="facilities_17" type="checkbox" id="Smoking Allowed" /> Smoking Allowed <br>
	 </div>
	
	
	
	
	
	</div>
  </div>
  </form>
  </div>
</div>

<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
</script>
<div id="footer" style="position:absolute;top:1420px;">
<br>
	<img id="bottom" src="images/navbgbottom.png">
	<br>
	<div align="center">
		<table border="0" id="foot" align="left" style="width:1000px;">
			<tr>
				<th>About the Social Cave</th><th></th><th>Legal Stuff</th><th></th><th>Get Social</th>
			</tr>
			<tr>
				<td class="mcol">
				About Us<br>
				FAQ<br>
				Get In Touch<br>
				</td>
				<td width="10"><img src="images/tableseparator.png"></td>
				<td class="mcol">
				Terms<br>
				Privacy
				</td>
				<td><img src="images/tableseparator.png"></td>
				<td class="mcol" style="padding-left:70px;">
				<img src="images/fblogo.png"> <img src="images/twtlogo.png">
				</td>
			</tr>
		</table>
	</div>
		<div id="footnote">
			By continuing past this page, you agree to abide by Terms of use. All trademaks are properties of their respective owners.
			© 2012. The Social Cave. All rights reserved.
		</div>
		<br>
		<div id="tacredits" align="center">
			This website is designed, developed & powered by <a href="http://www.techahoy.com" target="_blank" id="talink">Tech Ahoy</a>
		</div>
		<br><br>
</div>
</html>
