@include('includes.head')

{{-- <body class="bg-cover bg-center" style="background-image: url('<?php echo UrlRoot; ?>/public/uploads/hero-bg.jpg');"> --}}


<!-- MAIN -->
<section class="flex items-center relative">

    <!-- Aside Bar -->
    @include('includes.dashboard')
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
                        <td class="py-4 px-2">Image</td>
                        <td class="py-4 px-2">Name</td>
                        <td class="py-4 px-2">Model</td>
                        <td class="py-4 px-2">Nombre de place</td>
                        <td class="py-4 px-2">Description</td>
                        <td class="py-4 px-2">Plaque</td>
                        <td class="py-4 px-2">Chauffeur</td>
                        <td class="py-4 px-2">Actions</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($chauffeurs as $chauffeur)
                        <tr class='border-2 border-[#000]'>
                            <td class='py-2 px-2 border-2 border-[#000]'>#{{ $chauffeur->id }}
                            </td>
                            <td class='py-2 px-2'>
                                <div class='hw-[100%] rounded relative flex justify-center'><img width='10%'
                                        class='w-[80px]'><img class="rounded-circle"
                                        src="{{ asset('storage/' . $chauffeur->image) }}" alt="image">
                                </div>
                            </td>

                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $chauffeur->name }}
                            </td>
                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $chauffeur->model }}</td>
                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $chauffeur->type }}</td>
                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $chauffeur->body }}</td>
                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $chauffeur->plaque }}</td>
                            <td class='py-2 px-2 border-2 border-[#000]'>{{ $chauffeur->profile_id }}</td>

                            <td class='py-2 px-2 border-2 border-[#000]'>
                                <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9">
                                    <form action="{{ route('chauffeurs.destroy', $chauffeur->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                            class='bg-red-500 text-white rounded px-4 py-2 border-2 border-red-500 hover:bg-red-500/70'
                                            style='transition-duration: 0.5s;'>Supprimer</button>
                                    </form>
                                    <form action="{{ route('chauffeurs.edit', $chauffeur->id) }}">
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
@include('includes.footer')

