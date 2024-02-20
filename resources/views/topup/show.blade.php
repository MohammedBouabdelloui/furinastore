@extends('layouts.app')
 
@section('title', 'صفحة الشحن')
 

@section('content')

<div class="mx-auto xl:max-w-[1280px] font-cairo mt-12 my-4">

    <div dir="rtl" class="my-4 grid grid-cols-1 md:grid-cols-12 gap-x-2 gap-y-6 lg:gap-x-4 lg:gap-y-12 mx-2">
        
        <div class="bg-slate-50 rounded-md col-span-5">

            <div class="flex flex-col justify-center items-center">
            
                <img src="{{ asset('storage/' . $topup->picture) }}" alt="" class="w-[400px] lg:w-[470px] h-[400px] lg:h-[470px] object-cover rounded-2xl">

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
                    <span class="mx-1 text-xs lg:text-sm">( {{ $topup->productOrder->count() }} تم الشراء )</span>
                </div>

                <h1 class="font-extrabold text-4xl my-6">{{ $topup->title }}</h1>
                
                <div class="text-md text-gray-500 my-4">
                    {!! $topup->description !!}
                </div>

                
                <h1 id="price" class="text-bold text-xl mt-3 mb-1"> {{ $topup->price }} درهم</h1>

                <form action="{{ route('product.order.store') }}" method="post">
                    
                    @csrf

                    <input type="hidden" id="total_price" name="price" value="{{ $topup->price }}">
                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                    <input type="hidden" value="{{ $topup->id }}" name="ordered_item_id">
                    <input type="hidden" value="App\Models\Topup" name="ordered_table_type">
                    <input type="hidden" value="{{ $topup->topup_value }}" name="value_chosen">

                    <span class="text-xs my-2">السيرفر</span>
                    
                    <ul class="grid w-full gap-4 md:grid-cols-3 mb-4">
                        
                        <li>
                            <input type="radio" name="server" id="europe-server" value="europe" class="hidden peer" required="">
                            <label for="europe-server" class="inline-flex items-center justify-between w-full p-2 text-blue-500 bg-slate-50 border-2 border-blue-200 rounded-sm cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 hover:text-blue-600 peer-checked:text-white hover:bg-blue-50">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">أوروبا</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="server" id="america-server" value="america" class="hidden peer" required="">
                            <label for="america-server" class="inline-flex items-center justify-between w-full p-2 text-blue-500 bg-slate-50 border-2 border-blue-200 rounded-sm cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 hover:text-blue-600 peer-checked:text-white hover:bg-blue-50">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">أمريكا</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="server" id="asia-server" value="asia" class="hidden peer" required="">
                            <label for="asia-server" class="inline-flex items-center justify-between w-full p-2 text-blue-500 bg-slate-50 border-2 border-blue-200 rounded-sm cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 hover:text-blue-600 peer-checked:text-white hover:bg-blue-50">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">أسيا</div>
                                </div>
                            </label>
                        </li>
                        
                    </ul>
                
                    <span dir="rtl" class="text-xs mt-6 mb-4">ال ID الخاص بك</span>
                    <br>
                    
                    <input type="number" min="0" name="genshinAccountId" id="" class="border border-blue-400 rounded-md py-2 px-8 w-full md:w-96 bg-transparent outline-none focus:border-blue-600 focus:ring-0 placeholder:font-bold">

                    <br>

                    <span dir="rtl" class="text-xs mt-6 mb-4">عدد المرات</span>
                    <br>
                    
                    <div class="flex justify-center items-center py-1">
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="decreaseQuantity('chosenQuantity3')">-</button>

                        <input id="chosenQuantity3" type="number" min="1" name="quantity_chosen" class="w-48 text-center py-2 bg-gray-100 outline-none border-transparent focus:border-transparent focus:ring-0" value="1">

                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="increaseQuantity('chosenQuantity3')">+</button>
                    </div>

                    <button type="submit" dir="rtl" class="my-6 font-bold text-md w-[90%] mx-auto lg:w-[55%] bg-slate-50 py-3 border border-black rounded-3xl hover:text-white hover:bg-black transition ease-in-out duration-500">أضف الى السلة</button>
                    
                </form>
                
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


<script>
    function decreaseQuantity(id) {
        var quantityInput = document.getElementById(id);
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
            updatePrice();
        }
    }

    function increaseQuantity(id) {
        var quantityInput = document.getElementById(id);
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
        updatePrice();
    }

    function updatePrice() {
        var quantityInput = document.getElementById('chosenQuantity3');
        var quantity = parseInt(quantityInput.value);
        var pricePerUnit = {{ $topup->price }};
        var totalPrice = (quantity * pricePerUnit).toFixed(2);
        document.getElementById('price').textContent = totalPrice + ' درهم';
        document.getElementById('total_price').value = totalPrice;
    }

</script>
@endsection