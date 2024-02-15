<aside class="h-[100vh] min-w-[28vw] md:min-w-[20vw] md:w-[20vw] bg-[#000]">
    <ul class="flex flex-col my-[50px] mx-8 gap-y-4">
        <li class="mb-8">
            <a href="">
            </a>
        </li>

        <li>
            <h1
                class="text-xl font-[500] text-white bg-blue-100/20 rounded py-[10px] px-8 flex items-center gap-x-4 ">
                <a href="{{ route('admin.index') }}" class="hidden lg:block">Dashboard</a>
            </h1>
        </li>

        <li>
            <h1
                class="text-xl font-[500] text-white bg-blue-100/10 rounded py-[10px] px-8 flex items-center gap-x-4">
                <a href="{{ route('admin.user') }}" class="hidden lg:block">Users</a>
            </h1>
        </li>

        <li>
            <h1
                class="text-xl font-[500] text-white bg-blue-100/10 rounded py-[10px] px-8 flex items-center gap-x-4">
                <a href="{{ route('admin.chauffeur') }}" class="hidden lg:block">chauffeur</a>
            </h1>
        </li>

        <li>
            <h1
                class="text-xl font-[500] text-white bg-blue-100/10 rounded py-[10px] px-8 flex items-center gap-x-4">
                <a href="{{ route('admin.passager') }}" class="hidden lg:block">Passager</a>
            </h1>
        </li>


        <li class="mt-8">
            <h1
                class="text-xl font-[500] text-white bg-blue-100/10 rounded py-[10px] px-8 flex items-center gap-x-4">
                <a href="{{ route('profiles.show', auth()->user()->id) }}" class="hidden lg:block">Settings</a>

            </h1>
        </li>

        <li>
            <h1
                class="text-xl font-[500] text-red-600 bg-red-100/10 border-2 border-red-500 rounded py-[10px] px-8 flex items-center gap-x-4">

                <a href="{{ route('login.logout') }}" class="hidden lg:block">Log out</a>
            </h1>
        </li>


    </ul>
</aside>