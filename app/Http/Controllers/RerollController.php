<?php

namespace App\Http\Controllers;

use App\Models\Reroll;
use App\Http\Requests\StoreRerollRequest;
use App\Http\Requests\UpdateRerollRequest;

class RerollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rerolls = Reroll::paginate(10);
        return view('admin.pages.reroll.index' , compact('rerolls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.reroll.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRerollRequest $request)
    {
        $picture = $request->file('picture');
        $pictureName = time() . '_' . $picture->getClientOriginalName();
        $picturePath = $picture->storeAs('uploads/reroll', $pictureName, 'public');

        $reroll = Reroll::create([
            'title' => $request->title,
            'price' => $request->price,
            'account_level' => $request->account_level,
            'description' => $request->description,
            'platform' => $request->platform,
            'source' => $request->source,
            'is_available' => 1,
            'server' => $request->input('server'),
            'picture' => $picturePath, 
        ]);

        if ($reroll) {
            notify()->success($request->title, 'تم اضافة منتوج جديد');
            return redirect()->route('dashboard.reroll.index');
        } else {
            notify()->error('Failed to add product', 'خطأ');
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reroll $reroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reroll $reroll)
    {
        return view('admin.pages.reroll.edit', compact('reroll'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRerollRequest $request, Reroll $reroll)
    {
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $pictureName = time() . '_' . $picture->getClientOriginalName();
            $picturePath = $picture->storeAs('uploads/reroll', $pictureName, 'public');
        } else {
            $picturePath = $reroll->picture;
        }

        $reroll->update([
            'title' => $request->title,
            'price' => $request->price,
            'account_level' => $request->account_level,
            'description' => $request->description,
            'platform' => $request->platform,
            'source' => $request->source,
            'is_available' => 1,
            'server' => $request->input('server'),
            'picture' => $picturePath,
        ]);

        if ($reroll) {
            notify()->success($request->title, 'تم التعديل المنتوج');
            return redirect()->route('dashboard.reroll.index');
        } else {
            notify()->error('Failed to add product', 'خطأ');
            return back()->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $reroll = Reroll::withTrashed()->where('id', $id)->first();
        if(!$reroll){
            return abort(404);
        }
        $reroll->forceDelete() ;
        notify()->success('تم حذف السجل بشكل دائم بنجاح');
        return redirect()->route('reroll.soft_delete');
    }


    public function delete($id){
        $reroll = $advertisment = Reroll::findOrFail($id);
        if(!$reroll){
            return abort(404);
        }
        $reroll->delete();
        notify()->success(' تم حذف السجل بشكل  بنجاح');
        return back();
    }

    public function restore($id){
        $reroll = Reroll::onlyTrashed()->where('id', $id)->first();

        if (!$reroll) {
            return abort(404);
        }

        $reroll->restore();
        notify()->success( ' تم اعادة منتوج بنجاح');

        return redirect()->route('dashboard.reroll.index');
    }

    public function soft_delete(){
        
        $rerolls = Reroll::onlyTrashed()->get();
        return view('admin.pages.reroll.soft_deleted' , compact('rerolls'));
    }
}
