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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    

    @vite('resources/css/app.css')

</head>
<body>

    @section('navbar')

    <nav class="bg-gray-700">
        <div class=" flex justify-around items-center font-poppins bg-gray-800">
            <p class="p-2 text-white">furina.store@gmail.com</p>
            <p class="p-2 text-white">+212778908765</p>

            <div class="flex justify-around items-center">

                <div class="relative inline-block">
                    <select class="mr-4 appearance-none text-white bg-transparent border-none border-transparent px-4 py-2 pr-8 leading-tight focus:outline-none focus:ring-0 focus:border-transparent cursor-pointer">
                      <option class="text-white bg-gray-700" value="morocco" data-image="{{ asset('img/flags/Morocco.png') }}">المغرب</option>
                      <option class="text-white bg-gray-700" value="morocco" data-image="{{ asset('img/flags/Saudi-Arabia.webp') }}">السعودية</option>
                    </select>

                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                      <img class="h-5 w-8" src="{{ asset('img/flags/Saudi-Arabia.webp') }}" alt="Flag">
                    </div>

                </div>
                  
                <a href="#" class="px-2" id="openModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);">
                        <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                    </svg>
                </a>

                <!-- model for create account -->

                <div id="registerModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
                    <div class="flex items-center justify-center min-h-screen">
                        <div class="bg-slate-50 w-full max-w-md p-6 rounded-md shadow-md">
                            <button dir="rtl" id="closeModalButton" class="text-gray-600 hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>

                            <div dir="rtl" class="mb-4 text-center">
                                <h2 class="text-2xl pb-2 font-semibold">مرحبا بك, قم بانشاء حسابك</h2>
                                <button id="closeModal" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>

                            <form method="POST" action="{{ route('user.store') }}" dir="rtl" class="font-cairo">

                            @csrf

                                <div class="mb-4 flex flex-wrap">

                                    <div class="w-full sm:w-1/2 pl-1">
                                        <label for="firstName" class="block text-sm font-medium text-gray-600">الاسم الشخصي</label>
                                        <input type="text" id="firstName" name="firstName" value="{{ old('firstName') }}" class=" mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                        @error('firstName')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="w-full sm:w-1/2 pr-1">
                                        <label for="lastName" class="block text-sm font-medium text-gray-600">الاسم العائلي</label>
                                        <input type="text" id="lastName" name="lastName" value="{{ old('lastName') }}" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                        @error('lastName')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-600">الايميل الشخصي</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
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

                                <button type="submit" class="w-full mt-2 p-2 bg-gray-600 text-white rounded-sm hover:bg-gray-500">سجل الان</button>

                            </form>
                        </div>
                    </div>
                </div>

                <a href="" class="px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>

                </a>

            </div>

        </div>
        <div class=" mx-auto text-center font-poppins">
            
            <div class="relative flex justify-evenly items-center font-cairo p-4 text-white">

                <div class="flex justify-center items-center rounded-sm bg-gray-600 px-4 py-2 cursor-pointer">
                    
                    <a href="" class="flex flex-col text-sm items-end px-2">
                        
                        <span dir="rtl">السلة:</span>
                        <span dir="rtl">عدد المنتوجات:</span>
                        <span dir="rtl">القيمة:</span>
                    </a>

                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgb(255, 187, 0);transform: ;msFilter:;"><path d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="16.5" cy="19.5" r="1.5"></circle></svg>
                    </a>
                
                </div>

                <input
                  type="text"
                  class="w-1/3 px-4 py-2 mt-2 mb-2 border-transparent focus:border-transparent focus:ring-0 border border-none rounded-sm shadow-sm outline-none focus:outline-none focus:border-none"
                  placeholder="Search..."
                >

                <img src="{{ asset("img/website_logo.png") }}" alt="logo" class="w-16 h-16 rounded-lg" >

            </div>
              
        </div>
        <div class="flex justify-evenly items-center font-cairo p-6 text-white">
            <a href="">عروضنا</a>
            <a href="">حسابات المعلنين</a>
            <a href="">خدمات قنشن</a>
            <a href="">شحن قنشن</a>
            <a href="">التخفيضات</a>
            <a href="">الرئيسية</a>
        </div>
    </nav>
      
    @show

    <div class="container">
        @yield('content')
    </div>

    <script>
        const registerModal = document.getElementById('registerModal');
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');
        const closeModalSecondButton = document.getElementById('closeModalButton');

        const openModal = () => {
            registerModal.classList.remove('hidden');
        };

        const closeModal = () => {
            registerModal.classList.add('hidden');
        };

        openModalButton.addEventListener('click', openModal);
        closeModalButton.addEventListener('click', closeModal);
        closeModalSecondButton.addEventListener('click', closeModal);

        registerModal.addEventListener('click', (event) => {
            if (event.target === registerModal) {
                closeModal();
            }
   
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeModal();
            }

        });
       
    </script>
        @isset($errors)
           
            @push('scripts')
            openModal();
            @endpush
        @endisset
     

            
    </body>
</html>