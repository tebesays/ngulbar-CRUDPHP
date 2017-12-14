<html>
<head>
	<title>punyaku.com</title>
</head>
<body>
	<form method="POST" action="">
	<center>
	<h1 style="background-color: cyan"><marquee>Selamat Datang Di Instagram!</marquee></h1></center>
	<h2 style="background-color: pink">Temukan Teman Lewat Instagram</h2>
		Nama Product:<br>
		<input type="text" name="Nama_Product" placeholder="Jangan Di Kosongin Tai"> <br>
		<br>
		Jenis Product:<br>
		<input type="text" name="Jenis_Product" placeholder="Jangan Di Kosongin Tai"> <br>
		<br>
		Jumlah Product:<br>
		<input type="text" name="Jumlah_Product" placeholder="Jangan Di Kosongin Tai"> <br>
		<br>
		Description Product:<br>
		<input type="text" name="Description_Product" placeholder="Jangan Di Kosongin Tai"> <br>
		<br>
		<input type="submit" name="kocak">
		 <br>
	</form>
</body>
</html>

<?php
$link = mysqli_connect("localhost","root","","punyaku.com");

if (isset($_POST['kocak']))
{

	$nama = $_POST['Nama_Product'];
	$jenis = $_POST['Jenis_Product'];
	$jumlah = $_POST['Jumlah_Product'];
	$desc = $_POST['Description_Product'];

//CEK SQL NY bener atau nggak , coba ganti pake mysql_queryy bukan sqli
$sql = mysql_query("INSERT INTO 'produk' (Nama_Product, Jenis_Product, Jumlah_Product, Description_Product) VALUES ('$nama', '$jenis', '$jumlah', '$desc')");
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
