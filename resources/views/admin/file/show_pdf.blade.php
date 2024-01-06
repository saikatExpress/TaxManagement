<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Tax Information</title>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/css/style.css') }}">
</head>
<body>
    <div class="print_div" style="width: 95%;">
        <h1>{{ $clientInfo->name }} File Information</h1>

        <div class="printable_div" style="border:none;">

            <div class="card">
                <div class="card-header">
                    <h4>Client Form</h4>
                </div>

                <div class="card-body">

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <div>
                                <h6>Name </h6>
                            </div>
                            <div>
                                <p> : {{ $clientInfo->name }}</p>
                            </div>
                        </div>

                        <div class="pdf_div">
                            <h6>Assessment Year  </h6>
                            <p> : {{ $clientInfo->assessment_year }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Address </h6>
                            <p> : {{ $clientInfo->address }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>TIN No  </h6>
                            <p> : {{ $clientInfo->tin_no }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Mobile No </h6>
                            <p> : {{ $clientInfo->mobile_no }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>NID No  </h6>
                            <p> : {{ $clientInfo->nid_no }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Source Of Income </h6>
                            <p> : {{ $clientInfo->source_income }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Circle & Zone  </h6>
                            <p> : {{ $clientInfo->circle_of_zone }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Total Income </h6>
                            <p> : {{ $clientInfo->total_income }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Net Wealth  </h6>
                            <p> : {{ $clientInfo->net_wealth }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Tax Paid </h6>
                            <p> : {{ $clientInfo->tax_paid }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Net Wealth(previous)  </h6>
                            <p> : {{ $clientInfo->previous_net_wealth }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Businees Capital </h6>
                            <p> : {{ $clientInfo->business_capital }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Accretion in Wealth  </h6>
                            <p> : {{ $clientInfo->accretion_in_wealth }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Non Agriculture Property </h6>
                            <p> : {{ $clientInfo->non_agriculture_property }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Agriculture Property  </h6>
                            <p> : {{ $clientInfo->agriculture_property }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Investment </h6>
                            <p> : {{ $clientInfo->investment }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Motor Vehicle  </h6>
                            <p> : {{ $clientInfo->motor_vehicle }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Jewellery </h6>
                            <p> : {{ $clientInfo->jewellery }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Furniture  </h6>
                            <p> : {{ $clientInfo->furniture }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Electronic Equipment </h6>
                            <p> : {{ $clientInfo->electronic_equipment }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Any Other Assets  </h6>
                            <p> : {{ $clientInfo->other_asset }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Cash In Hand </h6>
                            <p> : {{ $clientInfo->cash_in_hand }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Liabilities  </h6>
                            <p> : {{ $clientInfo->liabilities }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Family Expense </h6>
                            <p> : {{ $clientInfo->family_expense }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Source Of Fund  </h6>
                            <p> : {{ $clientInfo->source_of_fund }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Payment </h6>
                            <p> : {{ $clientInfo->payment }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Register Number  </h6>
                            <p> : {{ $clientInfo->register_number }}</p>
                        </div>
                    </div>

                    <div class="d-flex m-2 p-2">
                        <div class="pdf_div">
                            <h6>Remarks </h6>
                            <p> : {{ $clientInfo->remarks }}</p>
                        </div>

                        <div class="pdf_div">
                            <h6>Submission Date  </h6>
                            <p> : {{ $clientInfo->submission_date }}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="pdf_footer_menu">
            <!-- Add a print button to allow users to print the page -->
            <button class="no-print btn btn-lg btn-primary" onclick="window.print()">Download</button>

            <!-- Add a button to allow users to close the printable view -->
            <button class="no-print btn btn-lg btn-warning" onclick="window.close()">Close</button>
        </div>
    </div>
</body>
</html>
