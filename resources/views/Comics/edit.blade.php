@extends('layouts.mainLayout')

@section('pageTitle', 'Edit Comic')

@section('mainContent')
    
    <div class="bg-dark text-white shadow-lg mb-4">
        <h1 class="text-center py-2">Edit Comic - {{$comic->title}}</h1>
    </div>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            
            <div class="row">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        class="form-control @error ('title') is-invalid @enderror"
                        name="title"
                        id="title"
                        value="{{old($comic->title)?? $comic->title }}"
                    />
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error ('description') is-invalid @enderror" name="description" id="description" rows="5" >{!! old($comic->description) ?? $comic->description !!}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input
                        type="text"
                        class="form-control @error ('thumb') is-invalid @enderror"
                        name="thumb"
                        id="thumb"
                        placeholder="link here..."
                        value="{{old($comic->thumb)?? $comic->thumb }}"
                    />
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input
                        type="number"
                        class="form-control @error ('price') is-invalid @enderror"
                        name="price"
                        id="price"
                        min="0"
                        step="any"
                        value="{{old($comic->price)?? $comic->price }}"
                    />
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input
                        type="text"
                        class="form-control @error ('series') is-invalid @enderror"
                        name="series"
                        id="series"
                        value="{{old($comic->series)?? $comic->series }}"                        
                    />
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input
                        type="date"
                        class="form-control @error ('sale_date') is-invalid @enderror"
                        name="sale_date"
                        id="sale_date"
                        value="{{old($comic->sale_date)?? $comic->sale_date }}"                        
                    />
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input
                        type="text"
                        class="form-control @error ('type') is-invalid  @enderror"
                        name="type"
                        id="type"
                        value="{{old($comic->type)?? $comic->type }}"  
                    />
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary text-white mb-4">
                Update Comic
            </button>
        </div>
    </form>
@endsection