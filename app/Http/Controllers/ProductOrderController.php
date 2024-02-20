<?php

namespace App\Http\Controllers;

use App\Models\ProductOrder;
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
        $validatedData = $request->validated();

        $productOrder = new ProductOrder();

        $productOrder->user_id = $validatedData['user_id'];
        $productOrder->ordered_item_id = $validatedData['ordered_item_id'];
        $productOrder->ordered_table_type = $validatedData['ordered_table_type'];
        $productOrder->value_chosen = $validatedData['value_chosen'];
        $productOrder->server = $validatedData['server'];
        $productOrder->genshin_account_id = $validatedData['genshinAccountId'];
        $productOrder->quantity_chosen = $validatedData['quantity_chosen'];
        $productOrder->price = $validatedData['price'];

        $productOrder->save();

        notify()->success('رائع لقد تم إضافة طلبك للحقيبة بنجاح ⚡️', 'تم إضافة طلب جديد');

        return redirect()->back()->with('success', 'Order placed successfully!');
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
