<?php
include('../koneksi.php');

if(isset($_GET['action']) && $_GET['action'] == 'delete'){
mysql_query("delete from ambilrss where id_rss='".mysql_real_escape_string($_GET['id'])."'");
}

$sql = mysql_query ("SELECT * FROM ambilrss");
 echo '<table border="1">';  
 echo '<tr>';  
 echo '<td>Nama Situs</td>';  
 echo '<td>Url Situs</td>';  
 echo '<td>Action</td>';  
 echo '</tr>'; 
while ($baris = mysql_fetch_object($sql)) {
 echo '<tr>';  
 echo '<td>'.$baris->nama_rss.'</td>';  
 echo '<td>'.$baris->url_rss.'</td>';  
 echo '<td><a href="tampildatarss.php?id='.$baris->id_rss.'&action=delete">Delete</a>';  
 echo ' | <a href="editdata.php?id='.$baris->id_rss.'">Edit</a>';  
 echo '</td>';  
 echo '</tr>';  
 }  
 echo '</table>';  
 echo '<a href="tambahdata.php">Tambah Data</a>';

?>