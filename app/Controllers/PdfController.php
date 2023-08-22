<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;

class PdfController extends BaseController
{
    public function __construct()
    {
      $this->model = new \App\Models\User(); 
    }
    public function index()
    {
        $datasiswa = $this->model->where('role','siswa')->findAll();
        return view('pdf', ['siswa' => $datasiswa]);
    }
    public function printpdf()
    {
        $dompdf = new Dompdf();
        $datasiswa = $this->model->where('role','siswa')->findAll();
        $html = view('pdf', ['siswa' => $datasiswa]);
        $dompdf->loadhtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        //$dompdf->stream();
        $dompdf->stream('datasiswa.pdf', array("Attachment" => false));

    }
    
}


?>