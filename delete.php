<?php
include('conn.php');

$idproduk = $_GET['id'];

$sql = mysql_query("DELETE FROM `produk` WHERE id_produk = $idproduk");
if ($sql)
  {
    echo"<script language='javascript'>window.alert('Done');
            window.location='index.php'</script>";
  }
  else
  {
    echo"<script language='javascript'>window.alert('Failed');
            window.location='index.php'</script>";
  }


 ?>
