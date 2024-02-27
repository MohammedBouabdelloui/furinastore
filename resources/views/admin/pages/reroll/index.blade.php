@extends('admin.layout.dash')
@section('content')

<nav class="ml-12 my-4 flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-700">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
          </svg>
          Dashboard
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('dashboard.reroll.index') }}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-blue-700">Reroll</a>
        </div>
      </li>
    </ol>
</nav>


<div class="max-w-[95%] flex justify-between items-enter mx-auto mt-6 mb-4 font-cairo">
  <input type="search" name="search-reroll" id="" class="rounded-md w-80 py-3 px-10 outline-none border-transparent focus:border-transparent focus:ring-0 " placeholder="ابحث">
  <div>

    <a href="{{ route('dashboard.reroll.create') }}" class="px-10 py-2 text-white bg-blue-500 rounded-md">أضف عرضا أخر</a>
    {{-- <a href="{{ route('reroll.soft_delete') }}" class="bg-blue-500  text-white font-bold py-2 px-4 rounded">
      عرض البيانات المحذوفة
    </a> --}}
  </div>
</div>

  
<div class="max-w-[95%] overflow-hidden rounded-lg border border-gray-200 shadow-md mx-auto font-cairo">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">عنوان العرض</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">الوصف</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">الثمن</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">تم شراءه</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">التوفر</th>

          <th scope="col" class="px-6 py-4 font-medium text-gray-900">مستوى الحساب</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">المنصة</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">المصدر</th>

          <th scope="col" class="px-6 py-4 font-medium text-gray-900">اعرض المنتوج</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">العمليات</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @foreach ($rerolls as $reroll)
        <tr class="hover:bg-gray-50">
          <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            <div class="relative h-10 w-10">
              <img
                class="h-full w-full rounded-sm object-cover object-center"
                src="{{ asset('storage/' . $reroll->picture) }}"
                alt=""
              />
            </div>
            <div dir="rtl" class="text-sm">
              <div class="font-medium text-gray-700">
              
                <?php
                    $title = $reroll->title;
                    $words = explode(' ', $title);
                    $first_10_words = implode(' ', array_slice($words, 0, 5));
                    echo $first_10_words . '...';
                ?>
                
              </div>

              <div class="text-xs text-gray-400">{{ $reroll->platform }}</div>
              
            </div>
          </th>
          
              <td class="w-60 px-6 py-4">
                <?php
                    $description = $reroll->description;
                    $words = explode(' ', $description);
                    $first_10_words = implode(' ', array_slice($words, 0, 10));
                    echo $first_10_words . '...';
                ?>
            </td>

            <td class="px-6 py-4">
                <span dir="rtl"
                class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
                >
                {{ $reroll->price }}د.م
                </span>
            </td>

            <td class="px-6 py-4">
                <span dir="rtl"
                class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
                >
                {{ $reroll->number_sales }}
                </span>
            </td>

            <td class="px-6 py-4">
                <span
                class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
                >
                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                @if ($reroll->is_available)
                  متوفر للبيع
                @else
                  غير متوفر للبيع 

                @endif
  
                </span>
            </td>

            <td class="px-6 py-4">
                <span dir="rtl"
                class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
                >
                {{ $reroll->account_level }}
                </span>
            </td>

            <td class="px-6 py-4">
                <span dir="rtl"
                class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
                >
                {{ $reroll->server }}
                </span>
            </td>

            <td class="px-6 py-4">
                <a href="{{ $reroll->source }}" target="_blank"
                  class="text-blue-600 cursor-pointer"
                  >
                  اضغط هنا
                  </a>
            </td>

            <td class="px-6 py-4">
                <a href="" target="_blank"
                class="text-blue-600 cursor-pointer"
                >
                اضغط هنا
                </a>
            </td>

            <td class="px-6 py-4">
                <div class="flex justify-end gap-4">
                  <form action="{{ route('reroll.soft-delete', $reroll->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button x-data="{ tooltip: 'delete' }" type="submit">
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
                <a x-data="{ tooltip: 'Edite' }" href="{{ route('dashboard.reroll.edit', $reroll) }}">
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
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                    />
                    </svg>
                </a>

                <a x-data="{ tooltip: 'Add' }" href="{{ route('dashboard.rerollsold.new', $reroll) }}">
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
                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                  />
                  </svg>
              </a>
              
                </div>
            </td>
            
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="mt-4">
      {{ $rerolls->links() }} 
    </div>
</div>

@endsection