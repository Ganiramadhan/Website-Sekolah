<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Update</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="<?= base_url('gambar/favicon.ico') ?>" type='imagae/x-icon' rel='shortcut icon'>
    <?php
    echo view('Layouts/navbar.php');
    echo view('Layouts/myasset.php');
    ?>
</head>

<body>
    <?php
    helper('form')
    ?>
    <div class="container mt-5">
        <h2 class="mb-5">FORM DATA MAHASISWA BARU</h2>
        <div class="row">
            <div class="col-sm-9">

                <form action="<?= base_url('update') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Masukan nim" name="nim" value="<?= $info->nim ?>" readonly>
                            <div id="pesan_salah"></div>
                        </div>

                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Masukan nama" name="nama" value="<?= $info->nama ?>">
                        </div>
                    </div>
                    <div class=" row">
                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Masukan Tempat lahir" name="lahirdi" value="<?= $info->lahirdi ?>">
                        </div>
                    </div>
                    <div class=" row">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control form-control-sm" name="lahirtgl" value="<?= $info->lahirtgl ?>">
                        </div>
                    </div>
                    <div class=" row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" name="alamat" value="<?= $info->alamat ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-3">
                            <?php
                            $kode = $info->kode;
                            $js = 'class="form-select form-select-sm"';
                            echo form_dropdown('kode', $comboprodi, $kode, $js);
                            ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-5"><i class="fa-solid fa-floppydisk"></i>
                        Update</button>
                    <a href="<?= base_url() ?>" class="btn btn-primary btn-sm mt-5">Kembali</a>

            </div>
            <!--div col-sm-9-->
            <div class="col-sm">
                <p>Foto:</p>
                <?php
                if ($info->foto == "") {
                    $sc = "gambar/nofoto.jpg";
                } else {
                    $sc = "gambar/" . $info->foto;
                }
                ?>
                <img class="rounded embed-responsive embed-responsive-1by1 mb-2 ml-4" id="fotoku" src="<?= base_url($sc) ?>" width="175" height="auto">
                <div class="mb-2 gambar">
                    <input type="file" class="form-control" name="file" id="file" accept=".jpg, .jpeg, .png">
                    <input type="hidden" name="filelama" id="filelama" value="<?= $info->foto ?>">
                </div>
            </div> <!--col-sm-->
        </div> <!--row-->
        </form>

    </div>


    </div>

</body>



</html>

<script type="text/javascript">
    $(".gambar").on("change", function() {
        var fileInput = document.getElementById('file');
        var filePath = fileInput.value;
        var fileName = $(this).val().split("\\").pop();
        var xx = $(this).val();

        //------------preview foto-----------
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#fotoku').attr('src', e.target.result);
        }
        reader.readAsDataURL(fileInput.files[0]);
    });
</script>