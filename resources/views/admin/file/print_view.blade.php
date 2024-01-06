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
    <div class="container">
        <h1 style="margin-left: 10rem;">{{ $clientInfo->name }} File Information</h1>

        <div class="custom_row">
            <div class="row">
                <div class="col-6">
                    <div class="content-item">
                        <p class="my_class">
                            <span>Name</span>
                            <span>:</span>
                        </p>
                        <p>{{ $clientInfo->name }}</p>
                    </div>
                    <div class="content-item">
                        <p class="my_class">
                            <span>Address</span>
                            <span>:</span>
                        </p>
                        <p>
                            {{ $clientInfo->address }}
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            Mobile No
                        </p>
                        <p>
                            : {{ $clientInfo->mobile_no }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Source of Income
                        </p>
                        <p>
                            : {{ $clientInfo->source_income }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Total Income
                        </p>
                        <p>
                            : {{ $clientInfo->total_income }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Tax Paid
                        </p>
                        <p>
                            : {{ $clientInfo->tax_paid }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Business Capital
                        </p>
                        <p>
                            : {{ $clientInfo->business_capital }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Non Agriculture Property
                        </p>
                        <p>
                            : {{ $clientInfo->non_agriculture_property }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Investment
                        </p>
                        <p>
                            : {{ $clientInfo->investment }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Jewellery
                        </p>
                        <p>
                            : {{ $clientInfo->jewellery }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Electronic Equipment
                        </p>
                        <p>
                            : {{ $clientInfo->electronic_equipment }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Cash In Hand
                        </p>
                        <p>
                            : {{ $clientInfo->cash_in_hand }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Family Expense
                        </p>
                        <p>
                            : {{ $clientInfo->family_expense }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Payment
                        </p>
                        <p>
                            : {{ $clientInfo->payment }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Remarks
                        </p>
                        <p>
                            : {{ $clientInfo->remarks }}
                        </p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="content-item">
                        <p class="my_class">
                            <span>Assessment Year</span>
                            <span>:</span>
                        </p>
                        <p>{{ $clientInfo->assessment_year }}</p>
                    </div>
                    <div class="content-item">
                        <p>
                            Tin No
                        </p>
                        <p>
                            : {{ $clientInfo->tin_no }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            NID No
                        </p>
                        <p>
                            : {{ $clientInfo->nid_no }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Circle & Zone
                        </p>
                        <p>
                            : {{ $clientInfo->circle_of_zone }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Net Wealth
                        </p>
                        <p>
                            : {{ $clientInfo->net_wealth }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Net Wealth (previous)
                        </p>
                        <p>
                            : {{ $clientInfo->previous_net_wealth }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Accretion in Wealth
                        </p>
                        <p>
                            : {{ $clientInfo->accretion_in_wealth }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Agriculture Property
                        </p>
                        <p>
                            : {{ $clientInfo->agriculture_property }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Motor Vehicle
                        </p>
                        <p>
                            : {{ $clientInfo->motor_vehicle }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Furniture
                        </p>
                        <p>
                            : {{ $clientInfo->furniture }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Any other assets
                        </p>
                        <p>
                            : {{ $clientInfo->other_asset }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Liabilities
                        </p>
                        <p>
                            : {{ $clientInfo->liabilities }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Source Of Fund
                        </p>
                        <p>
                            : {{ $clientInfo->source_of_fund }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Register Number
                        </p>
                        <p>
                            : {{ $clientInfo->register_number }}
                        </p>
                    </div>

                    <div class="content-item">
                        <p>
                            Submission Date
                        </p>
                        <p>
                            : {{ $clientInfo->submission_date }}
                        </p>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div>
                        <h4 style="text-align: center;">Md. Kamrul Hasan (Moon)</h4>
                        <p style="text-align: center;">
                            ITP(NBR), MBS(Accounting),LLB(NU)
                        </p>
                        <p style="text-align: center;">
                            Income Tax Advisor
                        </p>
                    </div>
                </div>
                <div class="col-4"></div>

                <div class="pdf_footer_menu">
                    <!-- Add a print button to allow users to print the page -->
                    <button class="no-print btn btn-lg btn-primary" onclick="window.print()">Print</button>

                    <!-- Add a button to allow users to close the printable view -->
                    <button class="no-print btn btn-lg btn-warning" onclick="goBack()">Close</button>
                </div>
            </div>
        </div>

    </div>
</body>

<script>
    // Function to go back to the previous page
    function goBack() {
        window.history.back();
    }
</script>
</html>
