@extends('layouts.app')
 
@section('title', 'أفضل متجر عربي للعبة قنشن')
 
@section('content')

    <style>
        .slider-content {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slide {
            flex: 0 0 100%;
            max-width: 100%;
        }

    </style>

<div class="mx-auto my-6 max-w-[95%] xl:max-w-[1280px] overflow-hidden relative">
    <div class="slider-content" id="sliderContent">
        <div class="slide">
            <img class="w-full object-cover h-auto xl:h-[400px] rounded-lg" src="{{ asset('img/banners/banner1.jpg') }}" alt="Slide 1">
        </div>
        <div class="slide">
            <img class="w-full object-cover h-auto xl:h-[400px] rounded-lg" src="{{ asset('img/banners/banner2.jpg_large') }}" alt="Slide 2">
        </div>
        <div class="slide">
            <img class="w-full object-cover h-auto xl:h-[400px] rounded-lg" src="{{ asset('img/banners/banner3.webp') }}" alt="Slide 3">
        </div>
    </div>
    <div class="slider-buttons absolute bottom-[45%] left-0 w-full flex justify-between px-1 xl:px-3">
        <button onclick="goToSlide(currentIndex - 1)" class="px-1 py-1 bg-blue-800 text-white rounded-full text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path></svg>
        </button>
        <button onclick="goToSlide(currentIndex + 1)" class="px-1 py-1 bg-blue-800 text-white rounded-full text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
        </button>
    </div>
</div>

<script>
    let sliderContent = document.querySelector('.slider-content');
    let slides = document.querySelectorAll('.slide');

    let currentIndex = 0;
    let totalSlides = slides.length;

    function goToSlide(index) {
        if (index < 0) {
            index = totalSlides - 1;
        } else if (index >= totalSlides) {
            index = 0;
        }

        currentIndex = index;

        let offset = -currentIndex * 100;
        sliderContent.style.transform = `translateX(${offset}%)`;
    }

    setInterval(() => {
        goToSlide(currentIndex + 1);
    }, 4000); 
</script>


@endsection