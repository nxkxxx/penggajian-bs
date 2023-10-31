<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['bid'];
    $nama = $_POST['nama'];

    $submit = $koneksi->query("INSERT INTO bagian VALUES ('$id', '$nama')");

    if ($submit) {
        echo "<script>alert('Data Berhasil Ditambahkan');location.href='../bagian';</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');location.href='../bagian/tambah';</script>";
    }
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $submit = $koneksi->query("UPDATE bagian set
        id = '$id',
        nama = '$nama'
        WHERE
        id = '$id';");

    if ($submit) {
        echo "<script>alert('Data Berhasil Diubah');location.href='../bagian';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah');location.href='../bagian/edit';</script>";
    }
} else if (isset($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM bagian WHERE id = '$_GET[id]'");

    if ($delete) {
        echo "<script>alert('Data Berhasil Dihapus');location.href='../bagian/';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');location.href='../bagian/';</script>";
    }
}
