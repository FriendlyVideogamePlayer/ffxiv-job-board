<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-3">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <span class="font-semibold text-xl tracking-tight">ffxiv job board</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white" onclick="navbarMobile()">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div id="navbarMobile" class="w-full hidden flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="{{ route('browse') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white border p-1 border-transparent rounded-lg hover:border-white mr-4">
                browse all ads
            </a>
            <a href="{{ route('post') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white border p-1 border-transparent rounded-lg hover:border-white mr-4">
                post an ad
            </a>
        </div>
    </div>
</nav>