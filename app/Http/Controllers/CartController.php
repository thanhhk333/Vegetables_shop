<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart_detail;
use App\Models\Cart;
use illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $total = 0;
        $productsInCart = [];
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }
        $viewData = [];
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        return view('cart.index')->with("viewData", $viewData);
    }
    public function add(Request $request, $id)
    {
        $products = $request->session()->get("products");
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);
        return redirect()->route('cart.index');
    }
    public function delete(Request $request)
    {
        $request->session()->forget('products');
        return back();
    }
    public function purchase(Request $request)
    {
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $userId = Auth::user()->getId();
            $cart = new Cart();
            $cart->setUser_id($userId);
            $cart->setTotal(0);
            $cart->save();

            $total = 0;
            $productsInCart = Product::findMany(array_keys($productsInSession));
            foreach ($productsInCart as $product) {
                $quantity = $productsInSession[$product->getId()];
                $cartDetail = new Cart_detail();
                $cartDetail->setQuantity($quantity);
                $cartDetail->setPrice($product->getPrice());
                $cartDetail->setProductId($product->getId());
                $cartDetail->setCartId($cart->getId());
                $cartDetail->save();
                $total += $product->getPrice() * $quantity;
            }
            $cart->setTotal($total);
            $cart->save();

            $viewData = [];

            $viewData['cart'] = $cart;

            // Clear cart
            $request->session()->forget("products");

            return view('cart.purchase')->with("viewData", $viewData);
        } else {
            return redirect()->route("cart.index");
        }
    }
}
