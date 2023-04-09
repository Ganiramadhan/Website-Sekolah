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
  <div class="container mt-5">
    <h3 class="mb-5">ENTRI DATA NILAI</h3>
    <form action="<?= base_url('siakad/entri_nilai') ?>" method="post">
      <div class="row">
        <label class="col-sm-2 col-form-label">Tahun Akademik</label>
        <div class="col-sm-2">
          <?php
          $js = 'class="form-select form-select-sm"';
          echo form_dropdown('ta', $cmbta, "", $js);
          ?>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-2">
          <?php
          $js = 'class="form-select form-select-sm"';
          echo form_dropdown('smtr', $cmbsmtr, "", $js);
          ?>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Mata Kuliah</label>
        <div class="col-sm-4">
          <?php
          $js = 'class="form-select form-select-sm"';
          echo form_dropdown('kodemtk', $cmbmtk, "", $js);
          ?>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Dosen</label>
        <div class="col-sm-4">
          <?php
          $js = 'class="form-select form-select-sm"';
          echo form_dropdown('dosenid', $cmbdosen, "", $js);
          ?>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-sm mt-5"><i class="fa-solid fafloppy-disk"></i> Proses</button>
    </form>
  </div> <!-- container-->
</body>

</html>