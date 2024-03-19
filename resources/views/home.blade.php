@extends('layouts.mainLayout')

@section('pageTitle', 'Home')

@section('mainContent')
    <h1 class="text-center py-5 bg-dark text-white mb-0">
        Nothing to see here yet...
    </h1>

    <div class="text-center bg-dark pb-5">
        <div class="d-flex justify-content-center">
            <a class="text-white text-uppercase" href="{{route('comics.index')}}">
                <h2 class="mb-0 bg-secondary p-3 rounded">
                    ----->  Comics page!  <-----
                </h2>
            </a>
        </div>
    </div>
@endsection