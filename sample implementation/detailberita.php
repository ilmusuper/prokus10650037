<?php
$id=$_GET['id'];
include('koneksi.php');
require_once "functions.php";
$sql = mysql_query ("SELECT * FROM ambilrss WHERE id_rss=$id;");
echo "<h3>mysql_fetch_object</h3>";
$baris = mysql_fetch_object($sql);
echo $baris->nama_rss. " ". $baris->url_rss. "<br/>";
$alamat=$baris->url_rss;
parser("$alamat");
?>