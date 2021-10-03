@extends('layouts.layout')
@section('title', 'Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endpush
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="display_wrapper">
                    <div class="slider-container">
                        <div class="left-slide">
                            <div style="background-color: #fde">
                                <h1>Pink Cherrish</h1>
                                <p>to evolve into care</p>
                            </div>
                            <div style="background-color: rgb(254,160,0)">
                                <h1>Yellow Luck</h1>
                                <p>Shinning the clouds</p>
                            </div>
                            <div style="background-color: rgb(231, 58, 95)">
                                <h1>Redness Lust</h1>
                                <p>in the wilderness</p>
                            </div>
                            <div style="background-color: rgb(176, 136, 240)">
                                <h1>Lavanda Love</h1>
                                <p>in the sunset</p>
                            </div>
                        </div>
                        <div class="right-slide">
                            <div style="background-image: url('https://images.unsplash.com/photo-1528756514091-dee5ecaa3278?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8Zmxvd2Vyc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1296&q=60');"></div>
                            <div style="background-image: url('https://images.unsplash.com/photo-1519378058457-4c29a0a2efac?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8Zmxvd2Vyc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1296&q=60');"></div>
                            <div style="background-image: url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8Zmxvd2Vyc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1296&q=60');"></div>
                            <div style="background-image: url('https://images.unsplash.com/photo-1462275646964-a0e3386b89fa?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80');"></div>
                        </div>
                        <div class="action-buttons">
                            <button class="down-button">
                                <i class="fas fa-arrow-down"></i>
                            </button>
                            <button class="up-button">
                                <i class="fas fa-arrow-up"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12"></div>
        </div>
        
    </div>
@endsection
@push('scripts')
    <script>
        const sliderContainer = document.querySelector('.slider-container')
const slideRight = document.querySelector('.right-slide')
const slideLeft = document.querySelector('.left-slide')
const upButton = document.querySelector('.up-button')
const downButton = document.querySelector('.down-button')
const slidesLength = slideRight.querySelectorAll('div').length

let activeSlideIndex = 0

slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`

upButton.addEventListener('click', () => changeSlide('up'))
downButton.addEventListener('click', () => changeSlide('down'))

const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight
    if(direction === 'up') {
        activeSlideIndex++
        if(activeSlideIndex > slidesLength - 1) {
            activeSlideIndex = 0
        }
    } else if(direction === 'down') {
        activeSlideIndex--
        if(activeSlideIndex < 0) {
            activeSlideIndex = slidesLength - 1
        }
    }

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`
}

    </script>
@endpush