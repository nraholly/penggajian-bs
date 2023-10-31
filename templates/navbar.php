<?php
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand" href="#">SMKN 4 Banjarmasin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('index')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('page/karyawan/index')?>">Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('page/bagian/index')?>">Bagian</a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('page/penggajian/index')?>">Penggajian</a>
                </li>                     
            </ul>
        </div>
    </div>
</nav>