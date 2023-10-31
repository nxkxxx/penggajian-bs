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

<body>
    <h2 style="margin: 20px 0px; text-align:center;">Tambah Data Karyawan</h2>

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
                                <input name="nik" type="text" class="form-control" placeholder="Isikan NIK">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Nama</label>
                            <div class="col-8">
                                <input name="nama" type="text" class="form-control" placeholder="Isikan Nama">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Tanggal Mulai</label>
                            <div class="col-8">
                                <input name="tanggal_mulai" type="date" class="form-control">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Gaji Pokok</label>
                            <div class="col-8">
                                <input name="gaji_pokok" type="number" class="form-control" placeholder="Isikan Gaji Pokok">
                            </div>
                        </div>
                        <!-- INPUT END -->

                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Status Karyawan</label>
                            <div class="col-8">
                                <select class="form-control" name="status_karyawan" id="">
                                    <option value="">PILIH</option>
                                    <option value="TETAP">TETAP</option>
                                    <option value="KONTRAK">KONTRAK</option>
                                    <option value="MAGANG">MAGANG</option>
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
                                    
                                    foreach($bagian as $row) {    
                                    ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- INPUT END -->
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
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