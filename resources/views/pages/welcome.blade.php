@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row w-50 m-auto mb-3">
            <input type="text" class="rounded rounded-pill p-2 border border-primary px-4">
        </div>
    </div>
    <div class="container">
        <div class=" mb-2">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">{{ 'userCode' }}</div>
                        <div class="col-sm-2">{{ 'accountType' }}</div>
                        <div class="col-sm-2">{{ 'user_areaCode' }}</div>
                        <div class="col-sm-2">{{ 'areacode' }}</div>
                        <div class="col-sm-2">{{ 'user_auth_level' }}</div>
                        <div class="col-sm-2">{{ 'Action' }}</div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($allMandoobs as $mandoob)
            {{-- @include('main-components.data-row', ['mandoob' => $mandoob]) --}}
            <livewire:Datarow :mandoob="$mandoob">
        @endforeach
    </div>
@endsection
@section('extra-js')
    <script>
        window.addEventListener('mandoob-updated', event => {
            let closeCanvas = document.querySelector('[data-bs-dismiss="offcanvas"]');
            closeCanvas.click();
            // alert('Name updated to');

            Toastify({
                text: "Data Updated",
                close: true,
                duration: 3000,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
            }).showToast();
        })
    </script>
@endsection
