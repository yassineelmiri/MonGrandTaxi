<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAXI | {{ $title }}</title>
    <link rel="stylesheet" href="/style.css">

    <link href="//fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            @include('partials.nav')
        </div>
    </header>
    <main>
        <div >
            <div class="row my-2">
                @include('partials.flashbag')
            </div>
            {{ $slot }}
        </div>
    </main>
    @include('partials.footer')
</body>

</html>
