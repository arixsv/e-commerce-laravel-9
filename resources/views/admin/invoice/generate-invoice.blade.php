<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #{{ $order->id }}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Aullya Olshop</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>ID Faktur : #{{ $order->id }}</span> <br>
                    <span>Tanggal : {{ date('d / m / Y') }}</span> <br>
                    <span>Kode Pos : 57028</span> <br>
                    <span>Alamat : Jawa Tengah, Jawa, Indonesia</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Detail Pembelian</th>
                <th width="50%" colspan="2">Detail Pembeli</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID Pembelian : </td>
                <td>{{ $order->id }}</td>

                <td>Nama Lengkap : </td>
                <td>{{ $order->fullname }}</td>
            </tr>
            <tr>
                <td>Tracking ID/No. : </td>
                <td>{{ $order->tracking_no }}</td>

                <td>Email : </td>
                <td>{{ $order->email }}</td>
            </tr>
            <tr>
                <td>Tanggal Pembelian : </td>
                <td>{{ $order->created_at->format('d-m-Y h:i A') }}</td>

                <td>Telepon : </td>
                <td>{{ $order->phone }}</td>
            </tr>
            <tr>
                <td>Metode Pembayaran : </td>
                <td>{{ $order->payment_mode }}</td>

                <td>Alamat: </td>
                <td>{{ $order->address }}</td>
            </tr>
            <tr>
                <td>Status Pembelian : </td>
                <td>{{ $order->status_message }}</td>

                <td>Kode Pos : </td>
                <td>{{ $order->pincode }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Barang Pembelian
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalPrice = 0;
            @endphp
            @foreach ($order->orderItems as $orderItem)
                <tr>
                    <td width="10%">{{ $orderItem->id }}</td>
                    <td>
                        {{ $orderItem->product->name }}
                        @if ($orderItem->productColor)
                            @if ($orderItem->productColor->color)
                                <span>- Warna : {{ $orderItem->productColor->color->name }}</span>
                            @endif
                        @endif
                    </td>
                    <td width="10%">Rp. {{ $orderItem->product->selling_price }}</td>
                    <td width="10%">{{ $orderItem->quantity }}</td>
                    <td width="15%" class="fw-bold">Rp.
                        {{ $orderItem->quantity * $orderItem->product->selling_price }}</td>
                    @php
                        $totalPrice += $orderItem->product->selling_price * $orderItem->quantity;
                    @endphp
                </tr>
            @endforeach
            <tr>
                <td colspan="4" class="total-heading">Total Keseluruhan :</td>
                <td colspan="1" class="total-heading">Rp. {{ $totalPrice }}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        Terima kasih telah berbelanja di toko kami
    </p>

</body>
</html>