@extends('layouts.app')

@section('content')

    
    <!--  HERO   -->

    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pd-10 pb-16 text-center">Welcome to my blog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-4 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>
    
    <!--how to be an expert -->

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
              <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/670" alt="dark image">  
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

    <!--blog categories-->
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl ">Blog Categories</h2>
        <div class="container mx-auto sm:grid grid-cols-4 ">
            <div class="font-bold text-3xl py-2">Ux Design Thinking </div>
            <div class="font-bold text-3xl py-2">Programming Language </div>
            <div class="font-bold text-3xl py-2">Graphic Design </div>
            <div class="font-bold text-3xl py-2">Front-End Development</div>
        </div>
    </div>

    <!--Recent Posts -->
    <div class="containeer mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class=" leading-6 px-10">
            PHP is a general-purpose scripting language geared towards web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
            PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or a Common Gateway Interface.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5   mx-auto" >
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                

                <ul>
                    <li class="bg-yellow-100 p-2 text-yellow-700 rounded inline-block  my-1 md:my-2 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300 "><a href="/">php</a></li>
                    <li class="bg-yellow-100 p-2 text-yellow-700 rounded inline-block  my-1 md:my-2 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-100 p-2 text-yellow-700 rounded inline-block  my-1 md:my-2 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Language</a></li>
                    <li class="bg-yellow-100 p-2 text-yellow-700 rounded inline-block  my-1 md:my-2 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Backend</a></li>
                </ul>

                <h3 class="text-l py-10 leading-6">
                    PHP is a general-purpose scripting language geared towards web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
                </h3> 
                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More </a>
            </div>   
        </div>   

       <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/242/960/670" alt="">  

       </div>
    </div>

@endsection 
