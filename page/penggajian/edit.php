<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<?php
include '../../templates/navbar.php';
?>

<?php 
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM penggajian WHERE id = '$id'")->fetch_array();
?>

<body>
    <h2 style="margin: 20px 0px; text-align:center;">Edit Data Penggajian</h2>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body text-bg-dark p-3">
                    <div class="form-group row">
                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">ID</label>
                            <div class="col-8">
                                <input name="id" type="text" class="form-control" placeholder="Isikan ID" value="<?= $data['id'] ?>" readonly>
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">NIK</label>
                            <div class="col-8">
                                <input name="karyawan_nik" type="number" class="form-control" placeholder="Isikan Karyawan NIK" value="<?= $data['karyawan_nik'] ?>">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Tahun</label>
                            <div class="col-8">
                                <input name="tahun" type="text" class="form-control" placeholder="Isikan Tahun" value="<?= $data['tahun'] ?>">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Bulan</label>
                            <div class="col-8">
                                <input name="bulan" type="text" class="form-control" placeholder="Isikan Bulan" value="<?= $data['bulan'] ?>">
                            </div>
                        </div>
                        <!-- INPUT END -->
                        
                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Gaji Bayar</label>
                            <div class="col-8">
                                <input name="gaji_bayar" type="number" class="form-control" placeholder="Isikan Gaji Bayar" value="<?= $data['gaji_bayar'] ?>">
                            </div>
                        </div>
                        <!-- INPUT END -->
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="edit" class="btn btn-success">Edit</button>
                </div>
            </div>
        </form>
    </section>
    <!--End card-->

    <?php
    include '../../templates/script.php';
    ?>
</body>

</html>

<script>
    new DataTable('#example');
</script>