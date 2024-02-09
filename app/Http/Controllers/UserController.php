<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\ConfirmationMail;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Str;

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

        $confirmationCode = Str::random(6);

        User::create([
            'country_id' => $country_id,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'confirmation_code' => $confirmationCode,
        ]);

        $userName = $request->firstName;
        $userEmail = $request->email;

        Mail::to($userEmail)->send(new ConfirmationMail($userName, $userEmail, $confirmationCode));
        
        return redirect()->back()->with(['userEmail' => $userEmail, 'success' => 'Utilisateur ajouté avec succès!']);

    }

    public function confirmation(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'confirmation_code' => 'required|string'
        ]);

        $userEmail = $request->email;

        $user = User::where('email', $userEmail)
                    ->where('confirmation_code', $request->confirmation_code)
                    ->first();

        if ($user) {
            $user->update(['account_status' => 'active']);
            
            Auth::login($user);

            return redirect()->back()->with("confirmationSuccess", "تم تسجيل الدخول بنجاح! 🎉");

        } else {
            return redirect()->back()->with(['userEmail' => $userEmail, 'errorConfirmation' => 'فشل في التحقق، الرمز الذي أدخلته غير صحيح.']);

        }
    }


    public function resendConfirmationCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $userEmail = $request->email;
        $confirmationCode = Str::random(6);

        $user = User::where('email', $userEmail)->first();

        if ($user) {
            $user->update(['confirmation_code' => $confirmationCode]);

            $userName = $user->first_name;
            
            try {
                Mail::to($userEmail)->send(new ConfirmationMail($userName, $userEmail, $confirmationCode));
                
                return redirect()->back()->with(['userEmail' => $userEmail,"confirmationCodeSent" => "تم ارسال رمز تحقق جديد الى ايميلك الشخصي."]);

            } catch (\Exception $e) {
                return redirect()->back()->with(['userEmail' => $userEmail,"confirmationCodeSentError" => "حدثت مشكلة أثناء إرسال البريد الإلكتروني. الرجاء المحاولة مرة أخرى."]);

            }
        }

        return redirect()->back()->with(['userEmail' => $userEmail,"confirmationCodeSentError" => "الايميل غير موجود أو الرمز غير صحيح."]);
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
}
