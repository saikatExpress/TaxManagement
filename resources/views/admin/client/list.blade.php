@extends('layout.app')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
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
                                            <th>Address</th>
                                            <th>TIN No</th>
                                            <th>Source Of Income</th>
                                            <th>Total Income</th>
                                            <th>Net Wealth</th>
                                            <th>Tax Paid</th>
                                            <th>Payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $key => $pdf)
                                            <tr class="list-item">
                                                <td>{{ $pdf->name }}</td>
                                                <td>{{ $pdf->address }}</td>
                                                <td>{{ $pdf->tin_no }}</td>
                                                <td>{{ $pdf->source_income }}</td>
                                                <td>{{ $pdf->total_income }}</td>
                                                <td>{{ $pdf->net_wealth }}</td>
                                                <td>{{ $pdf->tax_paid }}</td>
                                                <td>{{ $pdf->payment }}</td>
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

                                                    <button type="button" data-toggle="modal"
                                                        data-name="{{ $pdf->name }}" data-assessment_year="{{ $pdf->assessment_year }}"
                                                        data-address={{ $pdf->address }} data-tin_no="{{ $pdf->tin_no }}" data-mobile_no="{{ $pdf->mobile_no }}"
                                                        data-nid_no="{{ $pdf->nid_no }}" data-source_income="{{ $pdf->source_income }}"
                                                        data-circle_of_zone="{{ $pdf->circle_of_zone }}" data-total_income="{{ $pdf->total_income }}"
                                                        data-net_wealth="{{ $pdf->net_wealth }}" data-tax_paid="{{ $pdf->tax_paid }}" data-previous_net_wealth="{{ $pdf->previous_net_wealth }}"
                                                        data-business_capital="{{ $pdf->business_capital }}" data-accretion_in_wealth="{{ $pdf->accretion_in_wealth }}"
                                                        data-non_agriculture_property="{{ $pdf->non_agriculture_property }}" data-agriculture_property="{{ $pdf->agriculture_property }}"
                                                        data-investment="{{ $pdf->investment }}" data-motor_vehicle="{{ $pdf->motor_vehicle }}" data-jewellery="{{ $pdf->jewellery }}"
                                                        data-furniture="{{ $pdf->furniture }}" data-electronic_equipment="{{ $pdf->electronic_equipment }}"
                                                        data-other_asset="{{ $pdf->other_asset }}" data-cash_in_hand="{{ $pdf->cash_in_hand }}" data-liabilities="{{ $pdf->liabilities }}"
                                                        data-family_expense="{{ $pdf->family_expense }}" data-source_of_fund="{{ $pdf->source_of_fund }}" data-payment="{{ $pdf->payment }}"
                                                        data-register_number="{{ $pdf->register_number }}" data-remarks="{{ $pdf->remarks }}" data-submission_date={{ $pdf->submission_date }}
                                                        data-target="#largeModal" class="btn btn-sm btn-primary editBtn">
                                                        <i class="fas fa-solid fa-eye"></i>
                                                    </button>

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


    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Client Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="clientForm" style="width: 100%;" action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">



                        <input type="hidden" name="action" id="action" value="">

                        <input type="hidden" name="client_id">

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>MR X file Information</h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="address" class="form-control">
                                        </div>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Mobile No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="mobile_no" class="form-control">
                                        </div>
                                        @error('mobile_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Source Of Income</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="source_income" class="form-control">
                                        </div>
                                        @error('source_income')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Total Income</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="total_income" class="form-control">
                                        </div>
                                        @error('total_income')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Tax Paid</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="tax_paid" class="form-control">
                                        </div>
                                        @error('tax_paid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Business Capital</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="business_capital" class="form-control">
                                        </div>
                                        @error('business_capital')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Non Agriculture Propert</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="non_agriculture_property" class="form-control">
                                        </div>
                                        @error('non_agriculture_property')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Investment</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="investment" class="form-control">
                                        </div>
                                        @error('investment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Jewellery</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="jewellery" class="form-control">
                                        </div>
                                        @error('jewellery')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Electronic Equipment</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="electronic_equipment" class="form-control">
                                        </div>
                                        @error('electronic_equipment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Cash In Hand</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="cash_in_hand" class="form-control">
                                        </div>
                                        @error('cash_in_hand')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Family Expense</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="family_expense" class="form-control">
                                        </div>
                                        @error('family_expense')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Payment</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="payment" class="form-control">
                                        </div>
                                        @error('payment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Remarks</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="remarks" class="form-control">
                                        </div>
                                        @error('remarks')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>MR X file Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Assesment Year</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="assessment_year" class="form-control">
                                        </div>
                                        @error('assessment_year')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>TIN No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="tin_no" class="form-control">
                                        </div>
                                        @error('tin_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>NID No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="nid_no" class="form-control">
                                        </div>
                                        @error('nid_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Circle & Zone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="circle_of_zone" class="form-control">
                                        </div>
                                        @error('circle_of_zone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Net Wealth</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="net_wealth" class="form-control">
                                        </div>
                                        @error('net_wealth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Net Wealth(prevoius)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="previous_net_wealth" class="form-control">
                                        </div>
                                        @error('previous_net_wealth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Accretion in Wealth</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="accretion_in_wealth" class="form-control">
                                        </div>
                                        @error('accretion_in_wealth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Agriculture Property</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="agriculture_property" class="form-control">
                                        </div>
                                        @error('agriculture_property')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Motor Vehicle</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="motor_vehicle" class="form-control">
                                        </div>
                                        @error('motor_vehicle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Furniture</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="furniture" class="form-control">
                                        </div>
                                        @error('furniture')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Any Other Assets</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="other_asset" class="form-control">
                                        </div>
                                        @error('other_asset')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Liabilities</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="liabilities" class="form-control">
                                        </div>
                                        @error('liabilities')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Source of Fund</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="source_of_fund" class="form-control">
                                        </div>
                                        @error('source_of_fund')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Register Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="register_number" class="form-control">
                                        </div>
                                        @error('register_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Submission Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-solid fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="date" name="submission_date" class="form-control">
                                        </div>
                                        @error('submission_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div style="text-align:center;">
                                <input class="btn btn-sm btn-primary" type="button" id="printBtn" value="Print">
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="text-align:center;">
                                <input class="btn btn-sm btn-primary" type="button" id="savePrintBtn" value="Save & Print">
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="text-align:center;">
                                <input class="btn btn-sm btn-primary" type="button" id="savePdfBtn" value="Save as Pdf">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Add additional buttons or controls if needed -->
            </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function(){
            $('.editBtn').click(function(){
                const clientData = {
                    id: $(this).data('id'),
                    name: $(this).data('name'),
                    year: $(this).data('assessment_year'),
                    address: $(this).data('address'),
                    tin_no: $(this).data('tin_no'),
                    mobile_no: $(this).data('mobile_no'),
                    nid_no: $(this).data('nid_no'),
                    source_income: $(this).data('source_income'),
                    circle_of_zone: $(this).data('circle_of_zone'),
                    total_income: $(this).data('total_income'),
                    net_wealth: $(this).data('net_wealth'),
                    tax_paid: $(this).data('tax_paid'),
                    previous_net_wealth: $(this).data('previous_net_wealth'),
                    business_capital: $(this).data('business_capital'),
                    accretion_in_wealth: $(this).data('accretion_in_wealth'),
                    non_agriculture_property: $(this).data('non_agriculture_property'),
                    agriculture_property: $(this).data('agriculture_property'),
                    investment: $(this).data('investment'),
                    motor_vehicle: $(this).data('motor_vehicle'),
                    jewellery: $(this).data('jewellery'),
                    furniture: $(this).data('furniture'),
                    electronic_equipment: $(this).data('electronic_equipment'),
                    other_asset: $(this).data('other_asset'),
                    cash_in_hand: $(this).data('cash_in_hand'),
                    liabilities: $(this).data('liabilities'),
                    family_expense: $(this).data('family_expense'),
                    source_of_fund: $(this).data('source_of_fund'),
                    payment: $(this).data('payment'),
                    register_number: $(this).data('register_number'),
                    remarks: $(this).data('remarks'),
                    submission_date: $(this).data('submission_date'),
                };

                // Set values to form fields
                $('input[name="client_id"]').val(clientData.id);
                $('input[name="name"]').val(clientData.name);
                $('input[name="assessment_year"]').val(clientData.year);
                $('input[name="address"]').val(clientData.address);
                $('input[name="tin_no"]').val(clientData.tin_no);
                $('input[name="mobile_no"]').val(clientData.mobile_no);
                $('input[name="nid_no"]').val(clientData.nid_no);
                $('input[name="source_income"]').val(clientData.source_income);
                $('input[name="circle_of_zone"]').val(clientData.circle_of_zone);
                $('input[name="total_income"]').val(clientData.total_income);
                $('input[name="net_wealth"]').val(clientData.net_wealth);
                $('input[name="tax_paid"]').val(clientData.tax_paid);
                $('input[name="previous_net_wealth"]').val(clientData.previous_net_wealth);
                $('input[name="business_capital"]').val(clientData.business_capital);
                $('input[name="accretion_in_wealth"]').val(clientData.accretion_in_wealth);
                $('input[name="non_agriculture_property"]').val(clientData.non_agriculture_property);
                $('input[name="investment"]').val(clientData.investment);
                $('input[name="motor_vehicle"]').val(clientData.motor_vehicle);
                $('input[name="jewellery"]').val(clientData.jewellery);
                $('input[name="furniture"]').val(clientData.furniture);
                $('input[name="electronic_equipment"]').val(clientData.electronic_equipment);
                $('input[name="other_asset"]').val(clientData.other_asset);
                $('input[name="cash_in_hand"]').val(clientData.cash_in_hand);
                $('input[name="liabilities"]').val(clientData.liabilities);
                $('input[name="family_expense"]').val(clientData.family_expense);
                $('input[name="source_of_fund"]').val(clientData.source_of_fund);
                $('input[name="payment"]').val(clientData.payment);
                $('input[name="register_number"]').val(clientData.register_number);
                $('input[name="remarks"]').val(clientData.remarks);
                $('input[name="submission_date"]').val(clientData.submission_date);

                // Open the modal
                $('#myModal').modal('show');
            });
        });
    </script>

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
