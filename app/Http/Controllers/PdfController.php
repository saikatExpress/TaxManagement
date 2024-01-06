<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\App;
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
        $pdf = Client::find($id);
        $pdf = PDF::loadView('admin.file.document', compact('pdf'));
        return $pdf->download('document.pdf');
    }

    public function pdfShow($id)
    {
        $clientInfo = Client::where('id', $id)->first();

        // return view('admin.file.test', compact('clientInfo'));

        $pdf = Pdf::loadView('admin.file.test', compact('clientInfo'));

        return $pdf->download('file.pdf');

    }
}
