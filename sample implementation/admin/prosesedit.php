<?php
//edit_data.php
include "../koneksi.php";

 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $url = $_POST['url'];
$order = "UPDATE ambilrss SET nama_rss='$nama', url_rss='$url' WHERE id_rss='$id'";
mysql_query($order);
header("location:index.php");
?>