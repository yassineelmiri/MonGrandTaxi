<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

    <title>Admin</title>


</head>

{{-- <body class="bg-cover bg-center" style="background-image: url('<?php echo UrlRoot; ?>/public/uploads/hero-bg.jpg');"> --}}


    <!-- MAIN -->
    <section class="flex items-center relative">

        <!-- Aside Bar -->
        <aside class="h-[100vh] min-w-[28vw] md:min-w-[20vw] md:w-[20vw] bg-[#000]">
            <ul class="flex flex-col my-[50px] mx-8 gap-y-4">
                <li class="mb-8">
                    <a href="/Wiki">
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
        <!-- Dashboard -->
        <div class="w-[70vh] md:w-[80vw] h-[100vh]  py-[50px] px-8">

            <!-- Page Head -->
            <div>
                <h1 class="text-md md:text-xl lg:text-3xl font-[800] mb-8">ADMIN / Dashboard</h1>
                <div class="w-full bg-[#4C4B96ff] border-2 border-blue-900 rounded py-8 px-4">
                    <h1 class="text-md md:text-xl lg:text-xl font-[500]">Bonjour Mr : {{auth()->user()->name}} <u class="px-4">
                        </u></h1>
                </div>
            </div>
            <!-- Page COntent -->
            <!-- <h1 class="mt-8 font-[800] text-md md:text-xl lg:text-2xl mb-2" >Wiki Statistic </h1> -->
            <div class="mt-8  flex flex-wrap justify-between gap-3">

                <div class="w-[20%] bg-[#4A5EA3ff] rounded-full p-8 border-2 border-blue-800 text-center">
                    <h1 class="font-[900] text-md md:text-2xl">
                    {{$count}}Dhs
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
                        {{ $count2}}
                    </h1>
                    <h1 class="font-[900] text-md md:text-2xl mt-2"><a href="/Wiki/Admin/tags">Passager</a></h1>
                </div>

            </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({});
        });
    </script>

</body>

</html>
