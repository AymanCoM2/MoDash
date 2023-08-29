@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <form method="post" action="{{ route('load-data-post') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Load Data Into Sqlite</button>
        </form>
    </div>
    <br>
@endsection
