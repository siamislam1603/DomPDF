<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // dd(1);
        $pdf = PDF::loadView('dom_pdf');

        return $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
    }

    public function domPDF(){
        return view('dom_pdf');
    }
}
