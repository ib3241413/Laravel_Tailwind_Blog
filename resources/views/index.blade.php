@extends('layouts.app')

@section('content')

    
    <!--  HERO   -->

    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pd-10 pb-16">Welcome to my blog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-4 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
              <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/670" alt="">  
        </div>

        <div class="flex flex-col items-left justify-center m-10 md:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase">How to be an expert in 2032</h2>

            <p class="font-bold text-gray-600 text-xl pt-2" >
                You can find a list of programming language here.
            </p>

            <p class="py-4 text-gray-500 text-sm leading-6">
                Get the same random image every time based on a seed, by adding t othe start of the url . You may combine any of the options above .For example to ge a specifc image that is grayscale and blurred>
            </p>
            
            <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start  ">Read More</a>

        </div>
        
    </div>


@endsection
