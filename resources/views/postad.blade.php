<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    <body class="bg-gradient-to-r from-indigo-500 via-pink-500 to-yellow-500">
        <div class="w-full min-h-screen bg-white bg-opacity-20 backdrop-filter backdrop-blur-md">
            <div class="border-b-2 border-white w-full"> 
                @include('components.nav')
            </div> 
            <div class="container mx-auto bg-cover min-h-screen w-full flex justify-center items-center">

                

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
