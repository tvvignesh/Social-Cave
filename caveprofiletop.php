<div id="cbox1" style="left:20px;">
<head>
	<link href="cave.css" rel="stylesheet" />
</head>
   
   
   <?php
   $cid=$_GET["caveid"];
   require("mydbcon.php");
   $chk=mysql_query("SELECT * FROM cavedb.caveinfo WHERE caveid='$cid'");
   $c=@mysql_fetch_array($chk);
   if($c=="")
   {
   die("<div style='font-size:30px;position:absolute;top:150px;left:100px;'>OOPS! No such cave exists! Please try again or Search for Caves</font>");
   }
   $finalurl1=$c["cavephoto"];
   $cavename=$c["cavename"];
   $cavedesc=$c["cavedesc"];
   $caverating=round($c["totalrating"]/$c["noofrates"],2);
   ?>
      <div class="img3">
		   <div style="font-family:myFirstFont;color:red;font-size:50px;"><?php echo $cavename;?></div>
		   <div style="font-family:'Arial Black,Arial,sans-serif';font-size:20px;width:500px;"><?php echo $cavedesc;?></div>
	  </div>
   <div class="rating">
   Cave rating <?php echo $caverating; ?>
   </div>
   <div class="placepic">
	<img src="<?php echo $finalurl1; ?>" />
   </div>

   <div class="cave_monarch">
   <img src="images/curtains.jpg" height="270" width="350" />
        <img src="images/crown.jpg"  id="crownpic"/>
        <div id="caveking">
		<?php
		require("mydbcon.php");
		$chk1=mysql_query("SELECT * FROM rank WHERE caveid='$cid' AND urank='3'");
		$c1=@mysql_fetch_array($chk1);
		$bigcount=0;$uidmax=0;$uprint=0;
		if($c1=="")
		{
			//NO CAVE ADDICT
			$chka=mysql_query("SELECT * FROM sign");
			while($a=@mysql_fetch_array($chka))
			{
			$count=0;
				$uid2=$a["uid"];
				$chkb=mysql_query("SELECT * FROM uservisits WHERE caveid='$cid' AND userid='$uid2' ORDER");
				$num_visits = mysql_num_rows($chkb);
				if($bigcount<$num_visits)
				{
					$bigcount=$num_visits;$uidmax=$uid2;
				}
			}
			$uprint=$uidmax;
		}
		else
		{
			$bigcount=0;$uidmax=0;
			$chk12=mysql_query("SELECT * FROM rank WHERE caveid='$cid' AND urank='3'");
			while($ca=@mysql_fetch_array($chk12))
			{
				$uid2=$ca["uid"];
				$chka1=mysql_query("SELECT * FROM uservisits WHERE caveid='$cid' AND userid='$uid2'");
				$num_visits = mysql_num_rows($chka1);
				if($bigcount<$num_visits)
				{
					$bigcount=$num_visits;$uidmax=$uid2;
				}
				$uprint=$uidmax;
			}
		}
		
			$chk1=mysql_query("SELECT * FROM sign WHERE uid='$uprint'");
			$c1=@mysql_fetch_array($chk1);
			$picurl=$c1["profpic"];
				echo "<img src='$picurl' height='80' width='60'/>";
				$chk5=mysql_query("SELECT * FROM rank WHERE caveid='$cid' AND urank='4'");
				$c5=@mysql_fetch_array($chk5);
				if($c5=="")
				{
					mysql_query("INSERT INTO rank (uid,caveid,urank) VALUES ('$uprint','$cid','4')") or die("OOPS! An error occured in insertion of data!");
				}
		?> 
        </div>
        <p id="cavemonarch_text">Cave Monarch</p>
        <p id="caveaddicts_text">Cave Addicts</p>
        <div class="caveaddicts">
		<?php
		require("mydbcon.php");
		$chk=mysql_query("SELECT * FROM rank WHERE caveid='$cid' AND urank='3' LIMIT 0,10");
		while($c=@mysql_fetch_array($chk,MYSQL_ASSOC))
		{
			$uid1=$c["uid"];
			$chk1=mysql_query("SELECT * FROM sign WHERE uid='$uid1'");
			$c1=@mysql_fetch_array($chk1);
			$picurl=$c1["profpic"];
				echo "<span class='caveaddicts_pics' id='addictpic'><img src='$picurl' height='32' width='25'/></span>
				";
		}
		?> 
		</div>
        
        <p id="cavelovers_text">Cave Lovers</p>
				<div class="cavelovers">
						<?php
		require("mydbcon.php");
		$chk=mysql_query("SELECT * FROM rank WHERE caveid='$cid' AND urank='2' LIMIT 0,10");
		while($c=@mysql_fetch_array($chk,MYSQL_ASSOC))
		{
			$uid1=$c["uid"];
			$chk1=mysql_query("SELECT * FROM sign WHERE uid='$uid1'");
			$c1=@mysql_fetch_array($chk1);
			$picurl=$c1["profpic"];
				echo "<span class='cavelovers_pics' id='loverpic1'><img src='$picurl' height='32' width='25'/></span>
				";
		}
		?> 
        </div>
        <p id="cavewanderers_text">Cave Wanderers</p>
		<div class="cavewanderers">
		<?php
		require("mydbcon.php");
		$chk=mysql_query("SELECT * FROM rank WHERE caveid='$cid' AND urank='1' LIMIT 0,10");
		while($c=@mysql_fetch_array($chk,MYSQL_ASSOC))
		{
			$uid1=$c["uid"];
			$chk1=mysql_query("SELECT * FROM sign WHERE uid='$uid1'");
			$c1=@mysql_fetch_array($chk1);
			$picurl=$c1["profpic"];
				echo "<span class='cavewanderers_pics' id='wandererpic1'><img src='$picurl' height='32' width='25'/></span>
				";
		}
		?>  
        </div>
   </div><br />
   <?php
   echo "
   <a href='visitedmark.php?caveid=".$cid."'><img src='images/visited.jpg' id='visited' border='0'/></a>
   ";
   ?>
      <div class="last_visited">
       <div style="font-size:30px;">Last visit: <span style="font-family:'Arial Black',Arial,sans-serif;">
		   <?php
		   if(isset($_COOKIE["login"]))
		   {
			   $uid=$_COOKIE["login"];
			   $chk=mysql_query("SELECT * FROM uservisits WHERE caveid='$cid' AND userid='$uid' ORDER BY timevisit DESC LIMIT 0,1");
			   $c=@mysql_fetch_array($chk);
			   $timevisit=$c["timevisit"];
			   echo "$timevisit";
		   }
		   else
		   {
				echo "<span style='font-size:20px;'>Login to know more!</span>";
		   }
		   ?>
	   </span></div>
        </div>
		<?php
		$chk=mysql_query("SELECT * FROM favourites WHERE caveid='$cid' AND uid='$uid'");
		$c=@mysql_fetch_array($chk);
		if($c=="")
		echo '
		<a href="cavefav.php?caveid='.$cid.'"><div id="favcave" style="position:absolute;top:600px;left:800px;">Add to Favourites</div></a>
		';
		else
		echo '
		<a href="cavefav.php?caveid='.$cid.'"><div id="favcave" style="position:absolute;top:600px;left:800px;">Remove From Favourites</div></a>
		';
		?>
		
		<div id="visited" style="position:absolute;left:650px;top:600px;font-family:'Arial Black',Arial,sans-serif;">
		<?php
		$chk=mysql_query("SELECT * FROM uservisits WHERE caveid='$cid'");
		$c=@mysql_fetch_array($chk);
		if($c=="")$numvisits=0;
		else
		$numvisits = mysql_num_rows($chk);
		
		echo $numvisits. " visited";
		?>
		</div>
</div>