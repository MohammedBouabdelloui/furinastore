<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 


class UserController extends Controller
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
    public function store(StoreUserRequest $request)
    {
        $ip = $request->ip();
        $position = Location::get('41.87.159.255');

        $countryCode = $position->countryCode; 

        $country = Country::where('iso_code', $countryCode)->first();

        if ($country) {
            $country_id = $country->id;
        } else {
            $country_id = 1;
        }

        User::create([
            'country_id' => $country_id,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        
        return redirect()->back()->with('success', 'Utilisateur ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();

        if($user and Hash::check($request->password, $user->password)){

            if($user->account_status === 'active'){

                if(auth()->attempt($credentials) ){
                    $request->session()->regenerate();
                    $user = auth::user();
                    return back()->with("loginSuccess", "تم تسجيل الدخول بنجاح! 🎉");
                    
                }
    
            }else{
                if ($user->account_status === 'unconfirmed') {
                    return back()->with('errorLoginConfirmation', 'حسابك لم يتم تأكيده بعد. الرجاء تحقق من بريدك الإلكتروني لتأكيد الحساب.');
                }
        
                if ($user->account_status === 'banned' or $user->account_status === 'inactive' ) {
                    return back()->with('errorLogin', 'حسابك غير نشط. الرجاء التواصل مع الدعم الفني.');
                }
            }

        }else{
            return back()->with('errorLogin', 'فشل تسجيل الدخول. الرجاء التحقق من البريد الإلكتروني وكلمة المرور.');

        }
    
    }
    

}   
