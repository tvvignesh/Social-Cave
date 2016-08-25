<div id="cbox2">
<table border="0" id="cbox2table">
<tr>
	<td class="thead">Cave of the Week</td> <td class="thead">Most Liked Caves</td>
</tr>
<tr>
	<td width="380" valign="top">
		<div id="caveofweek" style="position:relative;left:-20px;">
		<?php
		require("mydbcon.php");
		$var=mysql_query("SELECT * from cavedb.caveinfo where caveofweek='1' ORDER BY lastupdate DESC LIMIT 0,1");
		$c=@mysql_fetch_array($var);
		$finalurl1=$c["cavephoto"];
		$cavename=$c["cavename"];
		$cavefulldesc=$c["cavefulldesc"];
		$caveid=$c["caveid"];
		function limit_words($string, $word_limit)
		{
			$words = explode(" ",$string);
			return implode(" ",array_splice($words,0,$word_limit));
		}
		$cavefulldesc=limit_words($cavefulldesc,50)." ..";
		?>
			<img src="<?php echo $finalurl1 ?>">
		</div>
		<div id="cavedesc" style="padding-left:5px;">
			<span id="cavename"><?php echo $cavename ?>: </span>
			<span id="cavecontent">
			<?php echo $cavefulldesc ?>
			</span>
			<a href="caveprofile.php?caveid=<?php echo $caveid ?>"><span class="rdmore">(Read More)</span></a>
		</div>
	</td>
	<td width="480" id="rb2" valign="top">
		<span id="ba" class="homerate">Bon Appetit</span> |
		<span id="cwn" class="homerate">Connect with Nature</span> |
		<span id="jff" class="homerate">Just for Fun</span> |
		<span id="nlife" class="homerate">Nightlife</span>
		<script type="text/javascript">
		$(document).ready(function(){
		
		$("#ba").click(function(){
			$(".homerate").css("color","black");$(this).css("color","red");$("#caverankshome").load("rankdisplayhome.php?cavetype=1");
			$("#viewcaverank").html("<a href='categories.php?&option3=1' style='color:red;'>View all 'Bon Appetit' Caves</a>");
		});
		
		$("#cwn").click(function(){
			$(".homerate").css("color","black");$(this).css("color","red");$("#caverankshome").load("rankdisplayhome.php?cavetype=2");
			$("#viewcaverank").html("<a href='categories.php?&option3=2' style='color:red;'>View all 'Connect with Nature' Caves</a>");
		});
		
		$("#jff").click(function(){
			$(".homerate").css("color","black");$(this).css("color","red");$("#caverankshome").load("rankdisplayhome.php?cavetype=3");
			$("#viewcaverank").html("<a href='categories.php?&option3=3' style='color:red;'>View all 'Just for Fun' Caves</a>");
		});
		
		$("#nlife").click(function(){
			$(".homerate").css("color","black");$(this).css("color","red");$("#caverankshome").load("rankdisplayhome.php?cavetype=4");
			$("#viewcaverank").html("<a href='categories.php?&option3=4' style='color:red;'>View all 'Nightlife' Caves</a>");
		});
		
		});
		</script>
		<br>
		<style type="text/css">
		#ba
		{
		color:red;
		}
		#cmcontent,#cmfm
		{
		display:none;
		}
		</style>
			<div id="caverankshome">
			<?php 
			$ctype=1;
			require("rankdisplayhome.php"); 
			?>
			</div>
		<br>
		<div id="viewcaverank"><a href='categories.php?&option3=1' style='color:red;'>View all 'Bon Appetit' Caves</a></div>
		<br>
		<div id="cmfm">Cavemen from Manipal</div>
		<div id="cmcontent">
			<table border="0">
				<tr>
				<td valign="top">
					<span id="cmname">Name:</span> <span id="cmname1">Ayush Dandawate</span><br>
					<span id="cmage">Age:</span> <span id="cmage1">21</span><br>
					<span id="cmpos">Student, MIT, Manipal</span><br>
					<span id="favcave">Which of the Caves in manipal is your favourite?</span><br>
					<span id="favcave1">Deetee. Has to be Deetee. Haha!</span><br>
					<span class="rdmore">(Read More)</span>
				</td>
				<td>
					<img src="images/cmphoto.png">
				</td>
				</tr>
			</table>
		</div>
	</td>
</tr>

</table>
</div>