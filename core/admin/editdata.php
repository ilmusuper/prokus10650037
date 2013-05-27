<table border=1>
  <tr>
    <td align=center>Form Edit url</td>
  </tr>
  <tr>
    <td>
      <table>
      <?php
      include "../koneksi.php";
	  $id = mysql_real_escape_string($_GET['id']);
      $order = "SELECT * FROM ambilrss where id_rss='$id'";
      $result = mysql_query($order);
      $row = mysql_fetch_array($result);
      ?>
      <form method="post" action="prosesedit.php">
      <input type="hidden" name="id" value="<?php echo "$row[id_rss]"?>">
        <tr>        
          <td>Name</td>
          <td>
            <input type="text" name="nama" 
         value="<?php echo "$row[nama_rss]"?>">
          </td>
        </tr>
        <tr>
          <td>URL</td>
          <td>
            <input type="text" name="url" 
          value="<?php echo "$row[url_rss]"?>">
          </td>
        </tr>
        <tr>
          <td align="right">
            <input type="submit" 
          name="submit value" value="Edit">
          </td>
        </tr>
      </form>
      </table>
    </td>
  </tr>
</table>

