<style type="text/css">
.options {  
            
            width:250px;
            height:50px;          
            margin-bottom:15px;
            margin-left:20px;
            font-family:myFirstFont;
            
            color:white;
            text-align:center;
            background-image:url('images/redbar.png');
            background-position:center; 
            background-repeat:no-repeat;
            overflow:visible;
            cursor:pointer;
          }

.options a
{
            font-family:myFirstFont;
           
            color:white;
            text-align:center;
            text-decoration:none;
}

.iopt:hover
{
background-image:url('images/mhover3.png');
overflow:visible;
background-size: 150px 55px;
background-position:top; 
background-repeat:no-repeat;
}

.iopt
{
height:100px;
display:block;
font-size:40px;
}

.iopt1
{
background-image:url('images/mhover3.png');
overflow:visible;
background-size: 150px 55px;
background-position:top; 
background-repeat:no-repeat;
height:100px;
display:block;
font-size:40px;
}
</style>
<div id="boundary_options">
	<a href="cavereview.php?caveid=<?php echo $cid;?>" style="text-decoration:none;"><div class="options" id="Reviews">
	<span class='iopt'>Reviews</span>
	</div></a>
	<a href="cavephotos.php?caveid=<?php echo $cid;?>" style="text-decoration:none;"><div class="options" id="Photos">
	<span class='iopt'>Photos</span>
	</div></a>
	<a href="cavemenu.php?caveid=<?php echo $cid;?>" style="text-decoration:none;"><div class="options" id="Menu">
	<span class='iopt'>Menu</span>
	</div></a>
	<a href="cavefacilities.php?caveid=<?php echo $cid;?>" style="text-decoration:none;"><div class="options" id="Facilities">
	<span class='iopt'>Facilities</span>
	</div></a>
	<a href="caveprofile.php?caveid=<?php echo $cid;?>" style="text-decoration:none;"><div class="options" id="Map">
	<span class='iopt'>Map</span>
	</div></a>
</div>

<?php
require("mydbcon.php");
$chk=mysql_query("SELECT * FROM caveinfo WHERE caveid='$cid'");
$c=@mysql_fetch_array($chk);
if($c!="")
{
	$disp=$c["menu"];
	if($disp==0)
	{
		echo "<style type='text/css'>#Menu{display:none;}</style>";
	}
}
?>