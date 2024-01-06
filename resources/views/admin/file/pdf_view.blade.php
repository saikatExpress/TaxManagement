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
                    <th>Mobile No : </th>
                    <th>Address</th>
                    <th>File</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pdfs as $key => $pdf)
                        <tr class="list-item">
                            <td>{{ $pdf->name }}</td>
                            <td>
                                {{ $pdf->mobile_no }}
                            </td>
                            <td>{{ $pdf->address }}</td>
                            <td style="font-size: 1rem;">
                                <a style="text-decoration: none;" href="{{ asset('clientsFile/' . 'client_' . $pdf->id . '.pdf') }}" target="_blank" download="{{ $pdf->name }}.pdf">
                                    <i style="font-size: 1.5rem; color:darkred;" class="fas fa-file-pdf"></i> <!-- PDF icon -->
                                    {{ $pdf->name }} - {{ $pdf->assessment_year }}
                                </a>
                            </td>
                            <td>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function() {
            $('.deleteButton').click(function() {
                var categoryId = $(this).data('id');
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
                            url: '/pdf/delete/' + categoryId,
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

@endsection
