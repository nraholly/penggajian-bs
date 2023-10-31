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

<?php
    $id = $_GET['id'];
    $data = $koneksi->query("SELECT * FROM karyawan WHERE nik = '$id'")->fetch_array();
?>

<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Edit Data Karyawan</h1>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">NIK</label>
                            <div class="col-3">
                                <input name="nik" class="form-control" type="text" placeholder="Isikan NIK." value="<?= $data['nik']?>" readonly>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">Nama</label>
                            <div class="col-5">
                                <input name="nama" class="form-control" type="text" placeholder="Isikan Nama." value="<?= $data['nama']?>">
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;" >Tanggal Mulai</label>
                            <div class="col-2">
                                <input name="tanggal_mulai" class="form-control" type="date" value="<?= $data['tanggal_mulai']?>">
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">Gaji Pokok</label>
                            <div class="col-5">
                                <input name="gaji_pokok" class="form-control" type="number" value="<?= $data['gaji_pokok']?>">
                            </div>
                        </div>
                        
                        <div class="row" >
                            <label class="col-2 mb-4"  style="color: white;">status karyawan</label>
                            <div class="col-2">
                               <select class="form-control" name="status_karyawan" id="">
                                    <option value="Tetap"<?= $data['status_karyawan'] == 'Tetap' ? "selected" : ""?>>Tetap</option>
                                    <option value="Kontrak"<?= $data['status_karyawan'] == 'Kontrak' ? "selected" : ""?>>Kontrak</option>
                                    <option value="Magang"<?= $data['status_karyawan'] == 'Magang' ? "selected" : ""?>>Magang</option>
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
                                    <option value="<?= $row['id']?>" 
                                    <?php if ($row['id'] == $data['bagian_id']) {
                                        echo "selected";
                                    }?>>
                                    <?= $row ['nama']?></option>
                                    <?php }?>
                               </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-dark">
                    <button type="submit" name="edit" class="btn btn-success mb-3 ">Simpan</button>
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