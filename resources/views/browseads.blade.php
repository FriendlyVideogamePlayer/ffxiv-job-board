<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    <body class="bg-gradient-to-r from-indigo-500 via-pink-500 to-yellow-500">
        <div class="w-full min-h-screen bg-white bg-opacity-20 backdrop-filter backdrop-blur-md">
            <div class="border-b-2 border-white w-full"> 
                @include('components.nav')
            </div> 
            @include('components.filter')

            @if(count($ads) > 0)
                <div class="px-8 bg-cover min-h-screen w-full grid grid-cols-3 gap-2 justify-center items-center">
                    @foreach($ads as $ad)
                        <div class="mx-auto">
                            <div class="px-1 flex flex-row space-y-2 justify-center h-full py-4 border-2 border-white rounded-xl space-x-3">
                                <div class="flex flex-col space-y-2 w-auto">
                                    <img class="rounded-lg" src="{{url('/images/exRaidIcon.png')}}" />
                                    <div class="opacity-95 border rounded-lg border-white px-4 hover:bg-white hover:bg-opacity-20">
                                        <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-white py-2">contact</p>
                                    </div>
                                </div>
                                <div class="w-3/4">
                                    <p class="w-full text-xl font-semibold text-white">{{$ad->title}}</p>
                                    <p class="w-full text-sm tracking-wide leading-tight text-white">{{$ad->description}}</p>
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
