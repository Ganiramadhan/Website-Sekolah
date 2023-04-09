<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_siakad;

class Siswa extends Controller
{
  public $model;
  public function __construct()
  {
    $this->model = new Model_siakad();
  }
  function index()
  {

    $siswa = $this->model->Siswa();
    $data =
      [
        'siswa' => $siswa,
        'tittle' => 'Siswa'
      ];

    echo view('siswa/index', $data);
  }
}
