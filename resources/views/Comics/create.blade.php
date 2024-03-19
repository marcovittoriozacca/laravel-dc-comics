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
                        class="form-control"
                        name="title"
                        id="title"
                        required
                    />
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                </div>
    
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input
                        type="text"
                        class="form-control"
                        name="thumb"
                        id="thumb"
                        placeholder="link here..."
                        required
                    />
                </div>
    
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input
                        type="number"
                        class="form-control"
                        name="price"
                        id="price"
                        min="0"
                        step="any"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input
                        type="text"
                        class="form-control"
                        name="series"
                        id="series"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input
                        type="date"
                        class="form-control"
                        name="sale_date"
                        id="sale_date"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input
                        type="text"
                        class="form-control"
                        name="type"
                        id="type"
                        required
                    />
                </div>
            </div>
            <button type="submit" class="btn btn-primary text-white mb-4">
                Add Comic
            </button>
        </div>
    </form>


@endsection