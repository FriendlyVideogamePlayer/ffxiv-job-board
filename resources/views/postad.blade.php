<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    <body class="bg-gradient-to-r from-indigo-700 to-pink-700">
        <div class="w-full min-h-screen bg-white bg-opacity-20 backdrop-filter backdrop-blur-md">
            <div class="border-b-2 border-white w-full"> 
                @include('components.nav')
            </div> 
            <div class="container mx-auto bg-cover min-h-screen w-full flex justify-center items-center">
                <form class="flex flex-col gap-y-2 justify-center items-center bg-black bg-opacity-30 rounded-lg w-5/6 sm:w-3/4 md:w-3/5 lg:w-2/4 h-96 text-white" method="post" action="">
                    @csrf
                    <h1 class="text-2xl text-white pb-2" role="heading" aria-level="1">post an ad</h1>
                    <div class="flex flex-row">
                        <div class="opacity-95 border rounded border-white flex items-center w-56">
                            <input type="text" name="title" placeholder="ad title" class="bg-transparent cursor-text inset-0 text-sm font-medium leading-normal text-center text-white w-56">
                        </div>
                        @if ($errors->has('title'))
                        <div class="text-red-400">
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                    </div>

                    <div class="flex flex-row">
                        <div class="opacity-95 border rounded border-white flex items-center w-56">
                            <input type="text" name="description" placeholder="ad description" class="bg-transparent cursor-text inset-0 text-sm font-medium leading-normal text-center text-white w-56">
                        </div>
                        @if ($errors->has('description'))
                        <div class="text-red-400">
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                    </div>

                    <div class="flex flex-row">
                        <div class="opacity-95 border rounded border-white flex items-center w-56">
                            <input type="text" name="discord_contact" placeholder="discord username" class="bg-transparent cursor-text inset-0 text-sm font-medium leading-normal text-center text-white w-56">
                        </div>
                        @if ($errors->has('discord_contact'))
                        <div class="text-red-400">
                            {{ $errors->first('discord_contact') }}
                        </div>
                        @endif
                    </div>

                    <div class="flex flex-row">
                        <div class="opacity-95 border rounded border-white flex items-center w-56">
                            <select name="ad_type" class="bg-transparent cursor-pointer inset-0 text-sm font-medium leading-normal text-center text-white w-56">
                                <option value="static_rec">static recruitment</option>
                                <option value="fc_rec">fc recruitment</option>
                            </select>
                        </div>
                        @if ($errors->has('ad_type'))
                        <div class="text-red-400">
                            {{ $errors->first('ad_type') }}
                        </div>
                        @endif
                    </div>

                    <div class="flex flex-row gap-x-2 w-56 justify-center">
                        <div class="flex opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 items-center text-white">
                            <p class="w-full text-center text-sm">healer</p>
                            <input type="checkbox" id="healer" name="tags[]" value="healer" class="absolute opacity-0 w-14 h-6 cursor-pointer" onclick="checkboxHighlight('healer')">
                        </div>

                        <div class="flex opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 items-center text-white">
                            <p class="w-full text-center text-sm">tank</p>
                            <input type="checkbox" id="tank" name="tags[]" value="tank" class="absolute opacity-0 w-14 h-6 cursor-pointer" onclick="checkboxHighlight('tank')">
                        </div>

                        <div class="flex opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 items-center text-white">
                            <p class="w-full text-center text-sm">dps</p>
                            <input type="checkbox" id="dps" name="tags[]" value="dps" class="absolute opacity-0 w-14 h-6 cursor-pointer" onclick="checkboxHighlight('dps')">
                        </div>
                    </div>

                    <div class="mt-6 opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 flex items-center">
                        <input type="submit" name="send" value="submit" class="bg-transparent cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-white">
                    </div>

                    
                </form>
            <div>
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

            function checkboxHighlight(checkbox) {
                var checkboxDiv = document.getElementById(checkbox).parentElement;
                if (checkboxDiv.className === "flex opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 items-center text-white") {
                    checkboxDiv.className = "flex opacity-95 border rounded border-green-400 hover:bg-white hover:bg-opacity-20 w-14 items-center text-green-400";
                } else {
                    checkboxDiv.className = "flex opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 items-center text-white";
                }
            }
        </script>
    </body>
</html>
