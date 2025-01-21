<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YahooBaba - @yield('title', 'website')</title>

    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
    @stack('style')
</head>

<body>
    <header>
        <h1>YahooBaba</h1>
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/post">Post</a>
    </nav>
    <main>

        @hasSection('content')
            @yield('content')
        @else
        <section>
            <h2>No Content Found</h2>
        </section>
        @endif


        <aside>
            @section('sidebar')
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
            </ul>
            @show()
        </aside>

    </main>
    <footer>
        yahoobaba@copyright 2023
    </footer>

    @stack('scripts')

</body>

</html>
