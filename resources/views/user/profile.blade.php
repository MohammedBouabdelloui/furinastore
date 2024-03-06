@extends('layouts.app')

@section('title', 'الحساب الشخصي')


@section('content')

    <div dir="rtl" class="px-6 py-10 font-cairo">
        <h1 class="text-3xl text-bold">بطاقة الحساب الشخصي:</h1>

        <div  class="mx-auto my-8 grid grid-cols-3 md:grid-cols-3 gap-1 lg:gap-4 xl:max-w-[1280px] px-2">

            <img src="{{ asset('storage/uploads/profile/nuevillette.jpg') }}" alt="" class="col-span-1 rounded-full w-[100px] h-[100px] md:w-[250px] md:h-[250px] object-cover border-2 border-gray-200 shadow-xl">

            <div class="my-auto font-cairo col-span-2 md:col-span-1">
                <h1 class="text-bold text-blue-600 text-md md:text-xl mb-6">المعلومات الشخصية</h1>

                <span class="text-xs md:text-sm">الاسم:</span>
                <h1 class="text-bold text-sm md:text-lg opacity-90 text-gray-500 mb-2">Mohammed bouabdellaoui</h1>

                <span class="text-xs md:text-sm">الايميل:</span>
                <h1 class="text-bold text-sm md:text-lg opacity-90 text-gray-500 mb-2">Mohammed.bouabdellaoui@gmail.com</h1>

                <span class="text-xs md:text-sm">رقم الهاتف:</span>
                <h1 class="text-bold text-sm md:text-lg opacity-90 text-gray-500 mb-2">+212 778989980</h1>

                <span class="text-xs md:text-sm">حساب الانستاقرام:</span>
                <h1 class="text-bold text-sm md:text-lg opacity-90 text-gray-500 mb-2">@simosimo</h1>

                <span class="text-xs md:text-sm">حساب الفايسبوك:</span>
                <h1 class="text-bold text-sm md:text-lg opacity-90 text-gray-500 mb-2">Simo Simobouabdellaoui</h1>

            </div>


            <div class="m-auto text-center font-cairo col-span-3 md:col-span-1 ">

                <h1 class="text-bold text-blue-600 text-md md:text-xl m-6 lg:mb-6">العمليات:</h1>

                <div class="flex flex-col justify-center items-start w-60">

                    <button id="openChangePasswordModal" type="button" class="my-2 py-2 w-full rounded-md bg-blue-600 text-white">تغير كلمة السر</button> 
                    
                    <button id="openChangePictureModal" type="button" class="my-2 py-2 w-full rounded-md bg-blue-600 text-white">تغير صورة البروفايل</button>

                    <button id="openAddLinksModal" type="button" class="my-2 py-2 w-full rounded-md bg-blue-600 text-white">أضافة مواقع تواصل</button>

                    <button id="openReportModal" type="button" class="my-2 py-2 w-full rounded-md bg-white border border-blue-600 text-blue-600">ابلاغ عن خلل</button>

                </div>
            
            </div>

            

        </div>

        <hr>

        <div  class="mx-auto my-8 grid grid-cols-2 md:grid-cols-3 gap-1 lg:gap-4 xl:max-w-[1280px] px-2">

            <div class="my-auto font-cairo">

                <div class="bg-white shadow-xl rounded-lg px-4 py-2 mb-3">

                    <div class="flex justify-between items-center p-2">

                        <span class="text-sm">الطلب رقم #46829</span>
                        <span class="text-sm text-green-600">تم شراؤه</span>

                    </div>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>

                    <hr>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>
                    
                    <span class="px-4 text-sm text-gray-500">بتاريخ: 04/04/2023</span>

                </div>
            </div>

            <div class="my-auto font-cairo">

                <div class="bg-white shadow-xl rounded-lg px-4 py-2 mb-3">

                    <div class="flex justify-between items-center p-2">

                        <span class="text-sm">الطلب رقم #46829</span>
                        <span class="text-sm text-green-600">تم شراؤه</span>

                    </div>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>

                    <hr>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>
                    
                    <span class="px-4 text-sm text-gray-500">بتاريخ: 04/04/2023</span>

                </div>
            </div>

            <div class="my-auto font-cairo">

                <div class="bg-white shadow-xl rounded-lg px-4 py-2 mb-3">

                    <div class="flex justify-between items-center p-2">

                        <span class="text-sm">الطلب رقم #46829</span>
                        <span class="text-sm text-green-600">تم شراؤه</span>

                    </div>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>

                    <hr>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>
                    
                    <span class="px-4 text-sm text-gray-500">بتاريخ: 04/04/2023</span>

                </div>
            </div>

            <div class="my-auto font-cairo">

                <div class="bg-white shadow-xl rounded-lg px-4 py-2 mb-3">

                    <div class="flex justify-between items-center p-2">

                        <span class="text-sm">الطلب رقم #46829</span>
                        <span class="text-sm text-green-600">تم شراؤه</span>

                    </div>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>

                    <hr>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>
                    
                    <span class="px-4 text-sm text-gray-500">بتاريخ: 04/04/2023</span>

                </div>
            </div>

            <div class="my-auto font-cairo">

                <div class="bg-white shadow-xl rounded-lg px-4 py-2 mb-3">

                    <div class="flex justify-between items-center p-2">

                        <span class="text-sm">الطلب رقم #46829</span>
                        <span class="text-sm text-green-600">تم شراؤه</span>

                    </div>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>

                    <hr>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>
                    
                    <span class="px-4 text-sm text-gray-500">بتاريخ: 04/04/2023</span>

                </div>
            </div>

            <div class="my-auto font-cairo">

                <div class="bg-white shadow-xl rounded-lg px-4 py-2 mb-3">

                    <div class="flex justify-between items-center p-2">

                        <span class="text-sm">الطلب رقم #46829</span>
                        <span class="text-sm text-green-600">تم شراؤه</span>

                    </div>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>

                    <hr>

                    <div class="flex justify-between items-center">
                        <h1 class="text-bold text-lg opacity-90 text-gray-500 m-2">Mohammed bouabdellaoui</h1>
                        <span class="text-sm ">59 د.م</span>
                        
                    </div>
                    
                    <span class="px-4 text-sm text-gray-500">بتاريخ: 04/04/2023</span>

                </div>
            </div>
            
        </div>

    </div>


    {{-- change Passowrd modal: --}}
    <div id="changePasswordModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-slate-50 w-[90%] max-w-md p-6 rounded-md shadow-md">
                <button dir="rtl" id="closeChangePasswordModal" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div dir="rtl" class="mb-4 text-center">
                    <h2 class="text-2xl pb-2 font-semibold font-cairo">تغير كلمة المرور</h2>
                    <button id="closeChangePasswordModalButton" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <form  action="" method="POST" dir="rtl" class="font-cairo">
                    @csrf

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-600">أدخل كلمة الحالية</label>
                        <input type="password" id="password" name="passwordLogin" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-600">أدخل كلمة الجديدة</label>
                        <input type="password" id="new_password" name="newPasswordLogin" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">تغيير</button>
                    
                </form>

            </div>
        </div>
    </div>


    {{-- change Picture modal: --}}
    <div id="changePictureModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-slate-50 w-[90%] max-w-md p-6 rounded-md shadow-md">
                <button dir="rtl" id="closeChangePictureModal" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div dir="rtl" class="mb-4 text-center">
                    <h2 class="text-2xl pb-2 font-semibold font-cairo">تغير صورة الحساب الشخصي</h2>
                    <button id="closeChangePictureModalButton" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <form  action="" method="POST" dir="rtl" class="font-cairo" enctype="multipart/form-data">
                    @csrf

                    <img src="{{ asset('storage/uploads/profile/nuevillette.jpg') }}" alt="" class="mx-auto text-center rounded-full w-[100px] h-[100px] md:w-[250px] md:h-[250px] object-cover border-2 border-gray-200 shadow-xl">

                    <div class="mb-4">
                        <label for="picture" class="block text-sm font-medium text-gray-600">أدخل كلمة الحالية</label>
                        <input type="file" id="picture" name="picture" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">تغيير</button>
                    
                </form>

            </div>
        </div>
    </div>


    {{-- Add links modal: --}}
    <div id="addLinksModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-slate-50 w-[90%] max-w-md p-6 rounded-md shadow-md">
                <button dir="rtl" id="closeAddLinksModal" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div dir="rtl" class="mb-4 text-center">
                    <h2 class="text-2xl pb-2 font-semibold font-cairo">اظافة وسائل تواصل</h2>
                    <button id="closeAddLinksModalButton" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <form  action="" method="POST" dir="rtl" class="font-cairo" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="facebook" class="block text-sm font-medium text-gray-600">رابط حساب الفايسبوك</label>
                        <input type="text" id="facebook" name="facebook" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <div class="mb-4">
                        <label for="instagram" class="block text-sm font-medium text-gray-600">رابط أو يوزر حساب الانستاقرام</label>
                        <input type="text" id="instagram" name="instagram" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">حفظ</button>
                    
                </form>

            </div>
        </div>
    </div>

    {{-- Reports modal: --}}
    <div id="reportModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-slate-50 w-[90%] max-w-md p-6 rounded-md shadow-md">
                <button dir="rtl" id="closeReportModal" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div dir="rtl" class="mb-4 text-center">
                    <h2 class="text-2xl pb-2 font-semibold font-cairo">اظافة وسائل تواصل</h2>
                    <button id="closeReportModalButton" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <form  action="" method="POST" dir="rtl" class="font-cairo" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="report_title" class="block text-sm font-medium text-gray-600">عنوان البلاغ</label>
                        <input type="text" id="report_title" name="report_title" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <div class="mb-4">
                        <label for="comunication" class="block text-sm font-medium text-gray-600">رابط الفايسبوك أو يوزر الانستاقرام أو رقم الواتساب (ليسهل التواصل معك)</label>
                        <input type="text" id="comunication" name="comunication" class="mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                    </div>

                    <div class="mb-4">
                        <label for="discription" class="block text-sm font-medium text-gray-600">شرح مفصل للمشكل الذي تواجهه</label>
                        <textarea rows="10" cols="10" id="discription" name="discription" class="text-sm mt-1 p-2 w-full border border-gray-300 focus:border-gray-300 focus:ring-0 rounded-md outline-none focus:outline-none bg-slate-100">
                        </textarea>
                    </div>

                    <button type="submit" class="w-full mt-2 mb-3 p-2 bg-blue-600 text-white rounded-sm hover:bg-blue-500">ابلاغ</button>
                    
                </form>

            </div>
        </div>
    </div>

    <script>
        const changePasswordModal = document.getElementById('changePasswordModal');
        const openChangePasswordModalButton = document.getElementById('openChangePasswordModal');
        const closeChangePasswordModalButton = document.getElementById('closeChangePasswordModal');
        const closeButtonPassword = document.getElementById('closeChangePasswordModalButton');
    
        const changePictureModal = document.getElementById('changePictureModal');
        const openChangePictureModalButton = document.getElementById('openChangePictureModal');
        const closeChangePictureModalButton = document.getElementById('closeChangePictureModal');
        const closeButtonPicture = document.getElementById('closeChangePictureModalButton');
        
        const addLinksModal = document.getElementById('addLinksModal');
        const openAddLinksModalButton = document.getElementById('openAddLinksModal');
        const closeAddLinksModalButton = document.getElementById('closeAddLinksModal');
        const closeButtonAddLinks = document.getElementById('closeAddLinksModalButton');

        const reportModal = document.getElementById('reportModal');
        const openReportModalButton = document.getElementById('openReportModal');
        const closeReportModalButton = document.getElementById('closeReportModal');
        const closeButtonReport = document.getElementById('closeReportModalButton');

        const openPasswordModal = () => {
            changePasswordModal.classList.remove('hidden');
        };
        
        const closePasswordModal = () => {
            changePasswordModal.classList.add('hidden');
        };
    
        const openPictureModal = () => {
            changePictureModal.classList.remove('hidden');
        };
    
        const closePictureModal = () => {
            changePictureModal.classList.add('hidden');
        };

        const openAddLinksModal = () => {
            addLinksModal.classList.remove('hidden');
        };
        
        const closeAddLinksModal = () => {
            addLinksModal.classList.add('hidden');
        };

        const openReportModal = () => {
            reportModal.classList.remove('hidden');
        };
        
        const closeReportModal = () => {
            reportModal.classList.add('hidden');
        };
        
        openChangePasswordModalButton.addEventListener('click', openPasswordModal);
        closeChangePasswordModalButton.addEventListener('click', closePasswordModal);
        closeButtonPassword.addEventListener('click', closePasswordModal);
    
        openChangePictureModalButton.addEventListener('click', openPictureModal);
        closeChangePictureModalButton.addEventListener('click', closePictureModal);
        closeButtonPicture.addEventListener('click', closePictureModal);
        
        openAddLinksModalButton.addEventListener('click', openAddLinksModal);
        closeAddLinksModalButton.addEventListener('click', closeAddLinksModal);
        closeButtonAddLinks.addEventListener('click', closeAddLinksModal);
        
        openReportModalButton.addEventListener('click', openReportModal);
        closeReportModalButton.addEventListener('click', closeReportModal);
        closeButtonReport.addEventListener('click', closeReportModal);
        
        changePasswordModal.addEventListener('click', (event) => {
            if (event.target === changePasswordModal) {
                closePasswordModal();
            }
        });
        
        changePictureModal.addEventListener('click', (event) => {
            if (event.target === changePictureModal) {
                closePictureModal();
            }
        });
        
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closePasswordModal();
                closePictureModal();
            }
        });

        addLinksModal.addEventListener('click', (event) => {
            if (event.target === addLinksModal) {
                closeAddLinksModal();
            }
        });
        
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeAddLinksModal();
            }
        });

        reportModal.addEventListener('click', (event) => {
            if (event.target === reportModal) {
                closeReportModal();
            }
        });
        
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeReportModal();
            }
        });

    </script>
    
    

@endsection
