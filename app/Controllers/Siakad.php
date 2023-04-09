<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_siakad;

class Siakad extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Model_siakad();
    }
    function index()
    {

        $siswa = $this->model->mahasiswa();
        $data =
            [
                'siswa' => $siswa,
                'tittle' => 'Mahasiswa'
            ];

        echo view('siakad/mahasiswa', $data);
    }
    function add_mahasiswa()
    {
        $comboprodi = $this->model->combo_prod();
        $data = array('comboprodi' => $comboprodi);
        echo view('siakad/add_mahasiswa', $data);
    }

    function edit_mahasiswa($nim)
    {
        $comboprodi = $this->model->combo_prod();
        $info = $this->model->info_mhs($nim);
        $data = array('comboprodi' => $comboprodi, 'info' => $info);
        echo view('siakad/edit_mahasiswa', $data);
    }

    function mhs_simpan()


    {

        // $nim = $_POST['nim'];
        // $nim = $this->request->getPost('nim');
        extract($_POST);
        if ($nim == "") {
            $data = ['pesan' => "NIM tidak boleh kosong"];
            echo view('siakad/pesan', $data);
            exit;
        }
        $info = $this->model->info_mhs($nim);
        if (!isset($info)) {
            $data = ['nim' => $nim, 'nama' => $nama, 'lahirdi' => $lahirdi, 'lahirtgl' => $lahirtgl, 'alamat' => $alamat, 'kode' => $kode];
            $this->model->insertTotable('mahasiswa', $data);
            $this->index();
        } else {
            $data = ['pesan' => "NIM sudah ada"];
            echo view('siakad/pesan', $data);
        }
    }
    function update_mahasiswa()
    {
        // $nim=$_POST['nim'];
        // $nim=$this->request->getPost('nim');
        extract($_POST);
        $namafile = $_FILES['file']['name'];
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];


        if ($ukuran >= 5980515) {
            $data = ['pesan' => "Ukuran terlalu besar, File Gagal di upload"];
            echo view("siakad/pesan", $data);
            exit;
        }

        move_uploaded_file($file_tmp, 'gambar/' . $namafile);
        if ($filelama != "" and $namafile == "") {
            $namafile = $filelama;
        }
        if ($filelama != "" and $namafile != "") {
            unlink('gambar/' . $filelama);
        }
        $data = [
            'nama' => $nama, 'lahirdi' => $lahirdi,
            'lahirtgl' => $lahirtgl, 'alamat' => $alamat, 'kode' => $kode, 'foto' => $namafile
        ];
        $kriteria = ['nim' => $nim];
        $this->model->updateTotable("mahasiswa", $data, $kriteria);
        $this->index();
    }
    function delete_mahasiswa($nim)
    {
        $table = "mahasiswa";
        $kriteria = ['nim' => $nim];
        $this->model->deleteFromtable($table, $kriteria);
        $this->index();
    }

    public function home()
    {
        $data = [
            'tittle' => 'Home'

        ];
        return view('/Siakad/home', $data);
    }
    public function nilai()
    {
        $data = [
            'tittle' => 'Nilai',

        ];
        return view('/Siakad/nilai', $data);
    }

    function nilaidialog()
    {
        $cmbdosen = $this->model->combo_dosen();
        $cmbmtk = $this->model->combo_mtk();
        $thn = date('Y');
        for ($i = 1; $i <= 4; $i++) {
            $awal = $thn - 1;
            $ta = "$awal/$thn";
            $cmbta[$ta] = $ta;
            $thn--;
        }
        for ($i = 1; $i <= 6; $i++) {
            $cmbsmtr[$i] = $i;
        }
        //$cmbta=['2022/2023','2021/2022'];
        $data = [
            'cmbdosen' => $cmbdosen, 'cmbta' => $cmbta, 'cmbsmtr' => $cmbsmtr,
            'cmbmtk' => $cmbmtk
        ];
        echo view('siakad/nilai_dialog', $data);
    }
    function entri_nilai()
    {
        extract($_POST);
        $info_dsn = $this->model->info_dsn($dosenid);
        $info_mtk = $this->model->info_mtk($kodemtk);
        $krs = $this->model->krs($dosenid, $ta, $smtr, $kodemtk);
        $data = ['ta' => $ta, 'smtr' => $smtr, 'info_dsn' => $info_dsn, 'krs' => $krs, 'info_mtk' => $info_mtk];
        echo view('siakad/nilai_entri', $data);
    }
    function simpannilai()
    {
        extract($_POST);
        $indek = 0;
        foreach ($nim as $n) {
            $data = [
                'hadir' => $hadir[$indek],
                'tugas' => $tugas[$indek],
                'formatif' => $formatif[$indek],
                'uts' => $uts[$indek],
                'uas' => $uas[$indek]
            ];

            $syarat = ['nim' => $nim[$indek], 'krs.dosenid' => $dosenid, 'krs.tahun_akademik' => $ta, 'krs.seme
       ster' => $smtr, 'kodemtk' => $kodemtk];
            $this->model->updateTotable("krs", $data, $syarat);
            $indek++;
        }
        $x = '<script type="text/javascript">alert("Data Nilai Sudah di Simpan");</script>';
        echo $x;
        $this->nilaidialog();
        // $link=base_url('dialog');
        // return redirect()->to($link);
    }
}
