@extends('frontend.layouts.app')
@section('content')
    <div class="main grid md:grid-cols-2 md:gap-6 mt-6">
        <div class="rounded w-full h-30">
            <img src="https://i.pinimg.com/564x/50/96/a0/5096a0b9562ddd7555e48118b6100075.jpg" class="object-fill rounded" alt="tukse">
        </div>
        <div class=" md:justify-center md:content-center">

            @auth
                <div class="inline-block border border-gray-300 hover:bg-gray-600  hover:scale-95 rounded shadow mt-3 h-20 w-full dark:hover:bg-green-500 duration-300 ">
                    <a href="{{url('first-yr-enroll')}}" class="text-base hover:text-gray-200  text-gray-900 dark:text-gray-300 flex justify-center align-middle mt-6 ">ပထမနှစ်ကျောင်းအပ်ရန်</a>
                </div>
                <div class="border border-gray-300  hover:bg-gray-600 hover:scale-95 rounded shadow mt-3 h-20 w-full dark:hover:bg-green-500 duration-300">
                    <a href="{{url('sec-to-final-yr-enroll')}}" class="text-base hover:text-gray-200 text-gray-900 dark:text-gray-300 flex justify-center align-middle mt-6"> Second year မှစကျောင်းအပ်ရန်</a>
                </div>
            @else
                <div class="inline-block border border-gray-300 hover:bg-gray-600  hover:scale-95 rounded shadow mt-3 h-20 w-full dark:hover:bg-green-500 duration-300 ">
                    <a href="{{ route('login') }}" class="text-base hover:text-gray-200  text-gray-900 dark:text-gray-300 flex justify-center align-middle mt-6 ">Login</a>
                </div>
                <div class="border border-gray-300  hover:bg-gray-600 hover:scale-95 rounded shadow mt-3 h-20 w-full dark:hover:bg-green-500 duration-300">
                    <a href="{{ route('register') }}" class="text-base hover:text-gray-200 text-gray-900 dark:text-gray-300 flex justify-center align-middle mt-6"> Register</a>
                </div>
            @endauth

        </div>
    </div>

    <section class="text-gray-900 bg-gray-100 dark:text-gray-400 dark:bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 dark:text-white">Contact Us</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
            </div>
        </div>
    </section>

@endsection

