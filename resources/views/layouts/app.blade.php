<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('main-components.head-tag')

<body>
    <div id="app">
        @include('main-components.top-nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('main-components.bottom-js')
</body>

</html>
