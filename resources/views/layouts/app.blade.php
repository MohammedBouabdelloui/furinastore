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
<body class="bg-slate-50">

    @section('navbar')

    <nav class="bg-white">

        <div class="flex justify-around items-center py-3">

            <div class="flex justify-around items-center w-[50%]">
                <img src="{{ asset("img/website_logo.png") }}" alt="logo" class="w-16 h-16 rounded-lg" >

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
                                <h2 class="text-2xl pb-2 font-semibold font-cairo">مرحبا بك, قم بانشاء حسابك</h2>
                                <button id="closeModal" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>

                            <form dir="rtl" class="font-cairo">

                                <div class="mb-4 flex flex-wrap">

                                    <div class="w-full sm:w-1/2 pl-1">
                                        <label for="firstName" class="block text-sm font-medium text-gray-600">الاسم الشخصي</label>
                                        <input type="text" id="firstName" name="firstName" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                    </div>
                                    
                                    <div class="w-full sm:w-1/2 pr-1">
                                        <label for="lastName" class="block text-sm font-medium text-gray-600">الاسم العائلي</label>
                                        <input type="text" id="lastName" name="lastName" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-600">الايميل الشخصي</label>
                                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium text-gray-600">أدخل كلمة سر</label>
                                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium text-gray-600">أدخل كلمة سر مجددا</label>
                                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                                </div>

                                <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">سجل الان</button>
                                
                            </form>

                            <button id="openLoginModal" class="text-center text-sm text-gray-500 py-1">تمتلك حساب مسبقا؟ أدخل الان.</button>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <hr>

        <div class="max-w-[1280px] mx-auto flex justify-between items-center font-cairo px-6 py-3  text-gray-900">

            <div class="flex justify-center items-center md:w-auto w-[90%]">
                <button class="xl:p-3 xl:mx-2 mx-1 p-2 font-normal bg-lime-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0);transform: ;msFilter:;"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
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

            <button class="md:hidden block xl:p-3 xl:mx-2 mx-1 p-2 font-normal bg-blue-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0);transform: ;msFilter:;"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
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


    {{-- LoginModal: --}}

    <div id="loginModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-slate-50 w-full max-w-md p-6 rounded-md shadow-md">
                <button dir="rtl" id="closeLoginModalButton" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div dir="rtl" class="mb-4 text-center">
                    <h2 class="text-2xl pb-2 font-semibold font-cairo">مرحبا بك, قم بانشاء حسابك</h2>
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

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">سجل الان</button>

                    <button id="openLoginModal" class="text-center text-sm text-gray-500 py-1">تمتلك حساب مسبقا؟ أدخل الان.</button>
                    
                </form>


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
        

        const openModal = () => {
            registerModal.classList.remove('hidden');
        };

        const closeModal = () => {
            registerModal.classList.add('hidden');
        };

        const openLoginModal = () => {
            registerModal.classList.add('hidden');
            loginModal.classList.remove('hidden');
        };
        
        const closeLoginModal = () => {
            loginModal.classList.add('hidden');
        };

        openModalButton.addEventListener('click', openModal);
        closeModalButton.addEventListener('click', closeModal);
        closeModalSecondButton.addEventListener('click', closeModal);

        openLoginModalButton.addEventListener('click', openLoginModal);
        closeLoginModalButton.addEventListener('click', closeLoginModal);
        closeLoginModalSecondButton.addEventListener('click', closeLoginModal);

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
            }
        });

    </script>


    </body>
</html>