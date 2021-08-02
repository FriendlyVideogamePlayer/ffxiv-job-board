<div class="pb-4 flex justify-center items-center content-center">
    <div class="py-4 w-5/6 border-b-2 border-white ">

        <form class="" method="post" action="">
            @csrf
            <div class="flex flex-row gap-x-2 justify-center items-center content-center">
                <div class="opacity-95 border rounded border-white flex items-center">
                    <select name="ad_type" class="bg-transparent cursor-pointer inset-0 text-sm font-medium leading-normal text-center text-white">
                        <option value="all">all recruitments</option>
                        <option value="static">static recruitment</option>
                        <option value="fc">fc recruitment</option>
                    </select>
                </div>

                <div class="opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 flex items-center">
                    <input type="submit" name="send" value="search" class="bg-transparent cursor-pointer m-auto inset-0 text-sm font-medium leading-normal text-center text-white">
                </div>
            </div>
        </form>


    </div>
</div>