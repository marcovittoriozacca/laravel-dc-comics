@extends('layouts.mainLayout')

@section('pageTitle','Comics')

@section('mainContent')
    <div class="my-dark-bg">
        <div class="container">
            {{-- current series label --}}
            <div class="translate-middle-y">
                <span class="h3 text-uppercase my-blue-bg text-white py-2 px-3">current series</span>
            </div>
            <div class="py-2">
                <div class="row row-gap-3">
                    {{-- comic cards --}}
                    @foreach ($comics as $comic)
                    <div class="col-2">
                        <figure class="w-100 my-max-h">
                            <img class="h-100 w-100" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </figure>
                        <div class="text-white">
                            <h5>{{$comic['title']}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- load more button --}}
            <div class="text-center">
                <button type="button" class="btn btn-primary text-white text-uppercase px-5 py-2 rounded-0 fw-bold mt-1 mb-4">load more</button>
            </div>
        </div>
    </div>
    @include('partials.main.services')
@endsection


