<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart() {
        $orderId = session('orderId');
        $order = Order::find($orderId);

//        if (!is_null($orderId)) {
//
//        }

        return view('cart')->with([
            'categories' => (new MainController())->categories(),
            'order' => $order,
        ]);
    }

    public function cartConfirm() {
        if (Auth::check()) {
            $orderId = session('orderId');

            if (is_null($orderId)) {
                return redirect(route('index'));
            }

            $user = auth()->user();
            $order = Order::find($orderId);

            return view('cart_confirm')->with([
                'categories' => (new MainController())->categories(),
                'order' => $order,
                'address' => $user->address,
                'phone' => $user->phone_number
            ]);
        }

        return redirect(route('user.login'));
    }

    public function cartConfirmAdd(CartRequest $request) {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return redirect(route('index'));
        }

        $order = Order::find($orderId);
        $order->saveOrder($request->get('address'), $request->get('phone'));

        return redirect(route('index'));
    }

    public function cartAdd($productId) {
        $orderId = session('orderId');
        $order = Order::find($orderId);

        if (is_null($order)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->quantity++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }

        return redirect()->route('cart');
    }

    public function cartRemove($productId) {
        $orderId = session('orderId');
        $order = Order::find($orderId);

        if (is_null($order)) {
            return redirect()->route('cart');
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->quantity < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->quantity--;
                $pivotRow->update();
            }
        }

        return redirect()->route('cart');
    }
}
