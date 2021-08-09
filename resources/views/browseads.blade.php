<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
    @include('components.head')
    <body class="bg-gradient-to-r from-indigo-700 to-pink-700 dark:from-black dark:to-black" onload="checkDark()">
        <div class="w-full min-h-screen bg-white bg-opacity-20 backdrop-filter backdrop-blur-md">
            <div class="border-b border-white w-full"> 
                @include('components.nav')
            </div> 
            @include('components.filter')

            @if(count($ads) > 0)
                <div class="px-8 bg-cover w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 justify-center">
                    @foreach($ads as $ad)
                        <div class="">
                            <div class="px-1 flex flex-row space-y-2 justify-center h-full max-h-80 lg:max-h-72 py-3 bg-black dark:bg-opacity-50 bg-opacity-30 rounded-lg space-x-3">
                                <div class="flex flex-col space-y-2 w-auto justify-center items-center">
                                    <img class="rounded-lg" src="{{url('/images/exRaidIcon.png')}}" />
                                    <div class="opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-3/4">
                                        <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-white">contact</p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between w-3/4">
                                    <p class="w-full text-xl font-semibold text-white">{!! $ad->title !!}</p>
                                    <p class="w-full text-sm tracking-wide leading-tight text-white">{{$ad->description}}</p>
                                    <div class="flex flex-row items-end mt-auto pt-3 gap-1 align-bottom justify-self-end">
                                        <p class="text-sm font-medium text-white leading-normal">tags:</p>
                                        
                                        @foreach($ad->ad_tags as $tag)
                                        <div class="opacity-95 border rounded @if($tag === 'healer') border-green-400 text-green-400 @elseif($tag === 'tank') border-blue-400 text-blue-400 @elseif($tag === 'dps') border-red-400 text-red-400 @elseif($tag === 'casual' || $tag === 'midcore' || $tag === 'hardcore') border-yellow-400 text-yellow-400 @else border-white text-white @endif hover:bg-white hover:bg-opacity-20 w-auto px-1">
                                            <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center">{{$tag}}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                    <p class="w-full text-sm tracking-wide leading-tight text-white pt-1">Posted on: {{$ad->ad_posted}}</p>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </body>
</html>
