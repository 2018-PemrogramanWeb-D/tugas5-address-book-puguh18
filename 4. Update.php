<?php
$servername="localhost";
$username ="root";
$password = "";
$namadatabase = "Test_5";

$conn = mysqli_connect($servername, $username, $password, $namadatabase);

//$connection = mysql_connect($host, $username, $password) or die ("Kesalahan Koneksi...!! Mohon coba Lagi");
//mysql_select_db($namadatabase, $connection) or die ("Telah terjadi error");
if (!$conn)
{
	die("Connestio failed" .mysqli_connect_error());
}
//echo "Koneksi Berhasil";


$sql = "UPDATE Pelanggan SET hobi='Menangis' WHERE nama ='Brian'";


if (mysqli_query($conn, $sql))
{
	echo "Record Telah Berhasil Diubah";
}
	else 
	{
			echo "Error: " . mysqli_error($conn);
	} 

	mysqli_close($conn);
	?>