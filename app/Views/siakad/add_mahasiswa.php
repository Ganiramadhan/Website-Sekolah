<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>EduCampus</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <?= view('Layouts/myasset'); ?>
</head>


<body>
    <?= view('Layouts/navbar'); ?>


    <?php
    helper('form')
    ?>
    <div class="container mt-5">
        <h2 class="mb-5">FORM DATA MAHASISWA BARU</h2>
        <form action="<?= base_url('siakad/mhs_simpan') ?>" method="post">
            <div class="row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Masukan nim" name="nim" autofocus>
                    <div id="pesan_salah"></div>
                </div>

            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Masukan nama" name="nama">
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Masukan Tempat lahir" name="lahirdi">
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control form-control-sm" name="lahirtgl">
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="alamat" placeholder="Masukan Alamat">
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-3">
                    <?php
                    $kode = "";
                    $js = 'class="form-select form-select-sm"';
                    echo form_dropdown('kode', $comboprodi, $kode, $js);
                    ?>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-3">
                    <div class="custom-file">
                        <input type="file" class="form-control" name="file" id="file" accept=".jpg, .jpeg, .png" style="width: 305px;">
                        <input type="hidden" name="filelama" id="filelama">

                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-5"><i class="fa-solid fa-floppydisk"></i>
                Simpan</button>
            <a href="<?= base_url() ?>" class="btn btn-primary btn-sm mt-5">Kembali</a>
        </form>
    </div>
</body>

</html>