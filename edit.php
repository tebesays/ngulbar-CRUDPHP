<!DOCTYPE html>
<?php
include('conn.php');

$idprod = $_GET['id'];
$tebe = "SELECT * from produk WHERE id_produk = $idprod";

$tebe1 = mysql_query($tebe);
while($row = mysql_fetch_array($tebe1))
{
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Punyaku.com</title>
  </head>
  <body>
<form method="POST" action="" >
      Nama produk <br />
      <input type="text" class="form-control" name="nama"  value= "<?php echo $row[1] ?>" placeholder="Nama Produk"><br>
      Jenis Produk <br />
      <input type="text" class="form-control" name="jenis" value= "<?php echo $row[2] ?>" placeholder="Jenis Produk"><br>
      Jumlah Produk <br />
      <input type="text" class="form-control" name="jumlah" value= "<?php echo $row[3] ?>" placeholder="Jumlah Produk"><br>
      Deskripsi Produk <br />

      <textarea name="deskripsi" placeholder="Deskripsi Produk">
        <?php echo $row[4] ?>
      </textarea><BR />
        <input type="submit" value="EDIT" name="edit" class="form-control" placeholder="">
  </form>
  <?php
}
?>
  </body>
</html>

<?php
if (isset($_POST['edit']))
{
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $jumlah = $_POST['jumlah'];
  $desk = $_POST['deskripsi'];

  $sql = mysql_query("UPDATE `produk` SET `nama_produk`= '$nama',`jenis_produk`= '$jenis',`jumlah_produk`=$jumlah,`deskripsi_produk`= '$desk' WHERE id_produk = $idprod ");
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
}
 ?>
