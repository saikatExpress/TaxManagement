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
        <div class="row">
            <div style="width: 80%; margin-left:auto; margin-right:auto; display:block;">
                <h4 style="text-align:center;">{{ $clientInfo->name }} File Information</h4>

                <hr>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px; float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Name</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->name }}</div>
                        <div style="clear: both;"></div>
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Assessment Year</div>
                        <div style="float: left;">: {{ $clientInfo->assessment_year }}</div>
                        <div style="clear: both;"></div>
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px; float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Address</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->address }}</div>
                        <div style="clear: both;"></div>
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">TIN No</div>
                        <div style="float: left;">: {{ $clientInfo->tin_no }}</div>
                        <div style="clear: both;"></div>
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Mobile No</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->mobile_no }}</div>
                        <div style="clear: both;"></div>
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">NID No</div>
                        <div style="float: left;">: {{ $clientInfo->nid_no }}</div>
                        <div style="clear: both;"></div>
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Source Of Income</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->source_income }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Circle & Zone</div>
                        <div style="float: left;">: {{ $clientInfo->circle_of_zone }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Total Income</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->total_income }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Net Wealth</div>
                        <div style="float: left;">: {{ $clientInfo->net_wealth }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Tax Paid</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->tax_paid }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Net Wealth(previous)</div>
                        <div style="float: left;">: {{ $clientInfo->previous_net_wealth }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Businees Capital</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->business_capital }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Accretion in Wealth</div>
                        <div style="float: left;">: {{ $clientInfo->accretion_in_wealth }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Agriculture Property</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->agriculture_property }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Non Agriculture Property</div>
                        <div style="float: left;">: {{ $clientInfo->non_agriculture_property }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Investment</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->investment }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Motor Vehicle</div>
                        <div style="float: left;">: {{ $clientInfo->motor_vehicle }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Jewellery</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->jewellery }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Furniture</div>
                        <div style="float: left;">: {{ $clientInfo->furniture }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Electronic Equipment</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->electronic_equipment }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Any Other Assets</div>
                        <div style="float: left;">: {{ $clientInfo->other_asset }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Any Other Assets</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->other_asset }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Cash In Hand</div>
                        <div style="float: left;">: {{ $clientInfo->cash_in_hand }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Liabilities</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->liabilities }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Family Expense</div>
                        <div style="float: left;">: {{ $clientInfo->family_expense }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Source Of Fund</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->source_of_fund }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Payment</div>
                        <div style="float: left;">: {{ $clientInfo->payment }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px;float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Register No</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->register_number }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>

                    <div style="font-size: 1.4rem; margin-bottom: 10px;">
                        <div style="float: left; width: 20%; color:#000;font-weight:600;">Remarks</div>
                        <div style="float: left;">: {{ $clientInfo->remarks }}</div>
                        <div style="clear: both;"></div> <!-- Clear the float -->
                    </div>
                </div>

                <div>
                    <div style="font-size: 1.4rem; margin-bottom: 10px; float:left; width: 65%;">
                        <div style="float: left; width: 25%; color:#000;font-weight:600;">Submission Date</div>
                        <div style="margin-left:10rem;">: {{ $clientInfo->submission_date }}</div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>

            <div style="clear: both;"></div>

            <div style="width:50%; margin-left:auto;margin-right:auto;display:block; margin-top:1rem;">
                <h4 style="text-align: center;">Md. Kamrul Hasan (Moon)</h4>
                <p style="text-align: center;">
                    ITP(NBR), MBS(Accounting),LLB(NU)
                </p>
                <p style="text-align: center; margin-bottom:0;">
                    Income Tax Advisor
                </p>
                <p style="text-align: center; margin-bottom:0;">
                    01678-171917
                </p>
            </div>

        </div>
        <div class="pdf_footer_menu">
            <!-- Add a print button to allow users to print the page -->
            <button class="no-print btn btn-lg btn-primary" onclick="window.print()">Print</button>

            <!-- Add a button to allow users to close the printable view -->
            <button class="no-print btn btn-lg btn-warning" onclick="goBack()">Close</button>
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
