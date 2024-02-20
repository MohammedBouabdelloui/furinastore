@extends('layouts.app')
 
@section('title', 'حقيبة مشترياتي')
 

@section('content')

<div class="max-w-[1280px] my-2">

    <div dir="rtl" class="flex justify-between items-center font-cairo my-12 px-3">
        <h1 class="text-4xl font-extrabold">مشترياتي</h1>
        <a href="{{ route('home') }}" class="underline">أضافة مشتريات أخرى</a>
    </div>

    {{-- <div dir="rtl" class="overflow-x-auto">
        <table class="table-auto min-w-full divide-y divide-gray-200 font-cairo">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">معلومات المنتوج</th>
                    <th class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">الكمية</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">المبلغ</th>
                </tr>
            </thead>
            <tbody class="bg-transparent divide-none divide-y divide-gray-200">

                <tr class="mb-6">
                    <td class="px-6 py-6 whitespace-no-wrap">
                        <div class="flex justify-start items-center">
                            <img src="{{ asset('img/posters/Furina-build.webp') }}" alt="" class="w-32 h-32 rounded-xl object-cover">
                            <div class="pr-8">
                                <h1 class="text-xl font-extrabold mb-2">عنوان النتوج</h1>
                                <p class="text-lg text-bold my-1">120 د.م</p>
                                <div class="text-gray-600 text-md my-1">
                                    شرح بسيط عن المنتوج الذي تم شراؤه
                                </div>
                                <ul class="text-gray-600 text-md my-1">
                                    <li>الخيار رقم واحد (السيرفر مثلا)</li>
                                    <li>الخيار الثاني مثلا اشياء اضافية في العرض</li>
                                    <li>الخيار الثالث</li>
                                </ul>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-6 whitespace-no-wrap">

                        <div class="flex justify-center items-center">
                            <button id="increaseQuantity" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="decreaseQuantity()">-</button>
                            <input id="chosenQuantity" type="number" min="1" class="w-24 text-center py-2 bg-gray-100 outline-none border-transparent focus:border-transparent focus:ring-0" value="1">
                            <button id="decreaseQuantity" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="increaseQuantity()">+</button>

                            <button class="mx-8">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6"
                                x-tooltip="tooltip"
                                >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                />
                                </svg>
                            </button>
                        </div>

                    </td>

                    <td class="px-6 py-6 whitespace-no-wrap text-2xl text-left font-bold">120 د.م</td>
                </tr>
                
            </tbody>
        </table>
    </div> --}}
    
    <div dir="rtl" class="overflow-x-auto">
        <table class="table-auto min-w-full divide-y divide-gray-200 font-cairo">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">معلومات المنتوج</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">المبلغ</th>
                </tr>
            </thead>
            <tbody class="bg-transparent divide-none divide-y divide-gray-200">

                @forelse ($orders as $order)
                {{-- @dump($order->toArray()) --}}
                    <tr class="mb-6">
                        <td class="px-6 py-6 whitespace-no-wrap">
                            <div class="flex justify-start items-center">
                                <img src="{{ asset('storage/'. $order->orderedItem->picture) }}" alt="" class="w-24 h-24 md:w-32 md:h-32 rounded-xl object-cover">
                                <div class="pr-2 md:pr-8">
                                    <h1 class="text-lg md:text-xl font-bold md:font-extrabold mb-2">{{ $order->orderedItem->title }}</h1>
                                    <p class="text-md md:text-lg text-bold my-1">{{ $order->orderedItem->topup_value }}</p>
                                    <div class="text-gray-600 text-sm md:text-md my-1">
                                        {!! $order->orderedItem->description !!}
                                    </div>
                                </div>
                            </div>
                    
                            <div class="flex justify-center items-center py-1">
                                <button class="py-2 px-4 bg-gray-200 rounded-lg" onclick="decreaseQuantity('chosenQuantity{{ $order->id }}', '{{ $order->orderedItem->price }}')">-</button>

                                <input id="chosenQuantity{{ $order->id }}" type="number" min="1" class="w-24 text-center py-2 bg-gray-100 outline-none border-transparent focus:border-transparent focus:ring-0" value="{{ $order->quantity_chosen }}" onchange="updateTotalPrice('chosenQuantity{{ $order->id }}', '{{ $order->orderedItem->price }}')">

                                <button class="py-2 px-4 bg-gray-200 rounded-lg" onclick="increaseQuantity('chosenQuantity{{ $order->id }}', '{{ $order->orderedItem->price }}')">+</button>
                                <form action="{{ route('product.order.destroy' , $order->id) }}"  method="POST" /> 
                                    @csrf
                                    @method('DELETE')
                                    <button class="mx-8">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-6 w-6"
                                        x-tooltip="tooltip"
                                        >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                        </svg>
                                    </button>
                                </form> 
                            </div>
                    
                        </td>
                    
                        <td id="totalPrice{{ $order->id }}" class="px-6 py-6 whitespace-no-wrap text-lg md:text-2xl text-left font-bold">{{ ($order->price) }} د.م</td>
                    </tr>
                @empty
                    
                @endforelse
                
                
            </tbody>
        </table>
    </div>

    <hr class="text-gray-600 mb-4">

    <h1 dir="rtl" class="text-3xl font-extrabold text-right font-cairo px-12">
        
        المجموع 
        <span class="text-lg font-normal text-gray-700 px-8">{{ $orders->sum('price')}}  د.م </span>

    </h1>

    <div dir="rtl" class="mx-auto text-center">
        <button class="my-6 font-bold text-md w-[90%] mx-auto text-center lg:w-[30%] bg-slate-50 py-3 border border-black rounded-3xl hover:text-white hover:bg-black transition ease-in-out duration-500 font-cairo">أتمم الطلب</button>
    </div>

    <div class="flex justify-center items-center mb-16">
        <img src="{{ asset('img/payment/mastercard_color.svg') }}" alt="" class="w-12 h-auto mx-2">
        <img src="{{ asset('img/payment/visa_1_color.svg') }}" alt="" class="w-16 h-auto mx-3">
        <img src="{{ asset('img/payment/applepay_color.svg') }}" alt="" class="w-16 h-auto mx-2">
        <img src="{{ asset('img/payment/paypal_1_color.svg') }}" alt="" class="w-16 h-auto mx-2">
    </div>


    <div class="mx-auto xl:max-w-[1280px] font-cairo mt-12 mb-6">

        <div class="flex justify-center items-center opacity-85 mb-8 mx-2">
            <h1 dir="rtl" class="font-bold text-xl lg:text-4xl mx-4">كيف نعمل؟</h1>
            <img src="{{ asset('img/icons/wish_icon_2.png') }}" alt="" class="w-10 lg:w-16">
        </div>

        <div class="my-4 grid grid-cols-1 md:grid-cols-3 gap-x-2 gap-y-6 lg:gap-x-4 lg:gap-y-12 mx-2">
            
            <div class="bg-slate-50 rounded-md ">

                <div class="flex flex-col justify-center items-center">
                
                    <div class="w-full h-64 rounded-xl bg-gray-300 p-8 text-center text-black flex flex-col justify-center items-center ">

                        <img src="{{ asset('img/characters_cute/paimon.jpg') }}" alt="" class="rounded-full w-32 my-4">

                        <p class="text-xl font-bold">
                            اختر المنتوجات التي ترغب بها
                        </p>
                    </div>

                </div>
                
            </div>
            
            <div class="bg-slate-50 rounded-md ">

                <div class="flex flex-col justify-center items-center">
                
                    <div class="w-full h-64 rounded-xl bg-gray-300 p-8 text-center text-black flex flex-col justify-center items-center ">

                        <img src="{{ asset('img/characters_cute/furina.jpeg') }}" alt="" class="rounded-full w-32 my-4">

                        <p class="text-xl font-bold">
                            قم بالدفع واستلم طلبك بعد دقائق معدودة
                        </p>
                    </div>

                </div>
                
            </div>
            
            <div class="bg-slate-50 rounded-md ">

                <div class="flex flex-col justify-center items-center">
                
                    <div class="w-full h-64 rounded-xl bg-gray-300 p-8 text-center text-black flex flex-col justify-center items-center ">

                        <img src="{{ asset('img/characters_cute/klee.jpg') }}" alt="" class="rounded-full w-32 my-4">

                        <p class="text-xl font-bold">
                            ادخل حسابك واستمتع
                        </p>
                    </div>

                </div>
                
            </div>

        </div>

        <div class="flex justify-center items-center">

            <button class="mx-auto text-center text-lg py-2 px-10 border border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 rounded-xl transition ease-in-out duration-500">لأي استفسار تواصلوا معنا على الانستاغرام</button>

        </div>

    </div>


    <div class="mx-auto xl:max-w-[1280px] font-cairo mt-12 mb-6">

        <div class="flex justify-end items-center opacity-85 mb-8 mx-2">
            <h1 dir="rtl" class="font-bold text-xl lg:text-4xl mx-4">منتوجات من الممكن أن تفيدك</h1>
            <img src="{{ asset('img/icons/wish_icon_2.png') }}" alt="" class="w-10 lg:w-16">
        </div>

        <div class="my-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-2 gap-y-6 lg:gap-x-4 lg:gap-y-12 mx-2">
            
            <div class="bg-slate-50 rounded-md ">

                <div class="flex flex-col justify-center items-center">
                
                    <img src="{{ asset('img/posters/Furina-build.webp') }}" alt="" class="w-full h-[240px] lg:h-[260px] object-cover rounded-xl">

                    <h1 class="font-bold text-lg my-2">ولكن مون</h1>

                    <div class="flex justify-center items-center mt-1">
                        <span class="mx-1 text-xs lg:text-sm">(تم الشراء 127)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>

                    <button dir="rtl" class="my-2 font-bold text-md w-[95%] bg-slate-100 py-2 rounded-md">48 د.م</button>

                </div>
                
            </div>

            <div class="bg-slate-50 rounded-md ">

                <div class="flex flex-col justify-center items-center">
                
                    <img src="{{ asset('img/posters/Furina-build.webp') }}" alt="" class="w-full h-[240px] lg:h-[260px] object-cover rounded-xl">

                    <h1 class="font-bold text-lg my-2">ولكن مون</h1>

                    <div class="flex justify-center items-center mt-1">
                        <span class="mx-1 text-xs lg:text-sm">(تم الشراء 127)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>

                    <button dir="rtl" class="my-2 font-bold text-md w-[95%] bg-slate-100 py-2 rounded-md">48 د.م</button>

                </div>
                
            </div>

            <div class="bg-slate-50 rounded-md ">

                <div class="flex flex-col justify-center items-center">
                
                    <img src="{{ asset('img/posters/Furina-build.webp') }}" alt="" class="w-full h-[240px] lg:h-[260px] object-cover rounded-xl">

                    <h1 class="font-bold text-lg my-2">ولكن مون</h1>

                    <div class="flex justify-center items-center mt-1">
                        <span class="mx-1 text-xs lg:text-sm">(تم الشراء 127)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>

                    <button dir="rtl" class="my-2 font-bold text-md w-[95%] bg-slate-100 py-2 rounded-md">48 د.م</button>

                </div>
                
            </div>

            <div class="bg-slate-50 rounded-md ">

                <div class="flex flex-col justify-center items-center">
                
                    <img src="{{ asset('img/posters/Furina-build.webp') }}" alt="" class="w-full h-[240px] lg:h-[260px] object-cover rounded-xl">

                    <h1 class="font-bold text-lg my-2">ولكن مون</h1>

                    <div class="flex justify-center items-center mt-1">
                        <span class="mx-1 text-xs lg:text-sm">(تم الشراء 127)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 242, 0);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>

                    <button dir="rtl" class="my-2 font-bold text-md w-[95%] bg-slate-100 py-2 rounded-md">48 د.م</button>

                </div>
                
            </div>

        </div>

        <div class="flex justify-center items-center">

            <button class="mx-auto text-center text-lg py-1 px-10 border border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 rounded-sm transition ease-in-out duration-500">أظهر المزيد</button>

        </div>

    </div>

</div>

{{-- <script>
    function decreaseQuantity(id) {
        var quantityInput = document.getElementById(id);
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    }

    function increaseQuantity(id) {
        var quantityInput = document.getElementById(id);
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    }
</script> --}}

<script>
    function updateTotalPrice(inputId, price) {
        const quantity = parseInt(document.getElementById(inputId).value);
        const totalPriceElement = document.getElementById('totalPrice' + inputId.slice(-1));
        totalPriceElement.textContent = ((quantity * price)) + " د.م";
    }

    function decreaseQuantity(inputId, price) {
        const inputElement = document.getElementById(inputId);
        let quantity = parseInt(inputElement.value);
        if (quantity > 1) {
            quantity--;
            inputElement.value = quantity;
            updateTotalPrice(inputId, price);
        }
    }

    function increaseQuantity(inputId, price) {
        const inputElement = document.getElementById(inputId);
        let quantity = parseInt(inputElement.value);
        quantity++;
        inputElement.value = quantity;
        updateTotalPrice(inputId, price);
    }
</script>
@endsection