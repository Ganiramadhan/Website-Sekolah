<?php
namespace App\Controllers;

class Helo extends BaseController
{
    public function index()
    {
        echo "Hello, Selamat Datang dengan CodeIgniter 4";
    }

    function nama()
    {
        echo "Mochamad Hardy";
    }

    function pesan()
    {
        $x = "Mochamad Hardy";
        $prodi = "Manajemen Informatika";
        $data = array('x' => $x, 'prodi' => $prodi);
        echo view("pesan", $data);
    }

    function cetak($nilai)
    {
        $data = ['nilai' => $nilai];
        echo view('cetak', $data);
    }
    function kali($nilai1, $nilai2)
    {
        $kali = $nilai1 * $nilai2;
        $data = ['nilai1' => $nilai1, 'nilai2' => $nilai2, 'kali' => $kali];
        echo view('kali', $data);
    }
    function faktur()
    {
        echo view("order/faktur");
    }


}
?>