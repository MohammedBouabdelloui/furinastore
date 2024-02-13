<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>فورينا ستور - @yield('title')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="{{ asset('larger_favicon.png') }}" sizes="64x64">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    
    @vite('resources/css/app.css')
    {{-- @notifyCss --}}
</head>
<body class="bg-slate-50">

    {{-- Navbar: --}}

    @section('navbar')

    <nav class="bg-white">

        <div class="mx-auto max-w-[1280px] flex justify-between items-center py-3 px-4">

            <div class="lg:flex justify-between items-center w-[50%]">
                <img src="{{ asset("img/website_logo.png") }}" alt="logo" class="w-20 h-20 rounded-lg" >

                <input
                    dir="rtl"
                    type="search"
                    class="hidden lg:block md:block w-[70%] px-4 py-3 mt-2 mb-2 bg-gray-100 border-transparent focus:border-transparent focus:ring-0 border border-none rounded-full shadow-sm outline-none focus:outline-none focus:border-none text-black"
                    placeholder="ابحث..."
                >
            </div>

            <div class="flex justify-between items-center">

                <div class="relative inline-block">
                    <select class="mr-4 appearance-none text-gray-900 bg-transparent border-none border-transparent px-4 py-2 pr-8 leading-tight focus:outline-none focus:ring-0 focus:border-transparent cursor-pointer">
                      <option class="text-gray-900 bg-white" value="morocco" data-image="{{ asset('img/flags/Morocco.png') }}">المغرب</option>
                      <option class="text-gray-900 bg-white" value="morocco" data-image="{{ asset('img/flags/Saudi-Arabia.webp') }}">السعودية</option>
                    </select>

                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                      <img class="h-5 w-8" src="{{ asset('img/flags/Saudi-Arabia.webp') }}" alt="Flag">
                    </div>

                </div>

                @if(auth()->check())
                <button class="p-2 mx-1 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0);transform: ;msFilter:;"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>

                </button>

                <button dir="rtl" class="flex justify-end items-center mx-2 px-6 py-2 rounded-full bg-blue-700 font-cairo hover:bg-blue-500 transition ease-in-out duration-500" ">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);">
                        <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                    </svg>
                    <span class="text-white px-1">{{ auth()->user()->first_name }}</span>
                </button>

                @else
                    <button dir="rtl" class="flex justify-end items-center mx-2 px-6 py-2 rounded-full border-2 border-blue-700 font-cairo hover:bg-blue-700 hover:text-white transition ease-in-out duration-500" id="openModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(44, 16, 228)">
                            <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                        </svg>
                        
                        <span class="text-blue-700 hover:text-white px-1">دخول</span>
                    </button>
                @endif



                {{-- RegisterModal --}}

                <div id="registerModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
                    <div class="flex items-center justify-center min-h-screen">
                        <div class="bg-slate-50 w-[90%] max-w-md p-6 rounded-md shadow-md">
                            <button dir="rtl" id="closeModalButton" class="text-gray-600 hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>

                            <div dir="rtl" class="mb-4 text-center">
                                <h2 class="text-2xl pb-2 font-semibold font-cairo">مرحبا بك, قم بانشاء حسابك</h2>
                                <button id="closeModal" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>

                            <form action="{{route('user.store')}}" method="POST"  dir="rtl" class="font-cairo">
                                @csrf
                                <div class="mb-4 flex flex-wrap">

                                    <div class="w-full sm:w-1/2 pl-1">
                                        <label for="firstName" class="block text-sm font-medium text-gray-600">الاسم الشخصي</label>
                                        <input value="{{old('firstName')}}" type="text" id="firstName" name="firstName" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                        @error('firstName')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                          
                                    <div class="w-full sm:w-1/2 pr-1">
                                        <label for="lastName" class="block text-sm font-medium text-gray-600">الاسم العائلي</label>
                                        <input value="{{old('lastName')}} "type="text" id="lastName" name="lastName" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">

                                        @error('lastName')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-600">الايميل الشخصي</label>
                                    <input value="{{old('email')}}" type="email" id="email" name="email" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">

                                    @error('email')
                                            <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium text-gray-600">أدخل كلمة سر</label>
                                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">

                                    @error('password')
                                            <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600">أدخل كلمة سر مجددا</label>
                                    <input type="password" id="password" name="password_confirmation" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                </div>

                                <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">سجل الان</button>
                                
                            </form>

                            <button id="openLoginModal" class="font-cairo text-center text-sm text-gray-500 py-1">تمتلك حساب مسبقا؟ أدخل الان.</button>

                            <br>
                            
                            <button id="openConfirmationModal" class="hidden font-cairo text-center text-sm text-gray-500 py-1">التحقق.</button>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <hr>

        <div class="mx-auto max-w-[1280px] flex justify-between items-center font-cairo px-6 py-3  text-gray-900">

            <div class="flex justify-center items-center md:w-auto w-[90%]">
                <button class="xl:p-3 xl:mx-2 mx-1 p-2 font-normal bg-lime-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path></svg>
                </button>

                <input
                    dir="rtl"
                    type="search"
                    class="md:hidden block w-[90%] px-4 py-3 mt-2 mb-2 bg-gray-100 border-transparent focus:border-transparent focus:ring-0 border border-none rounded-full shadow-sm outline-none focus:outline-none focus:border-none text-black"
                    placeholder="ابحث..."
                >

                <div class="hidden xl:flex flex-col justify-center font-poppins">
                    <span class="text-lg font-bold">+212-778908765</span>
                    <span class="text-xs">furina.store@gmail.com</span>
                </div>
            </div>

            <button id="openMenuModal" class="md:hidden block xl:p-3 xl:mx-2 mx-1 p-2 font-normal bg-blue-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
            </button>

            <div class="hidden md:flex justify-between items-center w-[80%] xl:w-[55%]">
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">عروضنا</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">خدمات قنشن</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">حسابات المعلنين</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">حسابات ريرول</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">شحن قنشن</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">التخفيضات</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85 font-bold">الرئيسية</a>
            </div>

        </div>

    </nav>
      
    @show

    <div class="container mx-auto">
        @yield('content')
    </div>


     {{-- confirmationModal: --}}

     <div id="confirmationModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-slate-50 w-[90%] max-w-md p-6 rounded-md shadow-md">
                <button dir="rtl" id="closeConfirmationModalButton" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div dir="rtl" class="mb-4 text-center">
                    <h2 class="text-2xl pb-2 font-semibold font-cairo">أدخل رمز التحقق الذي تم ارساله في ايميلك الشخصي</h2>
                    <button id="closeConfirmationModal" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <form action="{{ route('user.confirmation') }}" method="POST" dir="rtl" class="font-cairo">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">الايميل الشخصي</label>
                        <input type="email" id="email" value="{{ session('userEmail') }}" name="email" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100" readonly>
                    </div>
                    
                    @if(session('errorConfirmation'))
                        <span class="text-red-500 bg-red-100 p-2 block">{{ session('errorConfirmation') }}</span>
                    @endif

                    <div class="mb-4">
                        <label for="code" class="block text-sm font-medium text-gray-600">أدخل الرمز</label>
                        <input type="text" id="code" name="confirmation_code" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">تحقق الان</button>

                </form>

                <form action="{{ route('user.confirmation.resend') }}" method="POST" dir="rtl" class="font-cairo">

                    @csrf
                    <div class="mb-4">
                        <input type="email" id="email" value="{{ session('userEmail') }}" name="email" class="hidden mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100" readonly>
                    </div>

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-black text-white rounded-sm hover:bg-gray-950 transition ease-in-out duration-500">طلب رمز جديد</button>

                </form>
                
            </div>
        </div>
    </div>

    {{-- LoginModal: --}}

    <div id="loginModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-slate-50 w-[90%] max-w-md p-6 rounded-md shadow-md">
                <button dir="rtl" id="closeLoginModalButton" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div dir="rtl" class="mb-4 text-center">
                    <h2 class="text-2xl pb-2 font-semibold font-cairo">مرحبا بك, قم بتسجيل الدخول</h2>
                    <button id="closeLoginModal" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <form  action="{{route('user.login')}}" method="POST" dir="rtl" class="font-cairo">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">الايميل الشخصي</label>
                        <input type="email" value="{{ session('emailLogin') ?? old('emailLogin') }}" id="email" name="emailLogin" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>
                    @error('emailLogin')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                    @if(session('errorLogin'))
                        <span class="text-red-500 bg-red-100 p-2 block">{{ session('errorLogin') }}</span>
                    @endif

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-600">أدخل كلمة سر</label>
                        <input type="password" id="password" name="passwordLogin" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>
                    @error('passwordLogin')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">أدخل الان</button>

                    <div class="mt-7 flex flex-col gap-2">


    
                        <a
                            href="/auth/google" class="inline-flex h-10 w-full items-center justify-center gap-2 rounded border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60"><img
                                src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google"
                                class="h-[18px] w-[18px] ">Continue with
                            Google
                        </a>
    
    
                        <a
                            class="inline-flex h-10 w-full items-center justify-center gap-2 rounded border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(25, 61, 181, 1);transform: ;msFilter:;"><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg>Continue with
                            Facebook
                        </a>
                    </div>
                    
                </form>
                
                <button id="backToRegisterModal" class="font-cairo text-center text-sm text-gray-500 py-1">ليس لديك حساب؟ سجل الان.</button>

            </div>
        </div>
    </div>

    {{-- MenuModal: --}}

    <div id="menuModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-slate-50 w-[90%] max-w-md p-6 rounded-md shadow-md">
                <button dir="rtl" id="closeMenuModalButton" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div dir="rtl" class="mb-4 text-center">
                    <button id="closeMenuModal" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <form dir="rtl" class="font-cairo flex flex-col justify-center items-center">

                    <a href="" class="text-blue-400 py-2 opacity-95 text-lg">
                        الصفحة الرئيسية
                    </a>
                    <a href="" class="text-blue-400 py-2 opacity-95 text-lg">
                        التخفيضات المتجر
                    </a>
                    <a href="" class="text-blue-400 py-2 opacity-95 text-lg">
                        عمليات الشحن
                    </a>
                    <a href="" class="text-blue-400 py-2 opacity-95 text-lg">
                        عروض الريرول
                    </a>
                    <a href="" class="text-blue-400 py-2 opacity-95 text-lg">
                        حسابات المعلنين
                    </a>
                    <a href="" class="text-blue-400 py-2 opacity-95 text-lg">
                        خدمات قنشن
                    </a>
                    <a href="" class="text-blue-400 py-2 opacity-95 text-lg">
                        عروضنا
                    </a>

                </form>

                <div class="font-cairo flex justify-between items-center">
                    <button id="openLoginModalAgain" class="text-center text-sm text-gray-500 p-1">تسجيل الدخول</button>
                    <button id="openRegisterModalAgain" class="text-center text-sm text-gray-500 p-1">أنشئ حسابك</button>
                </div>

            </div>
        </div>
    </div>


     {{-- Footer: --}}

    <footer class="bg-gradient-to-r from-blue-300 to-blue-700 mt-4">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div>
            <img src="{{ asset("img/website_logo.png") }}" class="mr-5 w-20 h-auto" alt="logo" />
            <p class="max-w-xs mt-4 text-sm text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, accusantium.
            </p>
            <div class="flex mt-8 space-x-6 text-gray-100">
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                <span class="sr-only"> Facebook </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                <span class="sr-only"> Instagram </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                <span class="sr-only"> Twitter </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                <span class="sr-only"> GitHub </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clipRule="evenodd" />
                </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                <span class="sr-only"> Dribbble </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clipRule="evenodd" />
                </svg>
                </a>
            </div>
            </div>
            <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
            <div>
                <p class="font-medium text-white">
                Company
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-100">
                <a class="hover:opacity-75" href> About </a>
                <a class="hover:opacity-75" href> Meet the Team </a>
                <a class="hover:opacity-75" href> History </a>
                <a class="hover:opacity-75" href> Careers </a>
                </nav>
            </div>
            <div>
                <p class="font-medium text-white">
                Services
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-100">
                <a class="hover:opacity-75" href> 1on1 Coaching </a>
                <a class="hover:opacity-75" href> Company Review </a>
                <a class="hover:opacity-75" href> Accounts Review </a>
                <a class="hover:opacity-75" href> HR Consulting </a>
                <a class="hover:opacity-75" href> SEO Optimisation </a>
                </nav>
            </div>
            <div>
                <p class="font-medium text-white">
                Helpful Links
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-100">
                <a class="hover:opacity-75" href> Contact </a>
                <a class="hover:opacity-75" href> FAQs </a>
                <a class="hover:opacity-75" href> Live Chat </a>
                </nav>
            </div>
            <div>
                <p class="font-medium text-white">
                Legal
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-100">
                <a class="hover:opacity-75" href> Privacy Policy </a>
                <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
                <a class="hover:opacity-75" href> Returns Policy </a>
                <a class="hover:opacity-75" href> Accessibility </a>
                </nav>
            </div>
            </div>
        </div>
        <p class="mt-8 text-xs text-gray-100">
            © 2022 Comany Name
        </p>
        </div>
    </footer>

    <script>
        // registerModal
        const registerModal = document.getElementById('registerModal');
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');
        const closeModalSecondButton = document.getElementById('closeModalButton');
        
        // loginModal
        const loginModal = document.getElementById('loginModal');
        const openLoginModalButton = document.getElementById('openLoginModal');
        const closeLoginModalButton = document.getElementById('closeLoginModal');
        const closeLoginModalSecondButton = document.getElementById('closeLoginModalButton');
        const backToRegisterModal = document.getElementById('backToRegisterModal');
        
        // menuModal
        const menuModal = document.getElementById('menuModal');
        const openMenuModalButton = document.getElementById('openMenuModal');
        const closeMenuModalButton = document.getElementById('closeMenuModal');
        const closeMenuModalSecondButton = document.getElementById('closeMenuModalButton');
        
        // Open modals from menuModal
        const openLoginModalAgain = document.getElementById('openLoginModalAgain');
        const openRegisterModalAgain = document.getElementById('openRegisterModalAgain');
        
        // confirmationModal
        const confirmationModal = document.getElementById('confirmationModal');
        const openConfirmationModalButton = document.getElementById('openConfirmationModal');
        const closeConfirmationModalButton = document.getElementById('closeConfirmationModal');
        const closeConfirmationModalSecondButton = document.getElementById('closeConfirmationModalButton');
        
        const openModal = () => {
            menuModal.classList.add('hidden');
            loginModal.classList.add('hidden');
            confirmationModal.classList.add('hidden');
            registerModal.classList.remove('hidden');
        };

        const closeModal = () => {
            registerModal.classList.add('hidden');
        };

        const openLoginModal = () => {
            menuModal.classList.add('hidden');
            registerModal.classList.add('hidden');
            confirmationModal.classList.add('hidden');
            loginModal.classList.remove('hidden');
        };
        
        const closeLoginModal = () => {
            loginModal.classList.add('hidden');
        };

        const openMenuModal = () => {
            registerModal.classList.add('hidden');
            loginModal.classList.add('hidden');
            confirmationModal.classList.add('hidden');
            menuModal.classList.remove('hidden');
        };
        
        const closeMenuModal = () => {
            menuModal.classList.add('hidden');
        };

        const openConfirmationModal = () => {
            registerModal.classList.add('hidden');
            loginModal.classList.add('hidden');
            menuModal.classList.add('hidden');
            confirmationModal.classList.remove('hidden');
        };
        
        const closeConfirmationModal = () => {
            confirmationModal.classList.add('hidden');
        };

        openModalButton.addEventListener('click', openModal);
        closeModalButton.addEventListener('click', closeModal);
        closeModalSecondButton.addEventListener('click', closeModal);

        openLoginModalButton.addEventListener('click', openLoginModal);
        closeLoginModalButton.addEventListener('click', closeLoginModal);
        closeLoginModalSecondButton.addEventListener('click', closeLoginModal);
        backToRegisterModal.addEventListener('click', openModal);

        openMenuModalButton.addEventListener('click', openMenuModal);
        closeMenuModalButton.addEventListener('click', closeMenuModal);
        closeMenuModalSecondButton.addEventListener('click', closeMenuModal);
        
        openLoginModalAgain.addEventListener('click', openLoginModal);
        openRegisterModalAgain.addEventListener('click', openModal);

        openConfirmationModalButton.addEventListener('click', openConfirmationModal);
        closeConfirmationModalButton.addEventListener('click', closeConfirmationModal);
        closeConfirmationModalSecondButton.addEventListener('click', closeConfirmationModal);

        registerModal.addEventListener('click', (event) => {
            if (event.target === registerModal) {
                closeModal();
            }
        });

        loginModal.addEventListener('click', (event) => {
            if (event.target === loginModal) {
                closeLoginModal();
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeModal();
                closeLoginModal();
                closeMenuModal();
            }
        });
        
        @if($errors->has('email') || $errors->has('password') || $errors->has('lastName') || $errors->has('firstName'))
            openModal();
        @endif  
        
        @if(session('success') || session('errorLoginConfirmation') )
            openConfirmationModal()
        @endif
        
        @if(session('errorConfirmation'))
            openConfirmationModal()
        @endif
        
        @if(session('confirmationCodeSentError'))
            openConfirmationModal()
        @endif
        
        @if(session('confirmationCodeSent'))
            openConfirmationModal()
        @endif

        @if(session('errorLogin') || $errors->has('passwordLogin') || $errors->has('emailLogin'))
            openLoginModal();
        @endif
        
    </script>
     <x-notify::notify />
    @notifyJs
    </body>
</html>