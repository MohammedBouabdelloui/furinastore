<?php

namespace App\Http\Controllers;

use App\Models\Reroll;
use App\Models\RerollSold;
use App\Http\Requests\StoreRerollSoldRequest;
use App\Http\Requests\UpdateRerollSoldRequest;

class RerollSoldController extends Controller
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
    public function store(StoreRerollSoldRequest $request)
    {
        $reroll = RerollSold::create([
            'reroll_id' => $request->reroll_id,
            'description' => $request->description,
        ]);

        if ($reroll) {
            notify()->success($request->description, 'تم عرض للمنتوج ');
            return redirect()->back();
        } else {
            notify()->error('Failed to add product', 'خطأ');
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RerollSold $rerollSold)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($rerollSold)
    {
        $rerollSold = RerollSold::findOrFail($rerollSold);
        return view('admin.pages.reroll.sold.edit', compact('rerollSold'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRerollSoldRequest $request, $rerollSold)
    {

        $rerollSold = RerollSold::findOrFail($rerollSold);

        $updated = $rerollSold->update([
            'description' => $request->description,
        ]);

        if ($updated) {
            notify()->success($request->description, 'تم تعديل العرض ');
            return redirect()->route('dashboard.reroll.index');
        } else {
            notify()->error('Failed to update the description', 'خطأ');
            return back()->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($sold)
    {
        $rerollSold = RerollSold::findOrFail($sold);
        $rerollSold->delete();
        notify()->success('تم حذف المنتوج بنجاح');
        return redirect()->back();

    }

    public function newSold(Reroll $reroll)
    {
        $solds = RerollSold::where('reroll_id', $reroll->id)->get();
        return view('admin.pages.reroll.sold.create', compact('reroll', 'solds'));
    }
}
