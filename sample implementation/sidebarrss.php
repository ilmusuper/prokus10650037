<?php
include('koneksi.php');
require_once "functions.php";

$sql = mysql_query ("SELECT * FROM ambilrss");
while ($baris = mysql_fetch_object($sql)) {
echo "<h2 class='title'>". $baris->nama_rss. "</h2>";
$alamat=$baris->url_rss;
echo "<nav>";
parserSide("$alamat");
echo "</nav>";
}
?>