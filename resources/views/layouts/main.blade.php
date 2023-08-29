<!DOCTYPE html>
<html lang="en">

@include('main-components.head-tag')

<body>
    @include('main-components.top-nav')
    {{-- @include('main-components.offCanvas-menu') --}}
    <livewire:Bottomsheet>
        {{-- TODO >> Put Live Wire Component Here  --}}
        <div class="py-4">
            @yield('content')
        </div>
        @include('main-components.bottom-js')
        @yield('extra-js')
</body>

</html>
