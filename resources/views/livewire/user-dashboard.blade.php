<div>
    {{-- Do your work, then step back. --}}

    <div class="w-screen h-screen bg-gray-300">

        <div x-data="{ open: false }" class="fixed top-0 left-0 z-40 w-full h-20 p-5 bg-white indent-0 text-start ">

            <div class="flex flex-row place-content-between">
                <div>
                    <h4 class="mt-2 text-xl font-bold text-black">BCD-LEAVE MANAGEMENT SYSTEM</h4>
                </div>
                <div><span>user@gmail.com</span> <i x-on:click="open=!open"
                        class="mt-6 fa-2xl fa-solid fa-circle-chevron-down"></i></div>
            </div>

            <div x-show="open" class="absolute z-40 text-white list-none top-20 right-5">
                <a href="/login">
                    <li class="w-32 p-2 bg-gray-800 hover:bg-gray-900"><i class="ml-3 fa-solid fa-power-off"></i> <span
                            class="ml-2">Logout</span>
                    </li>
                </a>
            </div>
        </div>
        {{-- Sidebar --}}
        <div class="fixed w-48 h-screen bg-white">
            <div class="flex flex-col items-baseline justify-start mt-20 list-none ">
                <a href="" class="w-full">
                    <li class="w-full p-4 text-sm text-white bg-gray-800 border-b-2 h-14 hover:bg-gray-900"><i
                            class="fa-solid fa-user-lock"></i> <span class="ml-2">ADMIN</span>
                    </li>
                </a>
                <a href="" class="w-full">
                    <li class="w-full p-4 text-sm text-white bg-gray-800 border-b-2 h-14 hover:bg-gray-900"><i
                            class="fa-brands fa-telegram"></i> <span class="ml-2">LEAVE APPLICATION</span>

                    </li>
                </a>
                <a href="" class="w-full">
                    <li class="w-full p-4 text-sm text-white bg-gray-800 border-b-2 h-14 hover:bg-gray-900"><i
                            class="fa-regular fa-folder-open"></i> <span class="ml-2">DSO CREDITS</span>
                    </li>
                </a>
                <a href="/login" class="w-full">
                    <li class="w-full p-4 text-sm text-white bg-gray-800 h-14 hover:bg-gray-900"><i
                            class="fa-solid fa-power-off"></i> <span class="ml-2">LOGOUT</span> </li>
                            <!-- removed s-->
                </a>
            </div>

        </div>
    </div>


</div>
