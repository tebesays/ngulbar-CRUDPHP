<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Punyaku.com</title>
  </head>
  <body>
<form method="POST" action="" >
      Nama produk <br />
      <input type="text" class="form-control" name="nama" placeholder="Nama Produk"><br>
      Jenis Produk <br />
      <input type="text" class="form-control" name="jenis" placeholder="Nama Produk"><br>
      Jumlah Produk <br />
      <input type="text" class="form-control" name="jumlah" placeholder="Nama Produk"><br>
      Deskripsi Produk <br />
      <textarea name="deskripsi" placeholder="Deskripsi Produk">
      </textarea><BR />
        <input type="submit" value="Kirim" name="kocak" class="form-control" placeholder="">
  </form>
  </body>
</html>

<?php
include ('conn.php');

if (isset($_POST['kocak']))
{
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $jumlah = $_POST['jumlah'];
  $desk = $_POST['deskripsi'];

  $sql = mysql_query("INSERT INTO `produk`(`nama_produk`, `jenis_produk`, `jumlah_produk`, `deskripsi_produk`) VALUES ('$nama','$jenis','$jumlah','$desk')");
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
 <br />

 <div class="table-responsive">
             <table border='1' class="table table-striped table-bordered table-hover" id="dataTables-example">
                     <thead>
                         <tr>
                             <th>ID Produk</th>
                             <th>Nama Produk</th>
                             <th>Jenis Produk</th>
                             <th>Jumlah Produk</th>
                             <th>Deskripsi</th>
                             <th>Option</th>
                         </tr>
                     </thead>
                     <tbody>

                     <?php
                       include "conn.php";
                       $tebe = "select * from produk";
                       $tebe1 = mysql_query($tebe);
                       while($row = mysql_fetch_array($tebe1)){
                       ?>
                     <tr>
                       <td><?php echo $row[0] ?></td>
                       <td><?php echo $row[1] ?></td>
                       <td><?php echo $row[2] ?></td>
                       <td><?php echo $row[3] ?></td>
                       <td><?php echo $row[4] ?></td>
                       <td>
                         <a href='delete.php?id=<?php echo $row[0];?>'><input type="BUTTON" name="apus" value="HAPUS"/></a>||<a href='edit.php?id=<?php echo $row[0];?>'><input type="BUTTON" name="apus" value="EDIT"/></a>
                       </td>
                     </tr>
                     <?php
                       }
                     ?>

                     </tbody>
             </table>
 </div>
