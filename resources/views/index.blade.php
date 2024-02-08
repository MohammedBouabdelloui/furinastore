@extends('layouts.app')
 
@section('title', 'أفضل متجر عربي للعبة قنشن')
 
@section('content')

    <div class="mx-auto max-w-[1280px]">
    @if(session('success'))
    <div class="bg-green-200 border-l-4 border-green-500 text-green-700 p-4 mt-4 relative">
        <p class="pr-6">{{ session('success') }}</p>
        <button class="absolute top-0 right-0 mt-1 mr-2 text-sm text-green-700 cursor-pointer" onclick="this.parentElement.style.display='none'">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 0 0-1.414 0L10 8.586 6.707 5.293a1 1 0 1 0-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 1 0 1.414 1.414L10 11.414l3.293 3.293a1 1 0 0 0 1.414-1.414L11.414 10l3.293-3.293a1 1 0 0 0 0-1.414z"/>
            </svg>
        </button>
        </div>
    @endif


    </div>

@endsection