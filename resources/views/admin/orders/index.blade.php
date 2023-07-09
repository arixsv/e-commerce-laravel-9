@extends('layouts.admin')

@section('title', 'List Pembeli')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>List Pembeli</h3>
                </div>
                <div class="card-body">

                    <form action="" method="GET">

                        <div class="row">
                            <div class="col-md-3">
                                <label>Filter berdasarkan Tanggal</label>
                                <input type="date" name="date" value="{{ Request::get('date') ?? date('Y-m-d') }}" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label>Filter berdasarkan Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Pilih Semua Status</option>
                                    <option value="sedang diproses" {{ Request::get('status') == 'sedang diproses' ? 'selected':'' }}>Sedang Diproses</option>
                                    <option value="telah diterima" {{ Request::get('status') == 'telah diterima' ? 'selected':'' }}>Telah Diterima</option>
                                    <option value="pending" {{ Request::get('status') == 'pending' ? 'selected':'' }}>Pending</option>
                                    <option value="dibatalkan" {{ Request::get('status') == 'dibatalkan' ? 'selected':'' }}>Dibatalkan</option>
                                    <option value="out-for-delivery" {{ Request::get('status') == 'out-for-delivery' ? 'selected':'' }}>Out for Delivery</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <br/>
                                <button type="submit" class="btn btn-primary text-white">Filter</button>
                            </div>
                        </div>

                    </form>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>ID Order</th>
                                    <th>Tracking No</th>
                                    <th>Nama</th>
                                    <th>Mode Pembayaran</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $item)
                                    <tr>
                                        <td class="text-center">{{ $item->id }}</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>{{ $item->fullname }}</td>
                                        <td class="text-center">{{ $item->payment_mode }}</td>
                                        <td class="text-center">{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td class="text-center">{{ $item->status_message }}</td>
                                        <td class="text-center"><a href="{{ url('admin/orders/' . $item->id) }}"
                                                class="btn btn-primary btn-sm text-white">Lihat</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">Tidak ada pesanan hari ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
