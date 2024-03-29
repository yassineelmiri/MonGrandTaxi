<x-master title="Se connecter">

    <main class="form-signin w-50  my-5 py-5 m-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 py-5 fw-normal">sign in</h1>
            @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
            <div class="form-floating my-2">
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
                {{-- <label>Email address</label> --}}
            </div>
            <div class="form-floating my-2">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <label>Password</label>
            </div>

            <button class="btn btn-style w-100 py-2" type="submit">Sign in</button>
            <p>Mot de passe oublié ?</p>
        </form>
        <p><a href="{{ route('profiles.create') }}">Créer nouveau compte</a></p>

        <p class="mt-5 my-5 mb-3 text-body-secondary">&copy; 2024–2025</p>

    </main>


</x-master>
