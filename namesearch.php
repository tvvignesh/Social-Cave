<?php
require("header.php");
?>
<div id="results">
<?php
$name=$_GET["search"];
require("mydbcon.php");

$var=mysql_query("SELECT * from cavedb.caveinfo where cavename='$name'");
while($c=mysql_fetch_array($var,MYSQL_ASSOC))
{
$cid=$c["caveid"];
$cname=$c["cavename"];
echo"<div class='us' id='".$c["caveid"]."'><a href='caveprofile.php?caveid=$cid' style='text-decoration:none;'><font color='red' style='font-family: myFirstFont;font-size:44px;'>".$c["cavename"]."</font></a><br>".$c["cavedesc"]."<br><table cellspacing='5px'><tr><td><font color='red'>Address: </font></td><td>".$c["address"]."</td><br></tr><tr><td><font color='red'>Phone: </font></td><td>".$c["phone"].
"</td></tr><tr><td><font color='red'>Cave Rating: </font></td><td>".round($c["totalrating"]/$c["noofrates"],2)."  (".$c["noofrates"]." Votes)
</td></tr><tr><td><font color='red'>Share on: 
<a href='http://www.facebook.com/sharer.php?u=http://www.thesocialcave.com/caveprofile.php?caveid=$cid' title='Share on Facebook...' target='_blank'><img src='images/fblogo.png' width='30' height='30' alt='alt' align='top'/></a>

</font></td><td>|  ".$c["visits"]." Visitors</td></tr></table>

</div><br>";

}

?>
</div>

<html>
<head>
<link href="css_search.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
</head>
<title> Search results </title>
<body>
<div class="searchtop" style="position:absolute;top:-1px;"> Search Results </div>

	
	
	
	</div>
  

<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
</script>
<div id="footer" style="position:absolute;top:1020px;">
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
