<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    <body class="bg-gradient-to-r from-indigo-700 to-pink-700">
        <div class="w-full min-h-screen bg-white bg-opacity-20 backdrop-filter backdrop-blur-md">    
            <div class="container mx-auto bg-cover min-h-screen w-full flex justify-center items-center">
                <div class="header-card justify-center flex font-semibold">
                    <div class="text-center">
                        <h1 class="text-5xl text-white pb-6 pt-5" role="heading" aria-level="1">ffxiv job board </h1>
                        <div class="flex flex-row gap-x-3 mb-4">
                            <a href="{{ route('post') }}" class='justify-center flex w-40 bg-gradient-to-r from-indigo-700 to-pink-700 hover:from-indigo-700 hover:to-pink-900 focus:outline-none text-white text-lg font-bold shadow-md rounded-full mx-auto p-2'>
                                <div class="flex">post an ad!</div>
                            </a>
                            <a href="{{ route('browse') }}" class='justify-center flex w-40 bg-gradient-to-r from-indigo-700 to-pink-700 hover:from-indigo-900 hover:to-pink-900 focus:outline-none text-white text-lg font-bold shadow-md rounded-full mx-auto p-2'>
                                <div class="flex">browse all ads!</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
