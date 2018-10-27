<?php
$servername="localhost";
$username ="root";
$password = "";
$namadatabase = "Test_5";

$conn = new mysqli($servername, $username, $password, $namadatabase);

//$connection = mysql_connect($host, $username, $password) or die ("Kesalahan Koneksi...!! Mohon coba Lagi");
//mysql_select_db($namadatabase, $connection) or die ("Telah terjadi error");
if ($conn->connect_error)
{
	die("Connestio failed" .$conn->connect_error);
}
//echo "Koneksi Berhasil";


$sql = "INSERT INTO  Pelanggan (nama, email, hobi)
	VALUES ('Mark', 'skidipapap@gmail.com', 'Bernafas');";
$sql .= "INSERT INTO Pelanggan (nama, email, hobi)
	VALUES ('Nick', 'byrne@yahoo.com', 'Tertawa');";
$sql .= "INSERT INTO Pelanggan (nama, email, hobi) 
	VALUES ('Kian', 'egan@gmail.com', 'Whistling');";
$sql .= "INSERT INTO Pelanggan (nama, email, hobi) 
	VALUES ('Shane', 'filan@gmail.com', 'Smirking');";
$sql .= "INSERT INTO Pelanggan (nama, email, hobi) 
	VALUES ('Brian', 'bebe@gmail.com', 'running away')";


if ($conn->multi_query($sql) === TRUE)
{
	echo "Record Telah Berhasil Dibuat";
}
	else 
	{
			echo "Error: " . $sql . "<br>" . $conn->error;
	} 

	$conn->close();
	?>