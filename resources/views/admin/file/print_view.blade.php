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
    <div class="print_div">
        <h1>{{ $pdf->name }} File Information</h1>

        <div class="printable_div">
            <div class="print_section">
                <div class="content-item">
                    <p>
                        1. Name
                    </p>
                    <p>
                        :
                    </p>
                </div>
                <div class="content-item">
                    <p>
                        2.NID/Passport number(if no nid)
                    </p>
                    <p>
                        :
                    </p>
                </div>

                <div class="d-flex align-items-center">
                    <p>
                        3.TIN :
                    </p>

                    <div class="d-flex align-items-center">
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                        <div style="border:1px solid black; width:20px;height:20px;"></div>
                    </div>

                </div>

                <div class="content-item">
                    <p>
                        4. (a) Circle :
                    </p>

                    <p>
                        (b) Tax Zone :
                    </p>
                </div>

                <div class="d-flex">
                    <p>
                        5. Assesment Year ...................
                    </p>

                    <p>
                        6. Residential Status : Resident <input type="checkbox"> / Non-resident <input type="checkbox">
                    </p>
                </div>

                <div>
                    <p>7. Address of Contact / Employer / Name of Business organization: </p>
                    <p style="text-align: right;">
                        ....................................................................................................................................................................... <br>
                        ....................................................................................................................................................................... <br>
                        ....................................................................................................................................................................... <br>
                    </p>
                    <p style="text-align: center;">
                        Mobile/Phone : <span>.........................................................................................................</span>
                    </p>
                </div>

                <div class="inline_content">
                    <div class="content-item">
                        <p>
                            8. Source of Income
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            9. Total Asset
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            10. Total Income
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            11. Chargeable Tax
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            12. Tax Rebate
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            13. Tax Payable
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            14. Tax Deducted/Collected at Source(if any)
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            15. Tax paid with this return
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                    <div class="content-item">
                        <p>
                            16. Lifestyle Expense
                        </p>
                        <p>
                            :
                        </p>
                    </div>
                </div>

                <div class="pdf_footer">
                    <h2>Md. Kamrul Hasan (Moon)</h2>
                    <p>
                        ITP(NBR), MBS(Accounting),LLB(NU)
                    </p>
                    <p>
                        Income Tax Advisor
                    </p>
                </div>

            </div>
        </div>


        <div class="pdf_footer_menu">
            <!-- Add a print button to allow users to print the page -->
            <button class="no-print btn btn-lg btn-primary" onclick="window.print()">Print</button>

            <!-- Add a button to allow users to close the printable view -->
            <button class="no-print btn btn-lg btn-warning" onclick="window.close()">Close</button>
        </div>
    </div>
</body>
</html>
