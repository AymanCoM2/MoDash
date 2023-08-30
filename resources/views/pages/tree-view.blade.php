@extends('layouts.main')
@section('content')
    <div class="container">
        <ul id="myUL">
            @foreach ($areas as $area)
                <li><span class="caret display-6">{{ $area }}</span>
                    @php
                        $admins = \App\Models\Mandoob::where('areacode', $area)
                            ->where('accountType', 'Admin')
                            ->get();
                        
                        $managers = \App\Models\Mandoob::where('areacode', $area)
                            ->where('accountType', 'Manger')
                            ->get();
                        
                        $sales = \App\Models\Mandoob::where('areacode', $area)
                            ->where('accountType', 'Sales')
                            ->get();
                    @endphp
                    <ul class="nested">
                        <li><span class="caret">Admins ( {{ $admins->count() }} )</span>
                            <ul class="nested">
                                @foreach ($admins as $admin)
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-2">{{ $admin->userCode }}</div>
                                                    <div class="col-sm-2">{{ $admin->accountType }}</div>
                                                    <div class="col-sm-2">{{ $admin->user_areaCode }}</div>
                                                    <div class="col-sm-2">{{ $admin->areacode }}</div>
                                                    <div class="col-sm-2">{{ $admin->user_auth_level }}</div>
                                                    <div class="col-sm-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li><span class="caret">Managers ( {{ $managers->count() }} )</span>
                            <ul class="nested">
                                @foreach ($managers as $manager)
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-2">{{ $manager->userCode }}</div>
                                                    <div class="col-sm-2">{{ $manager->accountType }}</div>
                                                    <div class="col-sm-2">{{ $manager->user_areaCode }}</div>
                                                    <div class="col-sm-2">{{ $manager->areacode }}</div>
                                                    <div class="col-sm-2">{{ $manager->user_auth_level }}</div>
                                                    <div class="col-sm-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li><span class="caret">Sales ( {{ $sales->count() }} ) </span>
                            <ul class="nested">
                                @foreach ($sales as $sale)
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-2">{{ $sale->userCode }}</div>
                                                    <div class="col-sm-2">{{ $sale->accountType }}</div>
                                                    <div class="col-sm-2">{{ $sale->user_areaCode }}</div>
                                                    <div class="col-sm-2">{{ $sale->areacode }}</div>
                                                    <div class="col-sm-2">{{ $sale->user_auth_level }}</div>
                                                    <div class="col-sm-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
@section('extra-js')
    <script>
        var toggler = document.getElementsByClassName("caret");
        var i;

        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }
    </script>
@endsection



{{-- <a class="btn btn-warning " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
    aria-controls="offcanvasExample">
    Manage
</a> --}}
