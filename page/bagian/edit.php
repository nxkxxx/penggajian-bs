<?php
require'../../config/config.php';
require'../../config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php';
?>
<!-- End Navbar -->

<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM bagian WHERE id = '$id'")->fetch_array();
?>

<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Edit Data Bagian</h2>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="bg-dark text-white" class="card-body">
                    <div class="form-group row">
                        <div class="row mb-3 mt-3" >
                            
                            <label style="color: dark;" class="col-2">NIK</label>
                            <div class="col-10 mb-3">
                                <input name="id" class="form-control" type="number" placeholder="Isikan ID" value="<?=$data['id'] ?>" readonly>
                            </div>

                            <label style="color: dark;" class="col-2">Nama</label>
                            <div class="col-10 mb-3">
                                <input name="nama" class="form-control" type="text" placeholder="Isikan Nama Bagian" value="<?=$data['nama'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="edit" class="btn btn-success">
                    Edit
                    </button>
                </div>
            </div>
        </form>
    </section>
</body>
<!--End card-->
<?php
    include '../../templates/script.php';
    ?>
</html>

<script>
    new DataTable('#example');
</script>