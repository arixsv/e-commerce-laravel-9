<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\InvoiceOrderMailable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        //  $todayDate = Carbon::now();
        //  $orders  = Order::whereDate('created_at', $todayDate)->paginate(10);

        $todayDate = Carbon::now()->format('Y-m-d');
        $orders  = Order::when($request->date != null, function($q) use ($request) {

                            return $q->whereDate('created_at', $request->date);
                        }, function ($q) use ($todayDate) {

                            return $q->whereDate('created_at', $todayDate);
                        })
                        ->when($request->status != null, function($q) use ($request) {
                            
                            return $q->where('status_message', $request->status);
                        })
                        ->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    public function show(int $orderId)
    {
        $order  = Order::where('id', $orderId)->first();
        if ($order) {
            return view('admin.orders.view', compact('order'));
        }else {
            return redirect('admin/orders')->with('message', 'Order ID tidak ditemukan');
        }
    }

    public function updateOrderStatus(int $orderId, Request $request)
    {
        $order  = Order::where('id', $orderId)->first();
        if ($order) {

            $order->update([
                'status_message' => $request->order_status
            ]);
            return redirect('admin/orders/'.$orderId)->with('message', 'Status Order Diperbarui');
        }else {
            return redirect('admin/orders/'.$orderId)->with('message', 'Status Order ID tidak ditemukan');
        }
    }

    public function viewInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('admin.invoice.generate-invoice', compact('order'));
    }

    public function generateInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);
        $data = ['order' => $order];

        $todayDate = Carbon::now()->format('d-m-Y');
        $pdf = Pdf::loadView('admin.invoice.generate-invoice', $data);
        return $pdf->download('faktur-'.$order->id.'-'.$todayDate.'.pdf');
    }

    public function mailInvoice(int $orderId)
    {
        try{
            $order = Order::findOrFail($orderId);

            Mail::to("$order->email")->send(new InvoiceOrderMailable($order));
            return redirect('admin/orders/'.$orderId)->with('message', 'Struk Berhasil Dikirim ke'.$order->email);

        }catch(\Exception $e){

            return redirect('admin/orders/'.$orderId)->with('message', 'Terjadi Kesalahan!');
        }
        
    }
}
