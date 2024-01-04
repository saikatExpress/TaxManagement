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
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $key => $pdf)
                                        <tr>
                                            <td>{{ $pdf->name }}</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>
                                                <a href="{{ route('generate.pdf', ['id' => $pdf->id]) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-solid fa-file-pdf"></i>
                                                </a>
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fas fa-solid fa-print"></i>
                                                </button>
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fas fa-solid fa-pen"></i>
                                                </button>
                                            </td>
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

<script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
<script>
    $(document).ready(function(){
        // alert(1);
    });
</script>
@endsection
