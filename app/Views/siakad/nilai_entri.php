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


  <?php
  helper('form');
  ?>
  <div class="container mt-3">
    <h3 class="mb-3">ENTRI DATA NILAI</h3>
    <form action="<?= base_url('simpannilai') ?>" method="post">
      <div class="row">
        <label class="col-sm-2 col-form-label">Tahun Akademik</label>
        <div class="col-sm-2">
          <input type="text" class="form-control form-control-sm" name="ta" value="<?= $ta ?>" readonly>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-2">
          <input type="text" class="form-control form-control-sm" name="smtr" value="<?= $smtr ?>" readonly>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Mata kuliah</label>
        <div class="col-sm-4">
          <input type="hidden" name="kodemtk" value="<?= $info_mtk->kodemtk ?>" readonly>
          <input type="text" class="form-control form-control-sm" name="matakuliah" value="<?= $info_mtk->matakuliah ?>" readonly>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Dosen</label>
        <div class="col-sm-4">
          <input type="hidden" name="dosenid" value="<?= $info_dsn->dosenid ?>" readonly>
          <input type="text" class="form-control form-control-sm" name="dosen" value="<?= $info_dsn->dosen_nama ?>" readonly>
        </div>
      </div>
      <table class="table table-sm">
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama
            Mahasiswa</th>
          <th>Hadir</th>
          <th>Tugas</th>
          <th>Formatif</th>
          <th>UTS</th>
          <th>UAS</t h>
        </tr>
        <?php
        $n = 0;
        foreach ($krs as $k) {
          $n++;
        ?>
          <tr>
            <td><?= $n ?></td>
            <td><?= $k->nim ?>
              <input type="hidden" name="nim[]" value="<?= $k->nim ?>">
            </td>
            <td><?= $k->nama ?></td>
            <td width="90"><input type="text" name="hadir[]" value="<?= $k->hadir ?>" class="form-control form-control-sm"></td>
            <td width="90"><input type="text" name="tugas[]" value="<?= $k->tugas ?>" class="form-control form-control-sm"></td>
            <td width="90"><input type="text" name="formatif[]" value="<?= $k->formatif ?>" class="form-control form-control-sm"></td>
            <td width="90"><input type="text" name="uts[]" value="<?= $k->uts ?>" class="form-control form-control-sm"></td>
            <td width="90"><input type="text" name="uas[]" value="<?= $k->uas ?>" class="form-control form-control-sm"></td>
          </tr>
        <?php } ?>
      </table>
      <button type="submit" class="btn btn-primary btn-sm mt-2"><i class="fa-solid fafloppy-disk"></i> Simpan Nilai</button>
    </form>
  </div> <!-- container-->
</body>

</html>
<?php
?>