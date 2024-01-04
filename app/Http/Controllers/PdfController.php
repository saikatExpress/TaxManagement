<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    // set_time_limit(300);

    public function generatePdf($id)
    {
        $pdf = Client::find($id);

        return view('admin.file.print_view', compact('pdf'));
    }

    public function pdf($id)
    {
        $data = ['title' => 'domPDF in Laravel 10'];
        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->download('document.pdf');
    }
}
