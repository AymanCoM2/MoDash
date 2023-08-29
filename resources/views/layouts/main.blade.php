<!DOCTYPE html>
<html lang="en">

@include('main-components.head-tag')

<body>
    @include('main-components.top-nav')
    @include('main-components.offCanvas-menu')
    @yield('content')
    @include('main-components.bottom-js')
</body>

</html>
