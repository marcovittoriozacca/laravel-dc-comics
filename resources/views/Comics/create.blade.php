@extends('layouts.mainLayout')

@section('pageTitle', 'Add Comic')

@section('mainContent')
    
    <div class="bg-dark text-white shadow-lg mb-4">
        <h1 class="text-center py-2">Add Comic</h1>
    </div>
    <form action="{{route('comics.store')}}" method="POST">
        <div class="container">
            @csrf

            <div class="row">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        class="form-control @error ('title') is-invalid @enderror"
                        name="title"
                        id="title"
                        required
                        value="{{old("title")}}">
                    
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error ('description') is-invalid @enderror" name="description" id="description" rows="3" required>{{old("description")}}</textarea>
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
                        required
                        value="{{old("thumb")}}"
                        
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
                        required
                        value="{{old("price")}}"
                        
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
                        required
                        value="{{old("series")}}"
                        
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
                        required
                        value="{{old("sale_date")}}"
                        
                    />
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input
                        type="text"
                        class="form-control @error ('type') is-invalid @enderror"
                        name="type"
                        id="type"
                        required
                        value="{{old("type")}}"
                    />
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary text-white mb-4">
                Add Comic
            </button>
        </div>
    </form>


@endsection