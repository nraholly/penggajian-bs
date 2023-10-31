<?php
require '../../config/config.php';
require '../../config/koneksi.php';
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

<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Tambah Data Karyawan</h1>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">NIK</label>
                            <div class="col-3">
                                <input name="nik" class="form-control" type="text" placeholder="Isikan NIK.">
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">Nama</label>
                            <div class="col-5">
                                <input name="nama" class="form-control" type="text" placeholder="Isikan Nama.">
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">Tanggal Mulai</label>
                            <div class="col-2">
                                <input name="tanggal_mulai" class="form-control" type="date">
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">Gaji Pokok</label>
                            <div class="col-5">
                                <input name="gaji_pokok" class="form-control" type="number" placeholder="Isikan Gaji Pokok.">
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">status karyawan</label>
                            <div class="col-2">
                               <select class="form-control" name="status_karyawan" id="">
                                    <option value="">-- Pilih --</option>
                                    <option value="Tetap">Tetap</option>
                                    <option value="Kontrak">Kontrak</option>
                                    <option value="Magang">Magang</option>
                               </select>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">Bagian</label>
                            <div class="col-2">
                               <select class="form-control" name="bagian_id" id="">
                                    <option value="">-- Pilih --</option>
                                    <?php
                                        $bagian = $koneksi->query("SELECT * FROM bagian");

                                        foreach($bagian as $row){
                                    ?>
                                    <option value="<?= $row['id']?>"><?= $row ['nama']?></option>
                                    <?php }?>
                               </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-dark">
                    <button type="submit" name="simpan" class="btn btn-success mb-3 ">Simpan</button>
                </div>
            </div>
        </form>
    </section>
    

    <?php
    include '../../templates/script.php';
    ?>

</body>


</html>

<script>
    new DataTable('#example');
</script>