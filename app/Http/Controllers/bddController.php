<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\barrecode;
use Dompdf\Dompdf;
use Dompdf\Options;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class bddController extends Controller {

    public function qrcode(){
        $products = barrecode::all();
        return view('qrcode')->with('products',$products);
    }

    public function barrecode(){
        $products = barrecode::all();
        return view('codebarre')->with('products',$products);
    }
    public function downloadPDF(){
        $products = barrecode::all();

        //$pourvue=array();
        foreach ($products as $prod)
        $prod->description=base64_encode(QrCode::format('png')->size(100)->generate($prod->id));

        $html = view('exportqr', compact('products'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream();


    }
    public function downloadPDF2(){
        $products = barrecode::all();
        $html = view('codebarre', compact('products'))->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream();
    }

}
