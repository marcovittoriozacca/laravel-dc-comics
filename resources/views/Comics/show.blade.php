@extends('layouts.mainLayout')

@section('pageTitle', 'Single Comic')

@section('mainContent')
    
<div class="my-blue-bg position-relative py-5 custom-margin-bottom">
    <div class="position-absolute custom-top-value start-0 end-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-2">
                    <figure class="position-relative translate-middle-y  border border-2 border-white">
                        <img class="w-100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        <span class="position-absolute start-0 text-white comic-label">{{$comic->type}}</span>
                        <a class="position-absolute text-center bottom-0 start-0 end-0 comic-label text-uppercase" href="{{route('comics.index')}}">view gallery</a>
                    </figure>
                </div>
                <div class="col-8"></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        {{-- left info content --}}
        <div class="col-7">
            <h2 class="mb-3">{{$comic->title}}</h2>
            {{-- price and viability --}}
            <div class="row">
                <div class="col-9 pe-0">
                    <div class="d-flex justify-content-between p-3 price-label border-black border-bottom">
                        <p class="mb-0">U.S. Price: ${{$comic->price}}</p>
                        <span class="text-uppercase">Available</span>
                    </div>
                </div>
                <div class="col-3 ps-0">
                    <div class="p-3 price-label border-black border-bottom border-start">
                        <p class="text-capitalize mb-0">check availabilty</p>
                    </div>
                </div>
            </div>
            {{-- description --}}
            <p class="mt-3 text-secondary">{{$comic->description}}</p>
        </div>

        <div class="col-3">
            <h4 class="text-black opacity-75 text-uppercase text-end">advertisement</h4>
            <figure>
                <img class="w-100" src="{{Vite::asset('resources/images/adv.jpg')}}" alt="advertisement">
            </figure>
        </div>
    </div>
</div> 

{{-- button with modals --}}
<div class="text-center py-5">
    <a href="{{route('comics.edit', $comic->id)}}"
        class="btn btn-warning px-4">
        Clicca per modificare il fumetto
    </a>
    {{-- Modale conferma eliminazione fumetto --}}
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
        {{-- <h4>{{$comic->series}}</4> --}}
        {{-- <h4>{{$comic->sale_date}}</4> --}}
    
  


@endsection