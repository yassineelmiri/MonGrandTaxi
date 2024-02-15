@include('includes.head')

{{-- <body class="bg-cover bg-center" style="background-image: url('<?php echo UrlRoot; ?>/public/uploads/hero-bg.jpg');"> --}}


<!-- MAIN -->
<section class="flex items-center relative">

    <!-- Aside Bar -->
    @include('includes.dashboard')
    <!-- Dashboard -->
    <div class="w-[70vh] md:w-[80vw] h-[100vh]  py-[50px] px-8">

        <!-- Page Head -->
        <div>
            <h1 class="text-md md:text-xl lg:text-3xl font-[800] mb-8">ADMIN / Statistique</h1>
            <div class="w-full bg-[#4C4B96ff] border-2 border-blue-900 rounded py-8 px-4">
                <h1 class="text-md md:text-xl lg:text-xl font-[500]">Bonjour Mr : {{ auth()->user()->name }} <u
                        class="px-4">
                    </u></h1>
            </div>
        </div>
        <!-- Page COntent -->
        <!-- <h1 class="mt-8 font-[800] text-md md:text-xl lg:text-2xl mb-2" >Wiki Statistic </h1> -->
        <div class="mt-8  flex flex-wrap justify-between gap-3">

            <div class="w-[20%] bg-[#4A5EA3ff] rounded-full p-8 border-2 border-blue-800 text-center">
                <h1 class="font-[900] text-md md:text-2xl">
                    {{ $count }}Dhs
                </h1>
                <h1 class="font-[900] text-md md:text-2xl mt-2"><a href="/Wiki/Admin/users">Capitale</a></h1>
            </div>

            <div class="w-[20%] bg-[#4A5EA3ff] rounded-full p-8 border-2 border-blue-800 text-center">
                <h1 class="font-[900] text-md md:text-2xl">
                    {{ $count3 }}
                </h1>
                <h1 class="font-[900] text-md md:text-2xl mt-2"><a href="/Wiki/Admin/users">user</a></h1>
            </div>


            <div class="w-[20%] bg-[#4A5EA3ff] rounded-full p-8 border-2 border-blue-800 text-center">
                <h1 class="font-[900] text-md md:text-2xl">
                    {{ $count1 }}
                </h1>
                <h1 class="font-[900] text-md md:text-2xl mt-2"><a href="/Wiki/Admin/categories">Voiture</a></h1>
            </div>

            <div class="w-[20%] bg-[#4A5EA3ff] rounded-full p-8 border-2 border-blue-800 text-center">
                <h1 class="font-[900] text-md md:text-2xl">
                    {{ $count2 }}
                </h1>
                <h1 class="font-[900] text-md md:text-2xl mt-2"><a href="/Wiki/Admin/tags">Passager</a></h1>
            </div>

        </div>
    </div>

</section>

@include('includes.footer')
