@extends('admin.layout.dash')

@section('content')

        <div class="container mx-auto bg-white shadow-md overflow-hispanen rounded-lg" >
            <div class="px-4 py-5 sm:px-6 flex justify-between">
              <div>
                <h3 class="text-lg font-semibold leading-6 text-gray-900">Order Details</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Summary of the order and its details.</p>
              </div>
              <form action="{{ route('order.update', $order) }}" method="POST">
                @method('PUT')
                @csrf
                <button class="bg-green-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out focus:outline-none focus:ring focus:border-blue-300
                           {{ $order->order_status === "confirmed" ? 'bg-gray-500 cursor-not-allowed disabled' : 'hover:bg-green-600' }}"
                           {{ $order->order_status === "confirmed" ? 'disabled' : '' }}>
                    {{ $order->order_status == "confirmed" ? 'Order Confirmed' : 'Confirm Order' }}
                </button>
            </form>
            
            
            </div>
            <div class="border-t border-gray-200">

                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <span class="text-sm font-medium text-gray-500">رقم الخاص بالطلب</span>
                  <span class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $order->id }}</span>
                </div>

                
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <span class="text-sm font-medium text-gray-500">التمن الكلي</span>
                  <span class="mt-1 text-sm text-gray-900 sm:col-span-2">د.م {{ $order->productOrders->sum('price') }}</span>
                </div>
              
            </div>
        </div>

      
            
        <div class="container mx-auto my-20 shadow-lg rounded-xl p-4 bg-white relative overflow-hidden" >
           
                <div class="flex items-center border-b-2 mb-2 mx-4 py-2">
                    <img class='mx-2 w-10 h-10 object-cover rounded-full' alt='User avatar' src="{{ $order->user->profile_picture }}">

                    <div class="pl-3">
                        <div class="font-medium">
                            {{ $order->user->first_name }}
                            {{ $order->user->last_name }}
                        </div>
                        <div class="text-gray-600 text-sm">
                            {{ $order->user->email }}
                        </div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-white border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    رقم الهاتف
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    الجنس
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    تاريخ الإنشاء
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    لديه واتساب
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    انستغرام
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    فيسبوك
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    تويتر
                                </th>
                            </tr>

                            </thead>
                            <tbody>
                            <tr class="bg-gray-100 border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $order->user->id }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $order->user->phone_number }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $order->user->gender }}
                                </td>
                                
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $order->user->created_at }}
                                </td>
                           
                                <td class="px-6 py-4">
                                    @if($order->user->has_whatsapp)
                                    <span
                                      class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        نعم
                                    </span>
                                    @else
                                    <span
                                      class="inline-flex items-center gap-1 rounded-full bg-red-50 px-4 py-1 text-xs font-semibold text-red-600">
                                        لا
                                    </span>
                                    @endif
                                  </td>
                                
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $order->user->user_instagram }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $order->user->user_facebook }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $order->user->user_twiter }}
                                </td>
                            </tr>
                            
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

                                
       
        </div>
         
        
        <div class="max-w-[95%] overflow-hidden rounded-lg border border-gray-200 shadow-md mx-auto font-cairo">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">اسم العرض</th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">الوصف</th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900"> منصة الحساب</th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900"> الخادم</th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">الثمن</th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">اعرض المنتوج</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($order->productOrders as $productOrder)
                <tr class="hover:bg-gray-50">
                  <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="relative h-10 w-10">
                      <img
                        class="h-full w-full rounded-sm object-cover object-center"
                        src="{{ asset('storage/' . $productOrder->orderedItem->picture) }}"
                        alt=""
                      />
                    </div>
                    <div dir="rtl" class="text-sm">
                      <div class="font-medium text-gray-700">{{ $productOrder->orderedItem->title }}</div>
                      <div class="text-gray-400">{{ $productOrder->orderedItem->account_level }} </div>
                    </div>
                  </th>
                  
                    <td class="w-96 px-6 py-4">
                      <?php
                            $description = $productOrder->orderedItem->description;
                            $words = explode(' ', $description);
                            $first_10_words = implode(' ', array_slice($words, 0, 10));
                            echo $first_10_words . ' . . .';
                        ?>
                    </td>
        
        
                    <td class="w-96 px-6 py-4">
                      {{  $productOrder->orderedItem->platform  }}
                    </td>

                    <td class="w-96 px-6 py-4">
                      {{  $productOrder->orderedItem->server  }}
                    </td>
        
                    <td class="px-6 py-4">
                        <span dir="rtl"
                        class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
                        >
                        {{ $productOrder->orderedItem->price }}د.م
                        </span>
                    </td>
        

        
                    <td class="px-6 py-4">
                    @if ($productOrder->ordered_table_type === "App\Models\Topup")
                        
                        <a href="{{ route('topup.details', $productOrder->orderedItem->id) }}" target="_blank"
                        class="text-blue-600 cursor-pointer"
                        >
                        اضغط هنا
                        </a>
                    
                    @elseif ($productOrder->ordered_table_type === "App\Models\Advertisement")

                    
                        <a href="{{ route('advertisement.details' , $productOrder->orderedItem->id) }}" target="_blank"
                        class="text-blue-600 cursor-pointer"
                        >
                        اضغط هنا
                        </a>
                       
                    @elseif ($productOrder->ordered_table_type === "App\Models\Reroll")

                    
                        <a href="{{ route('reroll.details', $productOrder->orderedItem->id) }}" target="_blank"
                        class="text-blue-600 cursor-pointer"
                        >
                        اضغط هنا
                        </a>
                        
                    @endif
        
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="mt-4">
              {{-- {{ $advertisement->links() }}  --}}
            </div>
        </div>



                
          
@endsection