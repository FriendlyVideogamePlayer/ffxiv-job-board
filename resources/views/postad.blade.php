<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    <body class="bg-gradient-to-r from-indigo-500 via-pink-500 to-yellow-500">
        <div class="w-full min-h-screen bg-white bg-opacity-20 backdrop-filter backdrop-blur-md">
            <div class="border-b-2 border-white w-full"> 
                @include('components.nav')
            </div> 
            <div class="container mx-auto bg-cover min-h-screen w-full flex justify-center items-center">
                <form class="flex flex-col gap-y-2 justify-center items-center bg-black bg-opacity-30 rounded-lg w-2/4 h-96 text-white" method="post" action="">
                    @csrf
                    <div class="flex flex-row gap-x-3">
                        <label>title: </label>
                        <div class="opacity-95 border rounded border-white flex items-center w-40">
                            <input type="text" name="title" class="bg-transparent cursor-text inset-0 text-sm font-medium leading-normal text-center text-white w-40">
                        </div>
                        @if ($errors->has('title'))
                        <div class="text-red-400">
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                    </div>

                    <div class="flex flex-row gap-x-3">
                        <label>description: </label>
                        <div class="opacity-95 border rounded border-white flex items-center w-40">
                            <input type="text" name="description" class="bg-transparent cursor-text inset-0 text-sm font-medium leading-normal text-center text-white w-40">
                        </div>
                        @if ($errors->has('description'))
                        <div class="text-red-400">
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                    </div>

                    <div class="flex flex-row gap-x-3">
                        <label>discord username: </label>
                        <div class="opacity-95 border rounded border-white flex items-center w-40">
                            <input type="text" name="discord_contact" class="bg-transparent cursor-text inset-0 text-sm font-medium leading-normal text-center text-white w-40">
                        </div>
                        @if ($errors->has('discord_contact'))
                        <div class="text-red-400">
                            {{ $errors->first('discord_contact') }}
                        </div>
                        @endif
                    </div>

                    <div class="flex flex-row gap-x-3">
                        <label>ad type: </label>
                        <div class="opacity-95 border rounded border-white flex items-center w-40">
                            <select name="ad_type" class="bg-transparent cursor-pointer inset-0 text-sm font-medium leading-normal text-center text-white w-40">
                                <option value="static">static</option>
                                <option value="fc">fc</option>
                            </select>
                        </div>
                        @if ($errors->has('ad_type'))
                        <div class="text-red-400">
                            {{ $errors->first('ad_type') }}
                        </div>
                        @endif
                    </div>

                    <div class="opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 flex items-center">
                        <input type="submit" name="send" value="Submit" class="bg-transparent cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-white">
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
        </script>
    </body>
</html>
