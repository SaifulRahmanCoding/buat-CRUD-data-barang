<?

require_once('koneksi.php');

//mendapatkan data Barang dari Database
if (isset($_GET['id_barang'])) {
	$idBarang=$_GET['id_barang'];
}
else{ echo "NIS tidak ditemukan! <a haref='index.php'>Kembali</a>";
	exit();
}

// Query Get data barang
$query="DELETE FROM barang WHERE id_barang='$idBarang'";

// eksekusi Query
$result=mysqli_query($mysqli,$query);

if (!$result) {
	exit("Gagal Menghapus Data!");
}

header("Location:index.php");

?>