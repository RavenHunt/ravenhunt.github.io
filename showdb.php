<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
<?php

 
mysql_connect("localhost", "root", "");
mysql_select_db("rz_service_v2");
 
// membaca teks input

// $input = $_POST['input'];
 
// // menyimpan teks input ke tabel MySQL
// $query = "INSERT INTO arab VALUES('$input')";

// mysql_query($query);
 
// menampilkan teks yang tersimpan 
$query = "SELECT isi from post where judul like 'keutamaan puasa%'";
$hasil = mysql_query($query);

while ($data = mysql_fetch_array($hasil))
{
  echo $data['isi']."<br>";

}
?>

</body>
</html>