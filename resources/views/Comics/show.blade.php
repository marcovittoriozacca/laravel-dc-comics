@extends('layouts.mainLayout');

@section('pageTitle', 'Single Comic')

@section('mainContent')
    
<div class="container">
    <figure>
        <img width="300" src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </figure>
    <div>
        <h3>{{$comic->title}}</h3>
        <p>{{$comic->description}}</p>
        <h3>${{$comic->price}}</h3>
        <h4>{{$comic->series}}</4>
        <p>{{$comic->type}}</p>
    </div>


        <a href="{{route('comics.edit', $comic->id)}}"
            class="btn btn-warning px-4">
            Clicca per modificare il fumetto
        </a>

        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger px-4">
                Clicca per eliminare il fumetto
            </button>
        </form>
</div>

@endsection