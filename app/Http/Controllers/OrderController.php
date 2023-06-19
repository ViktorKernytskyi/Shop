<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class  OrderController extends Controller
{
    public function createInvoice(Request $request)
    {
        // валидация пройдена, сохраняем заказ
        $products = session()->get('cart');
        $total = session()->get('cartTotal');

        try {
            DB::beginTransaction();

            $invoice = Invoice::query()->create([

                'user_id' => auth()->id(),
                'total' => $total['sum'],
                'status' => Invoice::PENDING,
                'comment' => 'null',
            ]);

            if (is_array($products) || is_object($products)) {
                foreach ($products as $product) {
                    $invoice->orders()->create([
                        'product_id' => $product->id,
                        'price' => $product->price,
                        'quantity' => $product->qty,

                    ]);
                }
            }

            DB::commit();

            // уничтожаем корзину
            session()->forget('cart');
            session()->forget('cartTotal');

            return response()->json(['status' => 'Success'], JsonResponse::HTTP_OK);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'status' => 'Error',
                'message' => $exception->getMessage(),
            ], JsonResponse::HTTP_CONFLICT);
        }





    }
}
