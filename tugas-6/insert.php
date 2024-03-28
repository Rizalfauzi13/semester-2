<?php

include 'koneksi.php';

$nama_kendaraan= $_POST['nama_kendaraan'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$merk_kendaraan = $_POST['merk_kendaraan'];


$query = "INSERT INTO kendaraan (nama_kendaraan, jenis_kendaraan, merk_kendaraan)
          VALUES ('$nama_kendaraan', '$jenis_kendaraan', '$merk_kendaraan') ";

if($conn->query($query) === TRUE ){
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>