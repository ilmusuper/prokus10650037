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
          <h2>Post Title</h2>
          <address>
          Admin, domainname.com
          </address>
          <time datetime="2012-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2012 @08:15:00</time>
          <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">website template licence</a>.</p>
          <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more HTML5 templates visit <a href="http://www.os-templates.com/">free website templates</a>.</p>
          <p class="more"><a href="#">Read More &raquo;</a></p>
        </article>
        <!-- article 2 -->
        <article>
          <h2>Post Title</h2>
          <address>
          Admin, domainname.com
          </address>
          <time datetime="2012-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2012 @08:15:00</time>
          <p>Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis.</p>
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li>Etiam vel sapien et est adipiscing commodo.</li>
            <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>
            <li>Donec et dui dolor, in lacinia leo.</li>
            <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>
          </ul>
          <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla. Laoremut vitae doloreet condimentumst phasellentes dolor ut a ipsum id consectetus. Inpede cumst vitae ris tellentesque fring intesquet nibh fames nulla curabitudin.</p>
          <p class="more"><a href="#">Read More &raquo;</a></p>
        </article>
        <!-- / articles -->
      </section>
      <!-- section 2 -->
      <section id="services" class="last clear">
        <ul>
          <li class="odd">
            <article><img src="images/demo/290x100.gif" alt="">
              <h2>Indonectetus facilis leo nibh</h2>
              <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
              <p class="more"><a href="#">Read More &raquo;</a></p>
            </article>
          </li>
          <li class="even">
            <article><img src="images/demo/290x100.gif" alt="">
              <h2>Indonectetus facilis leo nibh</h2>
              <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
              <p class="more"><a href="#">Read More &raquo;</a></p>
            </article>
          </li>
        </ul>
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

<?php include "sidebarrss.php" ?>
     
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
