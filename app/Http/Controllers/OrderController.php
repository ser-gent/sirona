<?php

namespace App\Http\Controllers;

use App\Models\DeliveryPoint;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/** @noinspection PhpUnreachableStatementInspection */
class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        $points = DeliveryPoint::all();
        return view('orders.create', compact('products', 'points'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'deliveryPoint' => 'required|exists:delivery_points,id',
            'product' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'arrival_time' => 'required|regex:/[0-9]{2}:[0-9]{2}/',
        ]);

        $product = Product::find($request->input('product'));
        $product->stock -= intval($request->input('quantity'));
        $product->save();

        $now = Carbon::now('Europe/Paris');
        $time = $request->input('arrival_time');
        $date = Carbon::create($now->year,
            $now->month,
            $now->day,
            substr($time, 0, 2),
            substr($time, -2, 2), 0, 'Europe/Paris');

        if ($now->greaterThan($date)) {
            return redirect()->route('order.create')
                ->with('error', 'Erreur dans l\'horaire');
        }

        $command = new Order();
        $command->receiver = Auth::id();
        $command->quantity = intval($request->input('quantity'));
        $command->product = intval($request->input('product'));
        $command->arrival = intval($request->input('deliveryPoint'));
        $command->departure = Product::find($request->input('product'))->location;
        $command->arrival_time = $date;
        $command->status = 0;
        $command->save();

        return redirect()->route('order.create')
            ->with('success', 'Commande enregistrée');
    }

    public function show(int $id)
    {
        $order = Order::findOrFail($id);
        $product = Product::findOrFail($order->product);
        $departure = DeliveryPoint::findOrFail($order->departure);
        $arrival = DeliveryPoint::findOrFail($order->arrival);
        $receiver = User::findOrFail($order->receiver);
        //ddd($receiver);
        return view('orders.show', compact('order', 'product', 'arrival', 'departure', 'receiver'));
    }

    public function destroy(Order $order)
    {
        //
    }
}
