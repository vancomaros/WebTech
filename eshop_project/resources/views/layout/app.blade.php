<!doctype html>
<html lang="sk">
    <head>
        @include('layout.partials.head')
    </head>

    <body>
        @include('layout.partials.nav')
        @include('layout.partials.messages')

        <main role="main">
                        @yield('content')
        </main>

        <!-- Bootstrap core JavaScript -->
        @include('layout.partials.footer')
    </body>
</html>
