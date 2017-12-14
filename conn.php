<?php
	$host = "localhost";
	$id = "root";
	$pass = "";
	$ndb = "punyaku.com";

	//koneksi ke mysql
	mysql_connect($host,$id,$pass);

	//make database
	mysql_select_db($ndb);

 ?>
