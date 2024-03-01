<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(10);
        return view('admin.pages.service.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $picture = $request->file('picture');
        $pictureName = time() . '_' . $picture->getClientOriginalName();
        $picturePath = $picture->storeAs('uploads/service', $pictureName, 'public');

        $service = Service::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'is_available' => 1,
            'picture' => $picturePath, 
        ]);

        if ($service) {
            notify()->success($request->title, 'تم اضافة منتوج جديد');
            return redirect()->route('dashboard.service.index');
        } else {
            notify()->error('Failed to add product', 'خطأ');
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.pages.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $pictureName = time() . '_' . $picture->getClientOriginalName();
            $picturePath = $picture->storeAs('uploads/service', $pictureName, 'public');
        } else {
            $picturePath = $service->picture;
        }

        $service->update([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'picture' => $picturePath,
        ]);

        if ($service) {
            notify()->success($request->title, 'تم التعديل المنتوج');
            return redirect()->route('dashboard.service.index');
        } else {
            notify()->error('Failed to add product', 'خطأ');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
