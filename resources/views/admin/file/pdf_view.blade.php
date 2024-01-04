@extends('layout.app')
@section('content')
<section class="section">
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h4>Export Table</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pdfs as $key => $pdf)
                        <tr>
                            <td>{{ $pdf->name }}</td>
                            <td>
                                <object data="{{ asset('storage/' . $pdf->pdf_path) }}" type="application/pdf" width="100%" height="500px">
                                    <p> <a href="{{ asset('storage/' . $pdf->pdf_path) }}">Download the PDF</a></p>
                                </object>
                            </td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    @endforeach



                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection
