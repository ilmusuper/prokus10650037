<?php
include "../koneksi.php";
 $nama = $_POST['nama'];
 $url = $_POST['url'];
//inserting data order
$order = "INSERT INTO ambilrss (id_rss, nama_rss, url_rss) VALUES ('','$nama','$url')";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result){
	header("location:index.php");
} else{
	echo("<br>Input data is fail");
}
?>
