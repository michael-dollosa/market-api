<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        $response = array();

        //loop each order to have a modified json response for frontend
        foreach($orders as $order){
            $id  = $order->id;
            $user = User::find($order->user_id);
            $product = Product::find($order->product_id);
            $price = $order->price;

            $data = array(
                'id' => $id,
                'user' => $user,
                'product' => $product,
                'price' => $price
            );

            array_push($response, $data);
        }

        

        return $response;
    }
}
