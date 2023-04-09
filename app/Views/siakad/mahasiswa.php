<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devicewidth, initial-scale=1">
    <title>EduCampus</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<?= view('Layouts/myasset'); ?>

<body>
    <?= view('Layouts/navbar'); ?>

    <div class="container mb-4">

        <h1 class="mt-4 mb-4"> <i>❤️ Daftar Mahasiswa❤️</i> </h1>
        <a href="<?= base_url('add') ?>" class="btn btn-sm btn-success mb-3"><i class="fa-sharp fa-solid fa-user-plus"> Add</i></a>
        <table class="table tabled-sm mt-3">
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Tempat Lahir</th>
            <th>Tanggal lahir</th>
            <th>Alamat</th>
            <th>Program Studi</th>
            <th>Aksi</th>

            <?php
            $n = 0;
            foreach ($siswa as $row) {
                $n++;
            ?>
                <tr>
                    <td>
                        <?= $n ?>
                    </td>
                    <td>
                        <?= $row->nim ?>
                    </td>
                    <td>
                        <?= $row->nama ?>
                    </td>
                    <td>
                        <?= $row->lahirdi ?>
                    </td>
                    <td>
                        <?= $row->lahirtgl ?>
                    </td>
                    <td>
                        <?= $row->alamat ?>
                    </td>
                    <td>
                        <?= $row->prodi ?>
                    </td>
                    <td><a href="<?= base_url("edit") . "/" . $row->nim ?>" class="btn btn-sm btn-primary "> <i class="fa-sharp fa-solid fa-pen-to-square"> Edit</i></a>
                        <a href="<?= base_url("del") . "/" . $row->nim ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah benar data akan dihapus?!?!?!')"><i class="fa-sharp fa-solid fa-user-xmark"> Delete</i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <a href="<?= base_url("pdf"); ?>">CONVERT PDF </a>
    </div>
</body>

</html>