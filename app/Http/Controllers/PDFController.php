<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PDFController extends Controller
{
    public function PDF() {
        $products = Product::all();

        //$pdf = \PDF::loadView('layouts.products.index', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif'], compact('products'));
        $pdf = \PDF::loadView('layouts.products.pdf', compact('products'));
        return $pdf->download('articulos.pdf');


        /*$pdf = PDF::loadView('reports.today', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('invoice.pdf');*/
    }
}
