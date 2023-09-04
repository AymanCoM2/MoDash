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
                                        <div class="col-4 mx-auto">
                                            <div class="card shadow border border-1 rounded  bg-dark bg-gradient text-white">
                                                @php
                                                    $baseUrl = 'http://localhost:5050/oneHuman/';
                                                    $completeUrl = $baseUrl . $admin->userCode;
                                                    $response = Http::get($completeUrl);
                                                    $responseBody = $response->body();
                                                    $responseArray = json_decode($responseBody);
                                                @endphp
                                                <div class="card-body ">
                                                    Admin Code : {{ $admin->userCode }}
                                                    <hr class="hr" />
                                                    Admin Name : {{ $responseArray[0]->Username }}
                                                    <hr class="hr" />
                                                    Admin Area Code :{{ $admin->user_areaCode }}
                                                </div>
                                            </div>
                                            <div class="container text-center">
                                                <div class="mx-auto">
                                                    <div class="vr mx-auto" style="width:2px ;height:20px"></div>
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
                                        <div class="col-3 mx-auto">
                                            <div class="card shadow border border-1 rounded  bg-warning bg-gradient text-white">
                                                @php
                                                    $baseUrl = 'http://localhost:5050/oneHuman/';
                                                    $completeUrl = $baseUrl . $manager->userCode;
                                                    $response = Http::get($completeUrl);
                                                    $responseBody = $response->body();
                                                    $responseArray = json_decode($responseBody);
                                                @endphp
                                                <div class="card-body ">
                                                    Manager Code : {{ $manager->userCode }}
                                                    <hr class="hr" />
                                                    Manager Name : {{ $responseArray[0]->Username }}
                                                    <hr class="hr" />
                                                    Manager Area Code :{{ $manager->user_areaCode }}
                                                </div>

                                            </div>
                                            <div class="container text-center">
                                                <div class="mx-auto">
                                                    <div class="vr mx-auto" style="width:2px ;height:20px"></div>
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
                                        <div class="col-2 mx-auto">
                                            <div class="card shadow border border-1 rounded  bg-primary bg-gradient text-white">
                                                @php
                                                    $baseUrl = 'http://localhost:5050/oneHuman/';
                                                    $completeUrl = $baseUrl . $sale->userCode;
                                                    $response = Http::get($completeUrl);
                                                    $responseBody = $response->body();
                                                    $responseArray = json_decode($responseBody);
                                                @endphp
                                                <div class="card-body ">
                                                    Sale Code : {{ $sale->userCode }}
                                                    <hr class="hr" />
                                                    Sale Name : {{ $responseArray[0]->Username }}
                                                    <hr class="hr" />
                                                    Sale Area Code :{{ $sale->user_areaCode }}
                                                </div>
                                            </div>
                                            <div class="container text-center">
                                                <div class="mx-auto">
                                                    <div class="vr mx-auto" style="width:2px ;height:20px"></div>
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
