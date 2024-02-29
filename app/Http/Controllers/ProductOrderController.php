<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductOrderRequest;
use App\Http\Requests\UpdateProductOrderRequest;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductOrderRequest $request)
    {
        try{


        $validatedData = $request->validated();

        $userID = $validatedData['user_id'];

        $lastOpenOrder = Order::where('user_id', $userID)->latest()
            ->first();

        if(!$lastOpenOrder or $lastOpenOrder->order_status != 'open'){

            $newOrder = new Order();

            $newOrder->user_id = $userID;
            $newOrder->order_status = 'open';

            $newOrder->save();

            // create product order:

            $productOrder = new ProductOrder();

            $productOrder->user_id = $validatedData['user_id'];
            $productOrder->order_id = $newOrder->id;
            $productOrder->ordered_item_id = $validatedData['ordered_item_id'];
            $productOrder->ordered_table_type = $validatedData['ordered_table_type'];

            if($request->ordered_table_type === 'App\Models\Topup'){
                $productOrder->value_chosen = $validatedData['value_chosen'];
                $productOrder->server = $validatedData['server'];
                $productOrder->genshin_account_id = $validatedData['genshinAccountId'];
            }
            $productOrder->quantity_chosen = $validatedData['quantity_chosen'];
            $productOrder->price = $validatedData['price'];

            $productOrder->save();

            notify()->success('رائع لقد تم إضافة طلبك للحقيبة بنجاح ⚡️', 'تم إضافة طلب جديد');

            return redirect()->back()->with('success', 'Order placed successfully!');
    
        }else{

            $productOrder = new ProductOrder();

            $productOrder->user_id = $validatedData['user_id'];
            $productOrder->order_id = $lastOpenOrder->id;
            $productOrder->ordered_item_id = $validatedData['ordered_item_id'];
            $productOrder->ordered_table_type = $validatedData['ordered_table_type'];
            
            if($request->ordered_table_type === 'App\Models\Topup'){
                $productOrder->value_chosen = $validatedData['value_chosen'];
                $productOrder->server = $validatedData['server'];
                $productOrder->genshin_account_id = $validatedData['genshinAccountId'];
            }
            $productOrder->quantity_chosen = $validatedData['quantity_chosen'];
            $productOrder->price = $validatedData['price'];

            $productOrder->save();

            notify()->success('رائع لقد تم إضافة طلبك للحقيبة بنجاح ⚡️', 'تم إضافة طلب جديد');

            return redirect()->back()->with('success', 'Order placed successfully!');

        }
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductOrder $productOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductOrder $productOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductOrderRequest $request, ProductOrder $productOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = ProductOrder::findOrFail($id);
        $order->forceDelete();
        return back();
    }

}
