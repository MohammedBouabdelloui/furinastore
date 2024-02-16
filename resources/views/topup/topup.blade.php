@extends('layouts.app')
 
@section('title', 'أفضل متجر عربي للعبة قنشن')

@section('content')
<div class="bg-gray-100 py-16">
    <div class="container mx-auto flex items-center justify-center">
        <!-- Image on the left side -->
        <div class="w-1/2 mr-8">
            <img src="{{ asset('img/banners/banner3.webp') }}" alt="Promotion Image" class="w-full h-auto rounded-lg shadow-md">
        </div>
        
        <!-- Text content on the right side -->
        <div class="w-1/2">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">عرض  خاص</h2>
            <p class="text-lg text-gray-600 mb-6">احتفل بافتتاحنا الخاص واستمتع بعرض حصري! اقضِ وقتاً مميزاً مع خدمات الشحن الخاصة بنا. اقتنص الفرصة الآن واحصل على مكافآت رائعة عند شحن رصيدك. تفضل بزيارتنا اليوم واستفد من هذا العرض الاستثنائي. شكراً لدعمكم!</p>
            
            <!-- Call to action button -->
            <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-full inline-block hover:bg-blue-600">Shop Now</a>
        </div>
    </div>
</div>





<div class="mx-auto xl:max-w-[1280px] font-cairo mt-12 my-4">

    <div class="flex justify-end items-center opacity-85 mb-8 mx-2">
        <h1 dir="rtl" class="font-bold text-xl lg:text-4xl mx-4">عروض شحن البرايموجيم و الوكلن مون</h1>
        <img src="{{ asset('img/icons/wish_icon_2.png') }}" alt="" class="w-10 lg:w-16">
    </div>

    <div class="my-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-2 gap-y-6 lg:gap-x-4 lg:gap-y-12 mx-2" dir="rtl">
        
        @foreach ($topups as $topup )
            
        
        <div class="bg-slate-50 rounded-md ">

            <div class="flex flex-col justify-center items-center">
            
                <img src="{{ asset('storage/'. $topup->picture) }}" alt="" class="w-full h-[240px] lg:h-[260px] object-cover rounded-xl">

                <h1 class="font-bold text-lg my-2"> {{ $topup->title }}</h1>

                <div class="flex justify-center items-center mt-1">
                    <span class="mx-1 text-xs lg:text-sm">(تم الشراء {{ $topup->orders()->count() }})</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                </div>

                <a href="{{ route('topup.details' , $topup->id) }}" dir="rtl" class="my-2 text-center  font-bold text-md w-[95%] bg-slate-200 py-2 rounded-md hover:bg-slate-300"> د.م {{ $topup->price }}</a>

            </div>
            
        </div>
        @endforeach




    </div>

 

</div>


@endsection