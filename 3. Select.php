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


$sql = "SELECT id, nama, email, hobi FROM Pelanggan";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result)>0)
 {
 	while($row = mysqli_fetch_assoc($result))
 	{
 		echo "id: " .$row["id"]. " - Nama: " .$row["nama"]
. " - Email: " .$row["email"]. " - Hobi: " .$row["hobi"].
		"<br>";
	 }
 }
 else { echo "No results";}
//if ($conn->multi_query($sql) === TRUE)
//{
//	echo "Record Telah Berhasil Dibuat";
//}
//	else 
//	{
//			echo "Error: " . $sql . "<br>" . $conn->error;
//	} 

//	$conn->close();
	/* ?> */

	mysqli_close($conn);
?>