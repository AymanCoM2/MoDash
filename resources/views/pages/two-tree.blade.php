@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <!-- Tab navs -->
                    <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        @foreach ($areas as $area)
                            <a class="nav-link" data-bs-toggle="pill" href="#{{ $area }}" role="tab"
                                aria-selected="false">{{ $area }}</a>
                        @endforeach
                    </div>
                    <!-- Tab navs -->
                </div>

                <div class="col-md-9">
                    <!-- Tab content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        @foreach ($areas as $area)
                            <div class="tab-pane fade" id="{{ $area }}" role="tabpanel"
                                aria-labelledby="v-pills-link1-tab">
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

                                {{-- row for admins With COlor and Big Card  --}}
                                <h3>Admins : </h3>
                                <hr>
                                <div class="row">
                                    @foreach ($admins as $admin)
                                        <div class="col-6 mx-auto">
                                            <div class="card">
                                                <div class="card-body border border-1">
                                                    Admin Name : {{ $admin->userCode }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>

                                {{-- row for Managers with Colors and Smaller Card  --}}
                                <h3>Managers : </h3>
                                <hr>
                                <div class="row">
                                    @foreach ($managers as $manager)
                                        <div class="col-4 mx-auto">
                                            <div class="card">
                                                <div class="card-body border border-1">
                                                    Manager Name : {{ $manager->userCode }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>

                                {{-- row for Sales  with Colors and Smaller Card  --}}
                                <h3>Sales : </h3>
                                <hr>
                                <div class="row">
                                    @foreach ($sales as $sale)
                                        <div class="col-3 mx-auto">
                                            <div class="card">
                                                <div class="card-body border border-1">
                                                    Sale Name : {{ $sale->userCode }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>

                            </div>
                        @endforeach
                    </div>
                    <!-- Tab content -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra-js')
@endsection
