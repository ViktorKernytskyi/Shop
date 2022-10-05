<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart', [
            'cart' => session()->get('cart', [])
        ]);
    }

    public function addToCart(Request $request)
    {
//        session()->flush();
        $product_id = $request->get('product_id');
        $cart = session()->get('cart', []);

        if (isset($cart[$product_id])) {
            $request->operation === 'dec'
                ? $cart[$product_id]->qty--
                : $cart[$product_id]->qty++;
        } else {
            $product = Product::findOrFail($product_id);
            $product->qty = 1;
            $cart[$product_id] = $product;
        }

        $cart[$product_id]->qty > 0
            ? session()->put('cart', $cart)
            : $this->deleteItem($product_id);
        return response()->json(session()->get('cart', []), JsonResponse::HTTP_OK);

    }

    public function cartDelete(Request $request)
    {
        $this->deleteItem($request->get('product_id'));
        return response()->json(['message' => 'Deleted'], JsonResponse::HTTP_OK);
    }

    protected function deleteItem(int $id)
    {
        session()->forget('cart.' . $id);
    }

}
