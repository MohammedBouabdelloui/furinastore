<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Topup;
use Illuminate\Routing\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreTopupRequest;
use App\Http\Requests\UpdateTopupRequest;

class TopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.topup.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.topup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopupRequest $request)
    {
        
        $picture = $request->file('picture');
        $pictureName = time() . '_' . $picture->getClientOriginalName();
        $picturePath = $picture->storeAs('uploads/topup', $pictureName, 'public');

        $topup = Topup::create([
            'title' => $request->title,
            'price' => $request->price,
            'topup_value' => $request->topup_value,
            'description' => $request->description,
            'is_available' => 1,
            'picture' => $picturePath, 
        ]);

        if ($topup) {
            notify()->success($request->title, 'تم اضافة منتوج جديد');
            return redirect()->route('dashboard.topup.index');
        } else {
            notify()->error('Failed to add product', 'خطأ');
            return back()->withInput();
        }

        
    }



    /**
     * Display the specified resource.
     */
    public function show(Topup $topup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topup $topup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopupRequest $request, Topup $topup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topup $topup)
    {
        //
    }
}
