<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Hapus CFpenyakit</title>
<link href="/image/mimi.JPG" rel='shortcut icon'>
<link href="../style.css" type="text/css" rel="stylesheet">
<style>
<!--
body
{
margin:100px;
background-image:url(/image/background.jpg);
background-repeat:no-repeat;
background-attachment:fixed;
}
</style>
</head>
<body>
<?php
include "../koneksi.php";
$kdhapus = $_GET['kdhapus'];
//$isipertanyaan = $_GET['pertanyaan'];
if ($kdhapus  !="") {
	$sql = "DELETE FROM nilai_cf_penyakit WHERE idcf='$kdhapus'";
	mysql_query($sql, $koneksi) or die ("SQL Error". mysql_error());
	echo "<center><b>Data berhasil dihapus</b></center>";
	echo "<center><a href='haladmin.php?top=_cf.php'><b>OK</b></a></center>";
	//include "index.php?top=gejala.php";
	}else{
	echo "<center>Data belum berhasil dihapus</center>";
	echo "<center><a href='haladmin.php?top=_cf.php'><b>Kembali</b></a></center>";
}
?>
</body>
</html>
