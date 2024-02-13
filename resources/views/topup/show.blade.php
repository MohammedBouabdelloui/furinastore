@extends('layouts.app')
 
@section('title', 'صفحة الشحن')
 

@section('content')

<div class="mx-auto xl:max-w-[1280px] font-cairo mt-12 my-4">

    <div dir="rtl" class="my-4 grid grid-cols-1 md:grid-cols-12 gap-x-2 gap-y-6 lg:gap-x-4 lg:gap-y-12 mx-2">
        
        <div class="bg-slate-50 rounded-md col-span-5">

            <div class="flex flex-col justify-center items-center">
            
                <img src="{{ asset('img/posters/Furina-build.webp') }}" alt="" class="w-full lg:w-[470px] h-[240px] lg:h-[470px] object-cover rounded-2xl">

            </div>
            
        </div>

        <div class="bg-slate-50 rounded-md col-span-7">

            <div class="flex flex-col justify-center items-start text-start">
            
                <div class="flex justify-center items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>

                    <span class="mx-1 text-xs lg:text-sm">(تم الشراء 127)</span>
                </div>

                <h1 class="font-extrabold text-4xl my-6">فورينا - ليفل 40 + مناطق مفرمة</h1>
                
                <div class="text-md text-gray-500 my-4">
                    ما بين 30000 الى 40000 بريموجيم
                    <br>
                    أكثر من 30 ويش للبنر المؤقت
                    <br>
                    أكثر من 60 ويش للبنر الدائم
                    <br>
                    مع 12 شخصيات و أسلحة أربع نجوم
                    <br>
                    <br>
                    حساب بين ليفل 40 و 50 
                    <br>
                    سوميرو - فونتين - اينازوما مفرمة بالكامل
                </div>

                <h1 class="text-bold text-xl mt-3 mb-1">154.79 درهم</h1>

                <span class="text-xs my-2">السيرفر</span>

                <div class="flex justify-start items-center my-2">
                    <button type="checkbox" class="py-1 px-6 mx-1 border border-blue-500 rounded-sm text-blue-500 hover:text-white hover:bg-blue-600 transition ease-in-out duration-300 hover:border-blue-600">Europe</button>
                    <button type="checkbox" class="py-1 px-6 mx-1 border border-blue-500 rounded-sm text-blue-500 hover:text-white hover:bg-blue-600 transition ease-in-out duration-300 hover:border-blue-600">America</button>
                    <button type="checkbox" class="py-1 px-6 mx-1 border border-blue-500 rounded-sm text-blue-500 hover:text-white hover:bg-blue-600 transition ease-in-out duration-300 hover:border-blue-600">Asia</button>
                </div>

                <span class="text-xs my-2">ترقيات</span>

                <button type="checkbox" class="w-80 py-2 px-6 mx-1 my-1 border border-blue-500 rounded-sm text-blue-500 hover:text-white hover:bg-blue-600 transition ease-in-out duration-300 hover:border-blue-600">نافيا + شخصية عشوائية من البنر الدائم</button>

                <button type="checkbox" class="w-80 py-2 px-6 mx-1 my-1 border border-blue-500 rounded-sm text-blue-500 hover:text-white hover:bg-blue-600 transition ease-in-out duration-300 hover:border-blue-600">نافيا + سلاحها الخاص</button>

                <button type="checkbox" dir="rtl" class="my-6 font-bold text-md w-[55%] bg-slate-100 py-3 border border-black rounded-3xl hover:text-white hover:bg-black transition ease-in-out duration-500">أضف الى السلة</button>

                
                <div dir="rtl" class="flex justify-end items-center opacity-85 mb-3 mt-2">
                    <img src="{{ asset('img/icons/wish_icon_2.png') }}" alt="" class="w-10 lg:w-8">
                    <h1 class="font-bold text-xl lg:text-lg mx-4">معلومات التوصيل</h1>
                </div>


                <p class="text-gray-600 mb-6 text-lg">معلومات الدخول لحسابك الجديد ستصلك في الايميل و سيتم التواصل معك عبر حسابك في احد منصات التواصل الاجتماعي في أقل من 24 ساعة, وغالبا في غضون دقائق معدودة.</p>

                
                <div dir="rtl" class="flex justify-end items-center opacity-85 mb-3 mt-2">
                    <img src="{{ asset('img/icons/wish_icon_2.png') }}" alt="" class="w-10 lg:w-8">
                    <h1 class="font-bold text-xl lg:text-lg mx-4">الحماية و الجودة</h1>
                </div>
                
                <p class="text-gray-600 mb-6 text-lg">الحساب مربوط برقم تعريفي من الشركة هويوفيرس نفسها, ليس مربوط بأي ايميل أو رقم هاتف. بعد شرائه يمكنك وضع ايميلك الشخصي وكلمة السر الخاصة بك, ما يجعل الحساب 100% ملكا لك.</p>

                
                <div dir="rtl" class="flex justify-end items-center opacity-85 mb-3 mt-2">
                    <img src="{{ asset('img/icons/wish_icon_2.png') }}" alt="" class="w-10 lg:w-8">
                    <h1 class="font-bold text-xl lg:text-lg mx-4">التفاعلية</h1>
                </div>

                <p class="text-gray-600 mb-6 text-lg">يمكنك الاستمتاع بحسابك على جميع الأجهزة و الأنضمة iOS, Android, PC, PS4/5</p>

            </div>
            
        </div>

    </div>

    

</div>

@endsection