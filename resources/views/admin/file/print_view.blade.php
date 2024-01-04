<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Printable Client Information</title>
    <!-- Add CSS for printable styles (optional) -->
    <style>
        /* Add your printable styles here */
        @media print {
            /* Add styles to hide non-essential elements (e.g., buttons, headers) */
            .no-print {
                display: none;
            }

            .url-remove {
                visibility: hidden;
            }

            @page {
                size: A4;
            }
        }
    </style>
</head>
<body>
    <h1>Client Information</h1>
    <!-- Display client information (e.g., name, address, etc.) -->
    <p><strong>Name:</strong> {{ $clientObj->name }}</p>
    <p><strong>Address:</strong> {{ $clientObj->address }}</p>
    <!-- Add other client details here -->

    <!-- Add a print button to allow users to print the page -->
    <button class="no-print" onclick="window.print()">Print</button>

    <!-- Add a button to allow users to close the printable view -->
    <button class="no-print" onclick="window.close()">Close</button>
</body>
</html>
