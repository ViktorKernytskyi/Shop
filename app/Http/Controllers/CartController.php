<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController extends Controller
{
    public function cart()
    {
//        dd(session()->all());
        return view('cart', [
            'cart' => session()->get('cart', [])
        ]);
    }

    public function addToCart(Request $request)
    {
//        session()->flush();
        $product_id = $request->get('product_id');
        $cart = session()->get('cart', []);

        if (isset($cart[$product_id]))
        {
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

        $this->calcCart($cart);

        return response()->json([
            'cart' => session()->get('cart', []),
            'total' => session()->get('cartTotal', [])
        ], JsonResponse::HTTP_OK);


    }

    /**
     * @param array $cart
     */
    protected function calcCart(array $cart): void
    {
        $total = [
            'sum' => 0,
            'count' => 0
        ];

        foreach ($cart as $product) {
            $total['sum'] += $product['qty'] * $product['price'];
            $total['count'] += $product->qty;
        }

        session()->put('cartTotal', $total);
    }

    public function cartDelete(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->deleteItem($request->get('product_id'));
        $this->calcCart(session()->get('cart'));

        return response()->json([
            'message' => 'Deleted',
            'cart' => session()->get('cart', []),
            'total' => session()->get('cartTotal', [])
        ], JsonResponse::HTTP_OK);
    }

    protected function deleteItem(int $id)
    {
        session()->forget('cart.' . $id);
    }

}
