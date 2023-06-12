<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Lignecde;
use App\Models\Magasin;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function generatePDF()
    {

//        $data = [
//            'title' => 'Welcome to CodeSolutionStuff.com',
//            'date' => date('m/d/Y')
//        ];
//
//        $pdf = PDF::loadView('pdf', $data);
//
//        $paperSize = array(0, 0, 793.7007874, 1122.519685); // Largeur: 500px, Hauteur: 800px
//        //$paperSize = array(0, 0, 291.02362205, 1122.519685); // Largeur: 500px, Hauteur: 800px
//       // $pdf->setPaper($paperSize);
//       // $pdf->setPaper('200mm', '100mm');
//        $pdf->getDomPDF()->set_option('dpi', 150);
//        $pdf->getDomPDF()->set_option('defaultPaperSize', 'a7');
//        $pdf->getDomPDF()->set_option('defaultFont', 'Arial');


        //  $facture = Facture::where('NumFacture', $id)->first();


        $data = [];

        $pdf = PDF::loadView('pdf', $data);

        $paperSize = array(0, 0, 793.7007874, 1122.519685); // Largeur: 500px, Hauteur: 800px
        //$paperSize = array(0, 0, 291.02362205, 1122.519685); // Largeur: 500px, Hauteur: 800px
        // $pdf->setPaper($paperSize);
        // $pdf->setPaper('200mm', '100mm');
        $pdf->getDomPDF()->set_option('dpi', 300);
//        $pdf->getDomPDF()->set_option('defaultFont', 'Arial');

        // $pdf->setPaper( 'landscape');

        $pdf->setPaper('A4', 'landscape');

      //  return $pdf->stream('ticketcaisse.pdf');


        return $pdf->stream('codesolutionstuff.pdf');
        //  return $pdf->download('codesolutionstuff.pdf');
    }


    public function generateRecuA4()
    {

        $data = [
            'title' => 'Welcome to CodeSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('recu_A4', $data);

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

    public function statistiqueCaissePDF()
    {

        $data = [];

        $pdf = PDF::loadView('statCaisse', $data);

        $paperSize = array(0, 0, 793.7007874, 1122.519685); // Largeur: 500px, Hauteur: 800px
        //$paperSize = array(0, 0, 291.02362205, 1122.519685); // Largeur: 500px, Hauteur: 800px
        // $pdf->setPaper($paperSize);
        // $pdf->setPaper('200mm', '100mm');
        $pdf->getDomPDF()->set_option('dpi', 300);
//        $pdf->getDomPDF()->set_option('defaultFont', 'Arial');

        // $pdf->setPaper( 'landscape');

        $pdf->setPaper('A4', 'landscape');

      //  return $pdf->stream('ticketcaisse.pdf');


        return $pdf->stream('codesolutionstuff.pdf');
        //  return $pdf->download('codesolutionstuff.pdf');
    }



}
