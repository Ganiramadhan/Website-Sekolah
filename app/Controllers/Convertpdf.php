<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Convertpdf extends Controller
{
  public function tes()
  {
    $mpdf = new \Mpdf\Mpdf();
    $x = "<p>TES CONVERT HTML TO PDF</p>";


    $mpdf->WriteHTML($x);
    $mpdf->Output('tes.pdf' . 'D');
    return redirect()->to($mpdf->Output('tes.pdf', 'I'));
  }
}
