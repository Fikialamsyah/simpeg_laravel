@extends('layouts.app')

<!-- set title -->
@section('title', 'Home')

@section('content')

    <!-- hero -->
<section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #141432">
    <div style="font-family: 'Poppins', sans-serif">
        <!-- Hero-header-2-3 -->
        <div>
            <div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">

                    <h1 class="lg:block hidden title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight" style="color: #cbcbd2; line-height: 1.2">
                        Selamat Datang di <br/>
                        <p style="color: orange">Sistem Informasi Kepegawaian</p>
                    </h1>

                    <h1 class="lg:hidden block title-font sm:text-5xl lg:text-6xl text-4xl mb-8 lg::px-10 md:px-10 sm:px-6 px-0 font-semibold sm:leading-tight" style="color: #cbcbd2; line-height: 1.2">
                        Selamat Datang di <br/>
                        <p style="color: orange">Sistem Informasi Kepegawaian</p>
                    </h1>

                    <div class="inline-block items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 sm:space-x-3 space-x-0">

                        <button class="inline-flex font-semibold text-white text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none box-shadow-header-2-3" style="background: blue; font-family: 'Poppins', sans-serif;">
                            <a href="">Masuk</a>
                        </button>
                        <button class="inline-flex font-semibold text-black text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none box-shadow-header-2-3" style="background: #fff; font-family: 'Poppins', sans-serif;">
                            <a href="">Daftar</a>
                        </button>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center justify-center flex pr-0">
                    <img id="hero-header-2-3" src="{{asset('/hero-1.svg')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

@push('after-style')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        
        .list-footer-2-3 li a {
            color: #707092;
        }
        
        .list-footer-2-3 li a:hover {
            color: #ffffff;
            cursor: pointer;
        }

        .border-color-footer-2-3 {
            color: #707092;
        }

        .footer-link-footer-2-3:hover {
            color: #ffffff;
            cursor: pointer;
        }

        .social-media-c-footer-2-3:hover circle,
        
        .social-media-p-footer-2-3:hover path {
            fill: #ffffff;
            cursor: pointer;
        }
    </style>
@endpush

@endsection