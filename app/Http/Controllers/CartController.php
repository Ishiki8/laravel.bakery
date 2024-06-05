<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class CartController extends Controller
{
    public array $order = [];
    public function cart() {
        $orderId = session('orderId');
        $order = Order::find($orderId);
        $categories = Category::get();

        return view('cart')->with([
            'categories' => $categories,
            'order' => $order,
        ]);
    }

//    public function getLsCart() {
//        $this->order = json_decode($_POST['order']);
//
//        $heap = json_decode($_REQUEST['order']);
//        setcookie('cart', serialize($heap));
//
//
////        print_r($this->order);
//        return $this->order;
//    }

    public function cartConfirm() {

        if (Auth::check()) {
//            (isset($_COOKIE['cart']) ? $heap = unserialize($_COOKIE['cart']) : $heap = array());

//            foreach (unserialize($_COOKIE['cart']) as $item => $key) {
//                echo($item);
//            }
//            $array = $_COOKIE['cart'];
//            print_r(unserialize(serialize(json_decode($_COOKIE['cart']))));
            isset($_COOKIE['cart']) ? $cart = json_decode($_COOKIE['cart'], true) : $cart = [];

            if (empty($cart)) {
                return redirect(route('index'));
            }

//            if (count($this->order) === 0) {
//                return redirect(route('index'));
//            }

//            $orderId = session('orderId');
//
//            if (is_null($orderId)) {
//                return redirect(route('index'));
//            }

            $user = auth()->user();
//            $order = Order::find($orderId);
            $categories = Category::get();

            return view('cart_confirm')->with([
                'categories' => $categories,
//                'order' => $order,
                'address' => $user->address,
                'phone' => $user->phone_number
            ]);

        }

        return redirect(route('user.login'));
    }

    public function cartConfirmAdd(CartRequest $request) {
//        $orderId = session('orderId');
//
//        if (is_null($orderId)) {
//            return redirect(route('index'));
//        }

        isset($_COOKIE['cart']) ? $cart = json_decode($_COOKIE['cart'], true) : $cart = [];

        if (empty($cart)) {
            return redirect(route('index'));
        }

//        $order = Order::find($orderId);
        $order = Order::create();

        foreach ($cart as $product) {
            $order->products()->attach($product['product_id']);
            $pivotRow = $order->products()->where('product_id', $product['product_id'])->first()->pivot;
            $pivotRow->quantity = $product['count'];
            $pivotRow->update();
        }

        setcookie('cart','',time()-3600,'/');
        $order->saveOrder($request->get('address'), $request->get('phone'));

        return redirect(route('user.userOrders'));
    }

    public function cartAdd($productId) {
        if (!Auth::check()) {
            return redirect(route('user.registration'));
        }

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
