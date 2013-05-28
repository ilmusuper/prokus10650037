<?php
include('koneksi.php');
require_once "functions.php";

$sql = mysql_query ("SELECT * FROM ambilrss");
echo "<h3>mysql_fetch_object</h3>";
while ($baris = mysql_fetch_object($sql)) {
$alamat=$baris->url_rss;
parser("$alamat");

}
?>