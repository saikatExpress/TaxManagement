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
                                        <th>TIN No</th>
                                        <th>NID</th>
                                        <th>Mobile No</th>
                                        <th>Submission Date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $key => $pdf)
                                        <tr class="list-item">
                                            <td>{{ $pdf->name }}</td>
                                            <td>{{ $pdf->tin_no }}</td>
                                            <td>{{ $pdf->nid_no }}</td>
                                            <td>61</td>
                                            <td>{{ dateTimeFormat($pdf->submission_date) }}</td>
                                            <td>$320,800</td>
                                            <td>
                                                <a href="{{ route('pdf.load', ['id' => $pdf->id]) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-solid fa-file-pdf"></i>
                                                </a>
                                                <a href="{{ route('generate.print', ['id' => $pdf->id]) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-solid fa-print"></i>
                                                </a>
                                                <a href="{{ route('edit', ['id' => $pdf->id]) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-solid fa-pen"></i>
                                                </a>
                                                <button class="btn btn-sm btn-danger deleteButton" data-id="{{ $pdf->id }}" >
                                                    <i class="fas fa-solid fa-trash"></i>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function() {
            $('.deleteButton').click(function() {
                var clientId = $(this).data('id');
                var listItem = $(this).closest(
                    '.list-item'); // Adjust the selector based on your HTML structure

                // Use SweetAlert to confirm the deletion
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If the user confirms, send an AJAX request to delete the pigeon
                        $.ajax({
                            type: 'GET',
                            url: '/client/delete/' + clientId,
                            success: function(response) {
                                // Remove the deleted item from the DOM
                                listItem.remove();

                                // Show a success message
                                Swal.fire('Deleted!', response.message, 'success');
                            },
                            error: function(error) {
                                // Show an error message
                                Swal.fire('Error!', error.responseJSON.message,
                                    'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            // alert(1);
        });
    </script>
@endsection
