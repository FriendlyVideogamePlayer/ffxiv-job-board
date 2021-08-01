<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    <body class="bg-gradient-to-r from-indigo-500 via-pink-500 to-yellow-500">
        <div class="w-full min-h-screen bg-white bg-opacity-20 backdrop-filter backdrop-blur-md">
            <div class="border-b-2 border-white w-full"> 
                @include('components.nav')
            </div> 
            <div class="px-8 bg-cover min-h-screen w-full grid grid-cols-3 gap-2 justify-center items-center">
                @include('components.filter')

                <div class="mx-auto">
                    <div class=" px-1 flex flex-row space-y-2 justify-center h-full py-4 border-2 border-white rounded-xl space-x-3">
                        <div class="flex flex-col space-y-2 w-auto">
                            <img class="rounded-lg" src="{{url('/images/exRaidIcon.png')}}" />
                            <div class="opacity-95 border rounded-lg border-white px-4 hover:bg-white hover:bg-opacity-20">
                                <p class="cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-white py-2">contact</p>
                            </div>
                        </div>
                        <div class="w-3/4">
                            <p class="w-full text-xl font-semibold text-white">lf 1x healers 2x tank 3x dps</p>
                            <p class="w-full text-sm tracking-wide leading-tight text-white">we are a really cool group and i need to make this example text quite long so i will continue to type. we are wanting to kill tea and you need to be the best player in the world in order to join us because we are also the best players in the world. please contact me so we can all be really good together.</p>
                        </div>
                    </div>
                </div>



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
