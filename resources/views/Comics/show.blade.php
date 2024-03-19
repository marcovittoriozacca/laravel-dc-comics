@extends('layouts.mainLayout')

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
        <h4>{{$comic->sale_date}}</4>
        <p>{{$comic->type}}</p>
    </div>


    <a href="{{route('comics.edit', $comic->id)}}"
        class="btn btn-warning px-4">
        Clicca per modificare il fumetto
    </a>



    <!-- Modale conferma eliminazione fumetto -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteComicModal">
    Elimina Fumetto
    </button>
  
    <div class="modal fade" id="deleteComicModal" tabindex="-1" aria-labelledby="deleteComicModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteComicModalLabel">Elimina Fumetto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="text-danger">
                        Sei sicuro di voler eliminare questo fumetto? Non potrai recuperarlo in alcun modo.
                    </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">
                            Elimina
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</div>

@endsection