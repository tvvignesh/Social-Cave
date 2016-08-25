<?php
require("header.php");
require("details.php");
if (!isset($_GET["page"]))
require("reviews.php");
else if ($_GET["page"]=="reviews")
require("reviews.php");
else if ($_GET["page"]=="articles")
require("articles.php");
else if ($_GET["page"]=="photos")
{
require("photos.php");
echo "<style type='text/css'>#footer{position:relative;top:1350px;}</style>";
}
else if ($_GET["page"]=="ranks")
require("ranks.php");
else if ($_GET["page"]=="favourites")
require("favouritecaves.php");

require("footer.php");
?>