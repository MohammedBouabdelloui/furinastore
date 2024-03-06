@extends('admin.layout.dash')

@section('content')


<div class="max-w-[95%] overflow-hidden rounded-lg border border-gray-200 shadow-md mx-auto">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">الزبون</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">عدد المنتجات</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">التمن الكلي</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">التفاصيل</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      @foreach ($orders as $order )


        <tr class="hover:bg-gray-50">
          <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            <div class="relative h-10 w-10">
              <img
                class="h-full w-full rounded-full object-cover object-center"
                src="{{ $order->user->profile_picture }}"
                alt=""
              />
              <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
            </div>
            <div class="text-sm">
              <div class="font-medium text-gray-700">{{ $order->user->first_name }}</div>
              <div class="text-gray-400">{{ $order->user->email }}</div>
            </div>
          </th>
          <td class="px-6 py-4">
            <span
              class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
            >
               منتوجات {{ $order->productOrders->count() }}

              </span>
          </td>

          <td class="px-6 py-4">
              <span class="text-red-600"> 
                {{ $order->productOrders->sum('price') }}  د.م 
              </span>
          </td>

          <td class="px-6 py-4"><a class="text-blue-600" href="{{ route('dashboard.order.show' , $order) }}">
            اضغط هنا
        </a>
      </td>
        </tr>

        @endforeach
      </tbody>
    </table>
      
</div>
@endsection