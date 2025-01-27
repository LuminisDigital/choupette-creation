<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
{
    $cartItems = session()->get('cart', []);
    $items = collect();
    $subtotal = 0;

    foreach($cartItems as $id => $details) {
        $product = Product::find($id);
        if($product) {
            $items->push((object)[
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image_path' => $product->image_path,
                'quantity' => $details['quantity'],
                'stock' => $product->stock
            ]);
            $subtotal += $product->price * $details['quantity'];
        }
    }

    $total = $subtotal; // On définit le total

    // On vérifie que $items n'est pas vide
    if ($items->isEmpty()) {
        return view('shop.cart')->with('cartEmpty', true);
    }

    return view('shop.cart', compact('items', 'subtotal', 'total'));
}

    public function add(Request $request)
    {
        $product = Product::find($request->product_id);

        if(!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Produit non trouvé'
            ]);
        }

        $cart = session()->get('cart', []);

        if(isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity']++;
        } else {
            $cart[$request->product_id] = [
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        $cartCount = array_sum(array_column($cart, 'quantity'));

        return response()->json([
            'success' => true,
            'cartCount' => $cartCount,
            'message' => 'Produit ajouté au panier'
        ]);
    }

    public function update(Request $request)
    {
        if($request->product_id && $request->quantity) {
            $cart = session()->get('cart', []);
            $cart[$request->product_id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return response()->json(['success' => true]);
    }

    public function remove(Request $request)
    {
        if($request->product_id) {
            $cart = session()->get('cart', []);
            unset($cart[$request->product_id]);
            session()->put('cart', $cart);
        }

        return response()->json(['success' => true]);
    }

    public function clear()
    {
        session()->forget('cart');
        return response()->json(['success' => true]);
    }
}
