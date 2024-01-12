@extends('frontend.master')
@section('content')
<style>
    
    @media print {
        body {
            margin: 0;
        }

        header, footer {
            display: none;
        }

        .text-end {
            display: none;
        }

        .print-label {
            font-weight: bold;
            margin-right: 10px;
        }
    }

    .track-line {
        height: 2px !important;
        background-color: #488978;
        opacity: 1;
    }

    .dot {
        height: 10px;
        width: 10px;
        margin-left: 3px;
        margin-right: 3px;
        margin-top: 0px;
        background-color: #488978;
        border-radius: 50%;
        display: inline-block
    }

    .big-dot {
        height: 25px;
        width: 25px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        background-color: #488978;
        border-radius: 50%;
        display: inline-block;
    }

    .big-dot i {
        font-size: 12px;
    }

    .card-stepper {
        z-index: 0
    }
</style>

<section class="h-100 h-custom" style="background-color: #ffff;">
    <div class="text-end"><a onclick="printContent()" href=""><i class="bi bi-printer display-6 p-4"></i></a></div>
    <div class="container py-5 h-130" id="print-content">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td class="print-label">Payment Status</td>
                    <td>{{$order->payment_status}}</td>
                </tr>
                <tr>
                    <td class="print-label">Payment Method</td>
                    <td>{{$order->payment_method}}</td>
                </tr>
                <tr>
                    <td class="print-label">Amount</td>
                    <td>{{$order->total_price}}.BDT</td>
                </tr>
                <tr>
                    <td class="print-label">Transaction Number</td>
                    <td>{{$order->transaction_id}}</td>
                </tr>
                <tr>
                    <td class="print-label">Order Number</td>
                    <td>{{$order->id}}</td>
                </tr>
                <tr>
                    <td class="print-label">Name</td>
                    <td>{{$order->name}}</td>
                </tr>
                <tr>
                    <td class="print-label">Phone Number</td>
                    <td>{{$order->phone_number}}</td>
                </tr>
                <tr>
                    <td class="print-label">E-mail</td>
                    <td>{{$order->email}}</td>
                </tr>
               
                <tr>
                    <td class="print-label">Address</td>
                    <td>Dhaka</td>
                </tr>
                <tr>
                    <td class="print-label">Country</td>
                    <td>Bangladesh</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function printContent() {
            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('<link rel="stylesheet" href="{{ asset('path/to/your/bootstrap.css')}}" type="text/css" />');
            printWindow.document.write('</head><body>');
            printWindow.document.write(document.getElementById('print-content').innerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>
</section>

@endsection
