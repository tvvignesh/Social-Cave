<?php
require("header.php");
?>
<script type="text/javascript" src="categoriesscript.js"></script>
<div id="results">
<?php
$option3=$_GET["option3"];
$var1=0;
$var2=5;
if(isset($_GET["start"])&&isset($_GET["end"]))
{
	$var1=$_GET["start"]+5;
	$var2=$_GET["end"]+5;
}

echo "
<script type='text/javascript'>
$(document).ready(function(){
";
$hangout=0;
if(isset($_GET["hangout"]))
$hangout=$_GET["hangout"];

switch($hangout)
{
case 1:echo "$('#Family').attr('checked',true);";break;
case 2:echo "$('#Friends').attr('checked',true);";break;
case 3:echo "$('#specialone').attr('checked',true);";break;
case 4:echo "$('#coolbymyself').attr('checked',true);";break;
}
$spend=0;
if(isset($_GET["spend"]))
$spend=$_GET["spend"];

switch($spend)
{
case 1:echo "$('#broke').attr('checked',true);";break;
case 2:echo "$('#littlemaybe').attr('checked',true);";break;
case 3:echo "$('#moneynoproblem').attr('checked',true);";break;
}

echo "});</script>";

$appetit=0;
if(isset($_GET["appetit"]))
$spend=$_GET["appetit"];
$ac=$bar=$buffet=$cards=$delivery=$music=$outseat=$veg=$smoking=$wifi=$dance=$dinein=0;
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
if(isset($_GET["dance"]))
{
$dance=$_GET["dance"];
}
if(isset($_GET["dinein"]))
{
$dinein=$_GET["dinein"];
}
require("mydbcon.php");

if(isset($_GET["ac"]))
{
$var=mysql_query("SELECT * from cavedb.caveinfo where option3='$option3' AND ac='$ac' AND bar='$bar' AND buffet='$buffet' AND cards='$cards' AND delivery='$delivery' AND music='$music' AND seating='$outseat' AND vegetarian='$veg' AND smoking='$smoking' AND wifi='$wifi' AND dance='$dance' AND dinein='$dinein' ORDER BY featured DESC Limit $var1,$var2");
}
else
{
$var=mysql_query("SELECT * from cavedb.caveinfo where option3='$option3' ORDER BY featured DESC Limit $var1,$var2");
}
echo "<table>";
$flag=0;
while($c=mysql_fetch_array($var,MYSQL_ASSOC))
{
$id=$c["caveid"];
$feat=$c["featured"];
if($flag%2==0)
echo "<tr>";
echo "<td style='padding-right:10px;'>";
echo"<div class='us' id='".$c["caveid"]."'><font color='red' style='font-family: myFirstFont;font-size:44px;'><a href='caveprofile.php?caveid=".$c["caveid"]."' style='text-decoration:none;color:red;font-size:44px;'>".$c["cavename"]."</a></font>
<br>".$c["cavedesc"]."
<br><img src='images/featured.png' style='position:relative;top:-105px;left:250px;display:none;' class='fpic'>";
$finalurl1=$c["cavephoto"];

echo
"
<img src='$finalurl1' width='350' style='position:relative;top:-80px;left:-20px;'>
</td>";


if($feat==1)
{
echo "<script type='text/javascript'>
$('#".$id." img.fpic').css('display','block');
</script>";
}

$flag++;
}
echo"</table></div></div>";
echo "<div id='showmore'><a style='color:red' href='categories.php?start=".$var1."+&end=".$var2."+&option3=".$option3."'>Show More</a></div>";
?>


<html>
<head>
<link href="css_categories.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
</head>
<title> Search results </title>
<body>

<div class="searchtop" style="position:absolute;top:-1px;"><?php $option3=$_GET["option3"]; if($option3==1) echo"Bon Appetit"; if($option3==2) echo"Connect with Nature"; if($option3==3) echo"Just for Fun"; if($option3==4) echo"Nightlife"; ?> </div>
<div class="left" style="position:absolute;top:195px;">
  <div class="modify">
    
  <font color="#FF0000"><center><strong>Modify Your Search
  </strong></center></font><br>
    <form name="sresult" id="sresult">
  <div >
  <p class="heading"> Who do you want to hangout with? </p>
  <input name="hangout" type="radio" id="Family" value="1"> Family <br>
  <input name="hangout" type="radio" id="Friends" value="2"> Friends<br>
  <input name="hangout" type="radio" id="specialone" value="3">The Special One<br>
  <input name="hangout" type="radio" id="coolbymyself" value="4"> Cool By Myself<br>
  </div>
  <div>
  <p class="heading" > How much do you want to <br>spend ?</p>
  <input name="spend"  type="radio" id="broke" value="1"> I'm Broke <br>
  <input name="spend"  type="radio" id="littlemaybe" value="2"> A Little Maybe <br>
  <input name="spend"  type="radio" id="moneynoproblem" value="3"> Money No problem <br>
  </div>
   

  
  <div id="CollapsiblePanel1" class="CollapsiblePanel">
     <div class="CollapsiblePanelTab" tabindex="0"><font color="#FF0000"><center><strong>Advanced Options</strong></center></font></div>
     <div class="CollapsiblePanelContent" style="height:">
	 <?php
	 $option3=$_GET["option3"];
	 if($option3==1)
	 echo '
	 <input name="appetit" type="radio" id="Bakery" value="1"> Bakery <br>
	 <input name="appetit" type="radio" id="Cafe" value="2"> Cafe <br>
	 <input name="appetit" type="radio" id="Fast Food" value="3"> Fast Food <br>
	 <input name="appetit" type="radio" id="Dine-In Restaurant" value="4"> Dine-In Restaurant <br>
	      <div class="facilities" > <p class="heading">Facilities Available </p>
	      <input name="facilities_1" type="checkbox" id="Air Conditioner"> Air Conditioner <br>
	      <input name="facilities_2" type="checkbox" id="Bar"> Bar<br>
	      <input name="facilities_3" type="checkbox" id="Buffet"> Buffet<br>
	      <input name="facilities_4" type="checkbox" id="Cards Accepted"> Cards Accepted <br>
	      <input name="facilities_5" type="checkbox" id="Home Delivery"> Home Delivery <br>
	      <input name="facilities_6" type="checkbox" id="Music"> Music <br>
	      <input name="facilities_7" type="checkbox" id="Outdoor Seating"> Outdoor Seating <br>
	      <input name="facilities_8" type="checkbox" id="Pure Vegetarian"> Pure Vegetarian <br>
	      <input name="facilities_9" type="checkbox" id="Smoking Allowed"> Smoking Allowed <br>
	      <input name="facilities_10" type="checkbox" id="WiFi"> WiFi <br>';
		    	
	if($option3==2)
	echo'
    <input name="nature" type="radio" id="Greenery"> Greenery <br>	
	<input name="nature" type="radio" id="Worship Place"> Worship Place<br>	
	<input name="nature" type="radio" id="Water Body"> Water Body <br>	';
	if($option3==3)
	echo '
	<input name="fun" type="radio" id="Gaming Zone"> Gaming Zone <br>
	<input name="fun" type="radio" id="Movie Theatre"> Movie Theatre <br>
	<input name="fun" type="radio" id="Pool & Snooker">Pool & Snooker <br>
   	<input name="fun" type="radio" id="Sports"> Sports <br>';
	if($option3==4)
	echo '
	<p class="heading"> Nightlife </p>
	<input name="nightlife" type="radio" id="Discotheque"> Discotheque <br>
	<input name="nightlife" type="radio" id="Bar"> Bar <br>
	<div class="facilities" > <p class="heading">Facilities Available </p>
	      <input name="facilities_1" type="checkbox" id="Air Conditioner"> Air Conditioner <br>	    
	      <input name="facilities_4" type="checkbox" id="Cards Accepted"> Cards Accepted <br>
		  <input name="facilities_11" type="checkbox" id="Dance floor"> Dance Floor <br>
	      <input name="facilities_12" type="checkbox" id="Dine In/Snacks"> Dine In/Snacks <br>
	      <input name="facilities_13" type="checkbox" id="Music"> Music <br>
	      <input name="facilities_14" type="checkbox" id="Outdoor Seating"> Outdoor Seating <br>
	      <input name="facilities_15" type="checkbox" id="Smoking Allowed"> Smoking Allowed <br>
	      </div>
		  ';
		  echo '<input type="hidden" value="'.$option3.'" name="option">';
		  ?>
	</form>
	</div>
	</div>
  </div>
  </div>
</div>

<?php
echo "
<script type='text/javascript'>
$(document).ready(function(){
";

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
switch($dance)
{
case 1:echo "$('input[name=facilities_13]').attr('checked',true);";break;
}
switch($dinein)
{
case 1:echo "$('input[name=facilities_14]').attr('checked',true);";break;
}
echo "});</script>";
?>

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
