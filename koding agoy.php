
<html>
<head>
	<title>Punyaku.com</title>
</head>
<body>
	<form method="post" action=""> <center>
	<h1 style="background-color: yellow"><marquee>WELCOME TO INDONESIA</marquee></h1>
	<p> Dimana yang bersalah, dia yang dilindungin</p>
		Nama Produk <br>
		<input type="text" name="Produk" placeholder="harus diisi goblok"> <br>
		<br>
		Jenis Produk <br>
		<input type="text" name="Jenis" placeholder="harus diisi goblok"> <br>
		<br>
		Jumlah Produk <br>
		<input type="text" name="Jumlah" placeholder="harus diisi goblok"> <br>
		<br>
		Description Produk <br>
		<input type="text" name="Description" placeholder="harus diisi goblok"> <br>
		<br>
		<input type="submit" value="Submit" name="Submit"> <br>
		</center>
	</form>
</body>
</html>

<?php
$host="localhost";
$id="root";
$pwd="";
$ndb="Punyaku.com";
$conn=mysql_connect($host,$id,$pwd);
mysql_select_db($ndb,$conn);

if (isset($_POST['Submit']))
{
	$Nama = $_POST['Produk'];
	$Jenis = $_POST['Jenis'];
	$Jumlah = $_POST['Jumlah'];
	$Description = $_POST['Description'];

//CEK SQL NYA UDDIIIINNNNNN LO LIATT KWKWKW
	$sql = mysql_query ("INSERT INTO 'Produk' (Nama_Produk, Jenis_Produk, Jumlah_Produk, Description_Produk) values ('$Nama', '$Jenis', '$Jumlah', '$Description')");
	if ($sql)
		{
			echo "<script language='javascript'>window.alert('done');
			windiw.location='index.php'</script>";
		}
	else
		{
			echo "<script language='javascript'>window.alert('Failed');
			windiw.location='index.php'</script>";
		}
}
?>
