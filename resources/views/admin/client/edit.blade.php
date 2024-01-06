@extends('layout.app')
@section('content')
<section class="section">
    <div class="section-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form id="clientForm" style="width: 100%;" action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row">



                    <input type="hidden" name="action" id="action" value="">


                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $client->name }} edit file Information</h4>
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
                                        <input type="text" name="name" value="{{ $client->name }}" class="form-control">
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
                                        <input type="text" name="address" value="{{ $client->address }}" class="form-control">
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
                                        <input type="text" name="mobile_no" value="{{ $client->mobile_no }}"  class="form-control">
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
                                        <input type="text" name="source_income" value="{{ $client->source_income }}" class="form-control">
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
                                        <input type="text" name="total_income" value="{{ $client->total_income }}" class="form-control">
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
                                        <input type="text" name="tax_paid" value="{{ $client->tax_paid }}" class="form-control">
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
                                        <input type="text" name="business_capital" value="{{ $client->business_capital }}" class="form-control">
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
                                        <input type="text" name="non_agriculture_property" value="{{ $client->non_agriculture_property }}" class="form-control">
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
                                        <input type="text" name="investment" value="{{ $client->investment }}" class="form-control">
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
                                        <input type="text" name="jewellery" value="{{ $client->jewellery }}" class="form-control">
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
                                        <input type="text" name="electronic_equipment" value="{{ $client->electronic_equipment }}" class="form-control">
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
                                        <input type="text" name="cash_in_hand" value="{{ $client->cash_in_hand }}" class="form-control">
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
                                        <input type="text" name="family_expense" value="{{ $client->family_expense }}" class="form-control">
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
                                        <input type="text" name="payment" value="{{ $client->payment }}" class="form-control">
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
                                        <input type="text" name="remarks" value="{{ $client->remarks }}" class="form-control">
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
                                <h4>{{ $client->name }} edit file Information</h4>
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
                                        <input type="text" name="assessment_year" value="{{ $client->assessment_year }}" class="form-control">
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
                                        <input type="text" name="tin_no" class="form-control" value="{{ $client->tin_no }}">
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
                                        <input type="text" name="nid_no" class="form-control" value="{{ $client->nid_no }}">
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
                                        <input type="text" name="circle_of_zone" class="form-control" value="{{ $client->circle_of_zone }}">
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
                                        <input type="text" name="net_wealth" value="{{ $client->net_wealth }}" class="form-control">
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
                                        <input type="text" name="previous_net_wealth" value="{{ $client->previous_net_wealth }}" class="form-control">
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
                                        <input type="text" name="accretion_in_wealth" value="{{ $client->accretion_in_wealth }}" class="form-control">
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
                                        <input type="text" name="agriculture_property" value="{{ $client->agriculture_property }}" class="form-control">
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
                                        <input type="text" name="motor_vehicle" value="{{ $client->motor_vehicle }}" class="form-control">
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
                                        <input type="text" name="furniture" value="{{ $client->furniture }}" class="form-control">
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
                                        <input type="text" name="other_asset" value="{{ $client->other_asset }}" class="form-control">
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
                                        <input type="text" name="liabilities" value="{{ $client->liabilities }}" class="form-control">
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
                                        <input type="text" name="source_of_fund" value="{{ $client->source_of_fund }}" class="form-control">
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
                                        <input type="text" name="register_number" value="{{ $client->register_number }}" class="form-control">
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
                                        <input type="text" name="submission_date" value="{{ $client->submission_date }}" class="form-control">
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
                            <input class="btn btn-sm btn-primary" type="button" id="savePrintBtn" value="Update & Print">
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
</section>

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Function to set action and submit form
        function submitForm(action) {
            $('#action').val(action);  // Set action value
            $('#clientForm').submit(); // Submit the form
        }

        // Handle Print button click
        $('#printBtn').click(function() {
            submitForm('print');
        });

        // Handle Save & Print button click
        $('#savePrintBtn').click(function() {
            submitForm('save_print');
        });

        // Handle Save as Pdf button click
        $('#savePdfBtn').click(function() {
            submitForm('save_pdf');
        });
    });
</script>

@endsection