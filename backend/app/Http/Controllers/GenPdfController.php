<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mpdf\Mpdf;

class GenPdfController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $mpdf = new Mpdf([
            'fontdata' => [
                'sun-exta' => [
                    'R' => 'ipaexg.ttf'
                ]
            ]
        ]);
        $html = view("pdf.gen")->render();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
