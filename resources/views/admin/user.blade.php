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
    <div class="w-[70vh] md:w-[80vw] h-[100vh]  py-[50px] px-8 overflow-y-scroll overflow-x-none">

        <!-- Page Head -->
        <div>
            <h1 class="text-md md:text-xl lg:text-3xl font-[800] mb-12">ADMIN / Users</h1>
        </div>

        <!-- Page COntent -->
        <div class="mt-8  ">

            <table class="w-full bg-gray-500 py-2 px-2 rounded display" id="example" class="display">
                <thead class="bg-[#000] text-white border-2 border-[#000]">
                    <tr>
                        <td class="py-4 px-2">Id</td>

                        <td class="py-4 px-2">Picture</td>
                        <td class="py-4 px-2">firstName</td>
                        <td class="py-4 px-2">role</td>
                        <td class="py-4 px-2">Email</td>
                        <td class="py-4 px-2">numero telephone</td>
                        <td class="py-4 px-2">date de creation</td>
                        <td class="py-4 px-2">Actions</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($profiles as $profile)
                        <tr class='border-2 border-[#000]'>
                            <td class='py-2 px-2 border-2 border-[#000]'>#{{ $profile->id }}
                            </td>
                            <td class='py-2 px-2'>
                                <div class='hw-[100%] rounded relative flex justify-center'><img width='10%'
                                        class='w-[80px]'><img class="rounded-circle"
                                        src="{{ asset('storage/' . $profile->image) }}" alt="image">
                                </div>
                            </td>

                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $profile->name }}
                            </td>
                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $profile->role }}</td>
                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $profile->email }}</td>
                            <td class='py-2 px-2 border-2 border-[#000]'>0{{ $profile->numero }}</td>
                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $profile->created_at }}</td>
                            <td class='py-2 px-2 border-2 border-[#000]'>
                                <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9">
                                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                            class='bg-red-500 text-white rounded px-4 py-2 border-2 border-red-500 hover:bg-red-500/70'
                                            style='transition-duration: 0.5s;'>Supprimer</button>
                                    </form>
                                    <form action="{{ route('profiles.edit', $profile->id) }}">
                                        @csrf
                                        <button
                                            class='bg-blue-500 text-white rounded px-4 py-2 border-2 border-blue-500 hover:bg-bleu-500/70'
                                            style='transition-duration: 0.5s;'>Modifier</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

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
