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
    

    @vite('resources/css/app.css')

</head>
<body class="bg-slate-50">

    {{-- Navbar: --}}

    @section('navbar')

    <nav class="bg-white">

        <div class="flex justify-around items-center py-3">

            <div class="flex justify-around items-center w-[50%]">
                <img src="{{ asset("img/website_logo.png") }}" alt="logo" class="w-20 h-20 rounded-lg" >

                <input
                    dir="rtl"
                    type="search"
                    class="hidden lg:block md:block w-[70%] px-4 py-3 mt-2 mb-2 bg-gray-100 border-transparent focus:border-transparent focus:ring-0 border border-none rounded-full shadow-sm outline-none focus:outline-none focus:border-none text-black"
                    placeholder="ابحث..."
                >
            </div>

            <div class="flex justify-around items-center">

                <div class="relative inline-block">
                    <select class="mr-4 appearance-none text-gray-900 bg-transparent border-none border-transparent px-4 py-2 pr-8 leading-tight focus:outline-none focus:ring-0 focus:border-transparent cursor-pointer">
                      <option class="text-gray-900 bg-white" value="morocco" data-image="{{ asset('img/flags/Morocco.png') }}">المغرب</option>
                      <option class="text-gray-900 bg-white" value="morocco" data-image="{{ asset('img/flags/Saudi-Arabia.webp') }}">السعودية</option>
                    </select>

                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                      <img class="h-5 w-8" src="{{ asset('img/flags/Saudi-Arabia.webp') }}" alt="Flag">
                    </div>

                </div>
                
                <button class="p-2 mx-1 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0);transform: ;msFilter:;"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>

                </button>

                <button dir="rtl" class="flex justify-end items-center mx-2 px-6 py-2 rounded-full bg-blue-700 font-cairo hover:bg-blue-500 transition ease-in-out duration-500" id="openModal">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);">
                        <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                    </svg>
                    <span class="text-white px-1">حسابي</span>
                </button>

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
                                    <label for="password" class="block text-sm font-medium text-gray-600">أدخل كلمة سر مجددا</label>
                                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                </div>

                                <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">سجل الان</button>
                                
                            </form>

                            <button id="openLoginModal" class="font-cairo text-center text-sm text-gray-500 py-1">تمتلك حساب مسبقا؟ أدخل الان.</button>

                            <br>
                            
                            <button id="openConfirmationModal" class="font-cairo text-center text-sm text-gray-500 py-1">التحقق.</button>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <hr>

        <div class="max-w-[1280px] mx-auto flex justify-between items-center font-cairo px-6 py-3  text-gray-900">

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

            <div class="hidden md:flex justify-between items-center w-[80%] xl:w-[50%]">
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">عروضنا</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">حسابات المعلنين</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">خدمات قنشن</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">شحن قنشن</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85">التخفيضات</a>
                <a href="" class="hover:text-blue-500 py-1 lg:py-2 rounded-sm transition ease-in-out duration-500 opacity-85 font-bold">الرئيسية</a>
            </div>

        </div>

    </nav>
      
    @show

    <div class="container">
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

                <form dir="rtl" class="font-cairo">
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">الايميل الشخصي</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="code" class="block text-sm font-medium text-gray-600">أدخل الرمز</label>
                        <input type="number" id="code" name="code" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">تحقق الان</button>

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

                <form dir="rtl" class="font-cairo">

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">الايميل الشخصي</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-600">أدخل كلمة سر</label>
                        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">أدخل الان</button>

                    
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
                        خدمات قنشن
                    </a>
                    <a href="" class="text-blue-400 py-2 opacity-95 text-lg">
                        حسابات المعلنين
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
        @isset($errors)
            openModal();
        @endisset   
    </script>
    

    </body>
</html>