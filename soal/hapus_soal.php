<?php
// hapus_soal.php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM soal WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Soal berhasil dihapus.";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>