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

$data = $koneksi->query("SELECT * FROM karyawan WHERE nik = '$id'")->fetch_array();
?>

<body>
    <h2 style="margin: 20px 0px; text-align:center;">Edit Data Karyawan</h2>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body text-bg-dark p-3">
                    <div class="form-group row">
                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">NIK</label>
                            <div class="col-8">
                                <input name="nik" type="text" class="form-control" placeholder="Isikan NIK" value="<?= $data['nik'] ?>" readonly>
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Nama</label>
                            <div class="col-8">
                                <input name="nama" type="text" class="form-control" placeholder="Isikan Nama" value="<?= $data['nama'] ?>">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Tanggal Mulai</label>
                            <div class="col-8">
                                <input name="tanggal_mulai" type="date" class="form-control" value="<?= $data['tanggal_mulai'] ?>">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Gaji Pokok</label>
                            <div class="col-8">
                                <input name="gaji_pokok" type="number" class="form-control" placeholder="Isikan Gaji Pokok" value="<?= $data['gaji_pokok'] ?>">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Status Karyawan</label>
                            <div class="col-8">
                                <select class="form-control" name="status_karyawan" id="">
                                    <option value="TETAP" <?= $data ['status_karyawan'] == 'TETAP' ? "selected" : "" ?>>TETAP</option>
                                    <option value="KONTRAK" <?= $data ['status_karyawan'] == 'KONTRAK' ? "selected" : "" ?>>KONTRAK</option>
                                    <option value="MAGANG" <?= $data ['status_karyawan'] == 'MAGANG' ? "selected" : "" ?>>MAGANG</option>
                                </select>
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row">
                            <label class="col-4">Bagian</label>
                            <div class="col-8">
                                <select class="form-control" name="bagian_id" id="">
                                    <option value="">PILIH</option>
                                    <?php
                                    $bagian = $koneksi->query("SELECT * FROM bagian");

                                    foreach ($bagian as $row) {
                                    ?>
                                        <option value="<?= $row['id'] ?>" 
                                        <?php if ($row['id'] == $data['bagian_id']) {
                                            echo "selected";
                                        } ?>    
                                        ><?= $row['nama'] ?></option>
                                    <?php } ?>
                                </select>
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