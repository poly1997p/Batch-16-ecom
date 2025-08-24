<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function showOrders(Request $request)
    {
      if(isset($request->search)){
        $orders = Order::with('orderDetails')->where('phone', $request->search)->paginate(50);
      }

      else{
        $orders = Order::with('orderDetails')->paginate(50);
      }
     
      return view('backend.order.show-orders', compact('orders'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
      
      $order = Order::find($id);
      $order->status = $request->status;

      $order->save();
      return redirect()->back();
    }

}
