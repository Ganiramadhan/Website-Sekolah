<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduCampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    // echo view('include/myasset.php');
    // helper('form');
    ?>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header"><b>Pesan</b></div>
            <div class="card-body">
                <p>
                    <?= $pesan ?>
                </p>
                <a class="btn btn-success btn-sm" href="<?= base_url('add') ?>">Kembali</a>

            </div>
        </div>
    </div>
</body>

</html>