@extends('layouts.app')

@section('content')
    <div class="container m-auto text-center pt-15 pb-5 ">
            <h1 class="text-6xl font-bold">All Posts</h1>
    </div>

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
        <div class="flex">
            <img  class="object-cover" src="https://picsum.photos/id/343/960/670" alt="">  
        </div>
        
        <div>
                <h2 class="text-gray-700 font-bold text-4xl py-5 md:pb-4 md:py-0"> How to create a blog with laravel </h2>
            <div>
                
                By: <span class="text-gray-500 italic " >Ibrahim Mardi</span>

                <p class="text-l text-gray-700 py-8 leading-8">
                    The PHP language evolved without a written formal specification or standard until 2014, with the original implementation acting as the de facto standard that other implementations aimed to follow. Since 2014, work has gone on to create a formal PHP specification.
                    W3Techs reports that as of January 2023, "PHP is used by 77.8% of all the websites whose server-side programming language we know."It also reports that only 8% of PHP users use the currently supported 8.x versions. Most use unsupported PHP 7, more specifically PHP 7.4, while 23% use PHP 5, which is not supported with security fixes and is known to have serious security vulnerabilities. This does not necessarily indicate that these websites are vulnerable, though, since Linux distributions such as Debian provide security patches for unsupported versions of PHP.       
                </p>
                
                <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start  ">Read More</a>
                
            </div>
        </div>  
    </div>

    

        
    

@endsection