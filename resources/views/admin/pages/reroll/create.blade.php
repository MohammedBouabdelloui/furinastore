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
      <li>
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('dashboard.reroll.create') }}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-blue-700">Add</a>
        </div>
      </li>
    </ol>
</nav>


<style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

    .active\:bg-gray-50:active {
        --tw-bg-opacity:1;
        background-color: rgba(249,250,251,var(--tw-bg-opacity));
    }
</style>


<form dir="rtl" action="{{ route('dashboard.reroll.store') }}" method="POST" class="max-w-[90%] mx-auto my-8 bg-white rounded-2xl p-8 font-cairo" enctype="multipart/form-data">

    @csrf

    <h1 class="text-3xl font-bold text-gray-900 mb-6">أضف منتوجا من نوع حسابات الريرول</h1>

    <div class="mb-6">
      <label for="title" class="block mb-3 text-sm font-medium text-gray-500 ">عنوان المنتوج</label>
      <input type="text" id="title" name="title" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none focus:ring-0" placeholder="فورينا + سلاحها الخاص" required />
    </div>

    <div class="mb-6">
      <label for="price" class="block mb-3 text-sm font-medium text-gray-500 ">ثمن المنتوج</label>

      <input type="text" 
       min="0" 
       id="price" 
       name="price" 
       class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none focus:ring-0" 
       placeholder="800 د.م" 
       required 
       pattern="[0-9]+(\.[0-9]+)?" 
       title="Please enter a valid number" >

    </div>

    <div class="mb-6">
      <label for="account_level" class="block mb-3 text-sm font-medium text-gray-500 ">مستوى الحساب</label>
      <input type="number" min="0" id="account_level" name="account_level" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none focus:ring-0" placeholder="60" required />
    </div>

    <label for="price" class="block mb-3 text-sm font-medium text-gray-500 ">شرح المنتوج</label>

    <div class="w-full mx-auto rounded-xl bg-white shadow-lg p-5 text-black mb-6" x-data="app()" x-init="init($refs.wysiwyg)">
        <textarea  id="editor" rows="15"  name="description" class="w-full bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 outline-none focus:ring-0"></textarea>
    </div>

    <div class="mb-6">
        <label for="platform" class="block mb-3 text-sm font-medium text-gray-500">منصة الحساب</label>
        <select id="platform" name="platform" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none focus:ring-0" required>
          <option value="" disabled selected>اختر منصة الحساب</option>
          <option value="iOS">iOS</option>
          <option value="Android">Android</option>
          <option value="PC">PC</option>
          <option value="PS4/5">PS4/5</option>
          <option value="iOS, Android, PC, PS4/5">جميع المنصات</option>
        </select>      
    </div>

    <div class="mb-6">
        <label for="server" class="block mb-3 text-sm font-medium text-gray-500">اختر الخادم</label>
        <select id="server" name="server" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none focus:ring-0" required>
          <option value="" disabled selected>اختر خادمًا</option>
          <option value="اوروبا">اوروبا </option>
          <option value="أمريكا" >أمريكا</option>
          <option value="أسيا">أسيا</option>
          <option value="الكل">جميع السيرفرات</option>
        </select>
    </div>

    <div class="mb-6">
        <label for="source" class="block mb-3 text-sm font-medium text-gray-500 ">رابط المصدر</label>
        <input type="url" min="0" id="source" name="source" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none focus:ring-0" placeholder="60" required />
    </div>

    <div class="mb-6">
        <label for="reroll_picture" class="block mb-3 text-sm font-medium text-gray-500 ">صورة المنتوج</label>
        <input type="file" id="reroll_picture" name="picture" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none  focus:border-transparent focus:ring-0" placeholder="120" required />
    </div> 

    <div dir="rtl" class="text-sm rounded-lg border-2 border-red-300 bg-red-50 p-4 my-2">
        أتمنى مراجعة كل المعلومات قبل ارسالها, أي خطأ قد يؤثر على تقييم الشخص المسؤول على ادخال المعلومات.
    </div>

    <button type="submit" class="w-full md:w-56 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center">اتمام العملية</button>

  
</form>

@endsection