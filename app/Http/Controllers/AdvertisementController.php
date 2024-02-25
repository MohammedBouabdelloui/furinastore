<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Routing\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

use App\Models\Advertisement;
use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Models\User;
class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::paginate(10);
        return view('admin.pages.advertisement.index', compact('advertisements'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdvertisementRequest $request)
    {
        $picture = $request->file('picture');
        if ($picture) {
            $pictureName = time() . '_' . $picture->getClientOriginalName();
            $picturePath = $picture->storeAs('uploads/advertisements', $pictureName, 'public');
            if (!$picturePath) {

                notify()->error('Failed to upload picture', 'Error');
                return back()->withInput();
            }
        } else {
            notify()->error('No picture uploaded', 'Error');
            return back()->withInput();
        }
        
        
        
        $user = User::where('email', $request->user_email)->first();
        if(!$user){
            notify()->error('لا يوجد مستخدم بهدا لاميل', ' اطلب من المعلن التسجيل');
            return back()->withInput();
        }
        //return dd($request->input('server'));

        $success = Advertisement::create([
            'title' => $request->title,
            'user_id' => $user->id,
            'price' => $request->price,
            'description' => $request->description,
            'account_level' => $request->account_level,
            'platform' => $request->platform,
            'server' => $request->input('server'),
            'player' => $request->player,
            'is_available' => 1,
            'picture' => $picturePath,
        ]);

        if($success){
            notify()->success($request->title, 'تم اضافة منتوج جديد');
            return redirect()->route('dashboard.advertisement.index');
        }else{
            notify()->error('Failed to add product', 'خطأ');
            return back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertisement $advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvertisementRequest $request, Advertisement $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $advertisement = Advertisement::withTrashed()->where('id', $id)->first();
        if(!$advertisement){
            return abort(404);
        }
        $advertisement->forceDelete() ;
        notify()->success('تم حذف السجل بشكل دائم بنجاح');
        return redirect()->route('dashboard.advertisement.soft_delete');
    }

    public function delete($id){
        $advertisement = $advertisment = Advertisement::findOrFail($id);
        if(!$advertisement){
            return abort(404);
        }
        $advertisement->delete();
        notify()->success(' تم حذف السجل بشكل  بنجاح');
        return back();
    }

    public function restore($id){
        $advertisement = Advertisement::onlyTrashed()->where('id', $id)->first();

        if (!$advertisement) {
            return abort(404);
        }

        $advertisement->restore();
        notify()->success( ' تم اعادة منتوج بنجاح');

        return redirect()->route('dashboard.advertisement.index');
    }

    public function soft_delete(){
        
        $advertisements = Advertisement::onlyTrashed()->get();
        return view('admin.pages.advertisement.soft_delete' , compact('advertisements'));
    }
}
