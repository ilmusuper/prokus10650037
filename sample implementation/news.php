<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Basic 67</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <hgroup>
      <h1><a href="#">Basic 67</a></h1>
      <h2>Free HTML5 Website Template</h2>
    </hgroup>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li class="last"><a href="#">Text Link</a></li>
      </ul>
    </nav>
    <div class="clear"></div>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- content body -->
    <div id="content">
      <!-- section 1 -->
      <section>
        <!-- article 1 -->
        <article>
<?php
include('koneksi.php');
require_once "functions.php";

$sql = mysql_query ("SELECT * FROM ambilrss");
while ($baris = mysql_fetch_object($sql)) {
$alamat=$baris->url_rss;
parser("$alamat");

}
?>
            </article>
      </section>
    </div>
    <!-- right column -->
    <aside id="right_column">
      <h2 class="title">Channel Berita</h2>
      <nav>
        <ul>
<?php	

include('koneksi.php');	
$sql = mysql_query ("SELECT * FROM ambilrss");
while ($baris = mysql_fetch_object($sql)) {
echo  "<li><a href='detailnews.php?id=".$baris->id_rss. "'>". $baris->nama_rss. "</a></li>";
}
?>
        </ul>
      </nav>
    </aside>
    <!-- / content body -->
    <div class="clear"></div>
  </div>
</div>
<!-- footer -->
<div class="wrapper row3">
  <footer id="footer">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <div class="clear"></div>
  </footer>
</div>
</body>
</html>
