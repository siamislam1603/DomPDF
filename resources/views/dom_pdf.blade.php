<!DOCTYPE html>
<html>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        text-align: left;
        padding: 8px;
        vertical-align: top;
    }

    .dom-table-bordered td, .dom-table-bordered th{
        border: 1px solid #dddddd;
        border-left: none;
        border-right: none;
    }
    .dom-borderless-row td{
        border: none;
    }
    .dom-company-logo {
        width: 100px;
        object-fit: contain;
        object-position: center;
    }

    .dom-text-ash {
        color: #9FA7AD;
    }

    .dom-fw-bold {
        font-weight: bold;
    }

    .dom-fw-lighter {
        font-weight: lighter;
    }

    .dom-fs-sm {
        font-size: .5rem;
    }

    .dom-fs-md {
        font-size: .75rem;
    }

    .dom-fs-lg {
        font-size: 1rem;
    }

    .dom-d-inline-block {
        display: inline-block;
    }

    .dom-my-8 {
        margin: 8px 0;
    }

    .dom-mt-8{
        margin-top: 8px;
    }
    .dom-mb-8{
        margin-bottom: 8px;
    }

    .dom-paste-badge {
        background-color: #CFFAFE;
        color: black;
        padding: 5px;
    }

    .dom-float-right{
        float: right;
    }
    .dom-vertical-align-center{
        vertical-align: middle;
    }
    .dom-text-right{
        text-align: right;
    }
    .dom-text-left{
        text-align: left;
    }
    .dom-text-center{
        text-align: center;
    }
    .dom-mx-10{
        margin: 0 10px;
    }
    footer {
        position: fixed;
        bottom: -60px;
        left: 0px;
        right: 0px;
        height: 98px;
        text-align: center;
    }
</style>

<head>
    <title>Invoice DomPDF</title>
</head>

<body>
    <table style="margin-bottom: 50px;">
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>
                <div>
                    <div class="dom-my-8">
                        <h1>Lazychat</h1>
                    </div>
                    <br>
                    <div class="dom-my-8">From</div>
                    <div class="dom-my-8 dom-fw-bold">Lazychat Limited</div>
                </div>
            </td>
            <td>
                <div class="dom-float-right dom-text-right">
                    <div>
                        <div>To</div>
                        <div class="dom-fw-bold dom-my-8">Hannah Stravenue</div>
                        <div class="dom-my-8">
                            <div class="dom-text-ash dom-fs-md dom-d-inline-block dom-vertical-align-center">Invoice</div>
                            <div class="dom-paste-badge dom-d-inline-block">2021293</div>
                        </div>
                        <div class="dom-my-8 dom-text-ash dom-fs-md">
                            2972 Westheimer Rd.
                        </div>
                        <div class="dom-my-8 dom-text-ash dom-fs-md">
                            Santa Ana, Illinois 85486
                        </div>
                        <div class="dom-my-8 dom-text-ash dom-fs-md">
                            Contact No: +8800002121
                        </div>
                        <div class="dom-my-8 dom-text-ash dom-fs-md">
                            Issued On: April 22,2022
                        </div>
                        <div class="dom-my-8 dom-text-ash dom-fs-md">
                            Due Date: April 30,2022
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <table class="dom-table-bordered dom-my-8">
        <caption class="dom-text-left dom-fw-bold">Services</caption>
        <tr>
            <th class="dom-text-ash dom-fs-md">Item</th>
            <th class="dom-text-ash dom-fs-md">Description</th>
            <th class="dom-text-ash dom-fs-md">Qty</th>
            <th class="dom-text-ash dom-fs-md">Rate</th>
            <th class="dom-text-ash dom-fs-md">Amount</th>
        </tr>
        <tr>
            <td class="dom-fs-md">310730SM</td>
            <td class="dom-fs-md">
                <div class='dom-mb-8'>Service: Zoho Workplace</div>
                <div class='dom-my-8'>Plan: Workplace Standard</div>
                <div class="dom-my-8">User: 8</div>
                <div class="dom-my-8">Payment Duration: Monthly</div>
                <div class="dom-my-8">Services through: Jul 1,2021 - Jul 31, 2021</div>
            </td>
            <td class="dom-fs-md">1.00</td>
            <td class="dom-fs-md">32.00</td>
            <td class="dom-fs-md">32.00</td>
        </tr>
        <tr class="dom-borderless-row">
            <td colspan="2"></td>
            <td class="dom-fs-md dom-fw-bold" colspan="2">Sub Total</td>
            <td class="dom-fs-md dom-fw-bold">$35.00</td>
        </tr>
        <tr class="dom-borderless-row">
            <td colspan="2"></td>
            <td class="dom-fs-md dom-text-ash" colspan="2">Discount</td>
            <td class="dom-fs-md dom-fw-bold">$0.00</td>
        </tr>
        <tr class="dom-borderless-row">
            <td colspan="2"></td>
            <td class="dom-fs-md dom-text-ash" colspan="2">Total Tax</td>
            <td class="dom-fs-md dom-fw-bold">$0.00</td>
        </tr>
        <tr>
            <td colspan="2" style="border:none;"></td>
            <td class="dom-fs-md dom-fw-bold" colspan="2">Total</td>
            <td class="dom-fs-md dom-fw-bold">$35.00</td>
        </tr>
    </table>
    <div class="dom-my-8">
        <div class="dom-fw-bold dom-my-8">
            Payment Details
        </div>
        <div class="dom-my-8 dom-fs-md">
            <span class="dom-text-ash">Payment Method:</span> BKASH
        </div>
        <div class="dom-my-8 dom-fs-md">
            <span class="dom-text-ash">Account Name:</span> Random dfsalkf
        </div>
        <div class="dom-my-8 dom-fs-md">
            <span class="dom-text-ash">Account Number:</span> 9900 *** ** *31
        </div>
    </div>

    <footer>
        <div class="dom-text-center dom-my-8 dom-fs-md">Registered Office: 252, Senpara Parbata, Mirpur, Dhaka-1216</div>
        <div class="dom-text-center dom-my-8 dom-fs-md">Corporate Office: House No. 06/B, Road No. 32, 1st Floor, Gulshan-1, Dhaka-1212</div>
        <div class="dom-text-center dom-my-8 dom-fs-md">Contact: +8801996704612<span class="dom-mx-10">Email: support@lazychat.io</span>website:www.lazychat.io</div>
        <div style="border:4px solid #ffc901;"></div>
    </footer>
</body>
</html>
