@extends('layouts.admin')

@section('title', 'Detail Item Pembeli')

@section('content')

    <div class="row">
        <div class="col-md-12">

            @if (session('message'))
                <div class="alert alert-success mb-3">{{ session('message') }}</div>
            @endif


            <div class="card">
                <div class="card-header">
                    <h3>Detail Pembelian
                        <a href="{{ url('admin/orders') }}" class="btn btn-danger btn-sm float-end mx-1 text-white">
                            <span class="mdi mdi-arrow-left-bold"></span> Kembali
                        </a>
                        <a href="{{ url('admin/invoice/'.$order->id.'/generate') }}" class="btn btn-primary btn-sm float-end mx-1 text-white">
                            <span class="mdi mdi-download"></span> Download Struk
                        </a>
                        <a href="{{ url('admin/invoice/'.$order->id) }}" target="_blank" class="btn btn-warning btn-sm float-end mx-1 text-white">
                            <span class="mdi mdi-eye"></span> Lihat Struk
                        </a>
                        <a href="{{ url('admin/invoice/'.$order->id.'/mail') }}" class="btn btn-info btn-sm float-end mx-1 text-white disabled">
                            <span class="mdi mdi-send"></span> Kirimkan Email
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Detail Pembelian</h5>
                            <hr>
                            <h6>ID Pembelian : {{ $order->id }}</h6>
                            <h6>Tracking No/ID : {{ $order->tracking_no }}</h6>
                            <h6>Pesanan Dibuat : {{ $order->created_at->format('d-m-Y h:i A') }}</h6>
                            <h6>Metode Pembayaran : {{ $order->payment_mode }}</h6>
                            <h6 class="border p-2 text-success">
                                Status Pemesanan : <span class="text-uppercase">{{ $order->status_message }}</span>
                            </h6>
                        </div>
                        <div class="col-md-6">
                            <h5>Detail User</h5>
                            <hr>
                            <h6>Nama Lengkap : {{ $order->fullname }}</h6>
                            <h6>Email : {{ $order->email }}</h6>
                            <h6>Telepon : {{ $order->phone }}</h6>
                            <h6>Alamat : {{ $order->address }}</h6>
                            <h6>Kode Pos : {{ $order->pincode }}</h6>
                        </div>
                    </div>

                    <br>
                    <h5>Order Items</h5>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>ID Item</th>
                                    <th>Gambar</th>
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
                                        <td class="text-center" width="10%">{{ $orderItem->id }}</td>
                                        <td class="text-center" width="10%">
                                            @if ($orderItem->product->productImages)
                                                <img src="{{ asset($orderItem->product->productImages[0]->image) }}"
                                                    style="width: 50px; height: 50px" alt="">
                                            @else
                                                <img src="" style="width: 50px; height: 50px" alt="">
                                            @endif
                                        </td>
                                        <td>
                                            {{ $orderItem->product->name }}
                                            @if ($orderItem->productColor)
                                                @if ($orderItem->productColor->color)
                                                    <span>- Warna : {{ $orderItem->productColor->color->name }}</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td width="10%">Rp. {{ $orderItem->product->selling_price }}</td>
                                        <td class="text-center" width="10%">{{ $orderItem->quantity }}</td>
                                        <td width="10%" class="fw-bold">Rp.
                                            {{ $orderItem->quantity * $orderItem->product->selling_price }}</td>
                                        @php
                                            $totalPrice += $orderItem->product->selling_price * $orderItem->quantity;
                                        @endphp
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="5" class="fw-bold">Total Keseluruhan :</td>
                                    <td colspan="1" class="fw-bold">Rp. {{ $totalPrice }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="card border mt-3">
                <div class="card-body">
                    <h4>Proses Order (Perbarui Status Order)</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <form action="{{ url('admin/orders/'.$order->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <label>Perbarui Status Order</label>
                                <div class="input-group">
                                    <select name="order_status" class="form-select">
                                        <option value="">-- Pilih Status Order --</option>
                                        <option value="sedang diproses" {{  Request::get('status') == 'sedang diproses' ? 'selected':''  }}>Sedang Diproses</option>
                                        <option value="telah diterima" {{ Request::get('status') == 'telah diterima' ? 'selected':'' }}>Telah Diterima</option>
                                        <option value="pending" {{ Request::get('status') == 'pending' ? 'selected':'' }}>Pending</option>
                                        <option value="dibatalkan" {{ Request::get('status') == 'dibatalkan' ? 'selected':'' }}>Dibatalkan</option>
                                        <option value="out-for-delivery" {{ Request::get('status') == 'out-for-delivery' ? 'selected':'' }}>Out for Delivery</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary text-white">Update</button>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-7">
                            <br/>
                            <h4 class="mt-3">Status Order Sebelumnya : <span class="text-uppercase">{{ $order->status_message }}</span></h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
