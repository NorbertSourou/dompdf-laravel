<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $data = [
            'title' => 'Welcome to CodeSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('pdf', $data);

        $paperSize = array(0, 0, 793.7007874, 1122.519685); // Largeur: 500px, Hauteur: 800px
        //$paperSize = array(0, 0, 291.02362205, 1122.519685); // Largeur: 500px, Hauteur: 800px
       // $pdf->setPaper($paperSize);
       // $pdf->setPaper('200mm', '100mm');
        $pdf->getDomPDF()->set_option('dpi', 150);
        $pdf->getDomPDF()->set_option('defaultPaperSize', 'a7');
        $pdf->getDomPDF()->set_option('defaultFont', 'Arial');


        return $pdf->stream('codesolutionstuff.pdf');
        //  return $pdf->download('codesolutionstuff.pdf');
    }
}
