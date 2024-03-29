<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
    <title>@yield('pageTitle')</title>
</head>
<body>
    {{-- header --}}
    <header>
        @include('partials.header.bluebanner')
        {{-- navbar not finished yet --}}
        @include('partials.header.navBar')
    </header>

    {{-- main --}}
    <main>
        {{-- jumbotron --}}
        <div class="jumbotron"></div>
        @yield('mainContent')
    </main>

    {{-- footer --}}
    <footer>
        @include('partials.footer.linkFooter')
        @include('partials.footer.socialFooter')
    </footer>

</body>
</html>