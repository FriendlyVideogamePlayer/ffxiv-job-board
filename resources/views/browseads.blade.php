<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    <body class="bg-gradient-to-r from-indigo-700 to-pink-700">
        <div class="w-full min-h-screen bg-white bg-opacity-20 backdrop-filter backdrop-blur-md">
            <div class="border-b border-white w-full"> 
                @include('components.nav')
            </div> 
            @include('components.filter')

            @if(count($ads) > 0)
                <div class="px-8 bg-cover min-h-screen w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 justify-center">
                    @foreach($ads as $ad)
                        <div class="">
                            <div class="px-1 flex flex-row space-y-2 justify-center h-full max-h-72 py-3 bg-black bg-opacity-30 rounded-lg space-x-3">
                                <div class="flex flex-col space-y-2 w-auto justify-center items-center">
                                    <img class="rounded-lg" src="{{url('/images/exRaidIcon.png')}}" />
                                    <div class="opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-3/4">
                                        <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-white">contact</p>
                                    </div>
                                </div>
                                <div class="w-3/4">
                                    <p class="w-full text-xl font-semibold text-white">{!! $ad->title !!}</p>
                                    <p class="w-full text-sm tracking-wide leading-tight text-white">{{$ad->description}}</p>
                                    <div class="flex flex-row items-center mt-2 gap-1 align-bottom">
                                        <p class="text-sm font-medium text-white leading-normal">tags:</p>
                                        <div class="opacity-95 border rounded border-green-400 hover:bg-white hover:bg-opacity-20 w-auto px-1">
                                            <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-green-400">healer</p>
                                        </div>
                                        <div class="opacity-95 border rounded border-blue-400 hover:bg-white hover:bg-opacity-20 w-auto px-1">
                                            <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-blue-400">tank</p>
                                        </div>
                                        <div class="opacity-95 border rounded border-red-400 hover:bg-white hover:bg-opacity-20 w-auto px-1">
                                            <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-red-400">dps</p>
                                        </div>
                                        <div class="opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-auto px-1">
                                            <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-white">static</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <script type="text/javascript">
            function navbarMobile() {
                var nav = document.getElementById("navbarMobile");
                if (nav.className === "w-full hidden flex-grow lg:flex lg:items-center lg:w-auto") {
                    nav.className = "w-full block flex-grow lg:flex lg:items-center lg:w-auto";
                } else {
                    nav.className = "w-full hidden flex-grow lg:flex lg:items-center lg:w-auto";
                }
            }
        </script>
    </body>
</html>
