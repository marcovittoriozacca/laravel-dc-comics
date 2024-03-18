@extends('layouts.mainLayout')

@section('pageTitle', 'Add Comic')

@section('mainContent')
    
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                />
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input
                    type="text"
                    class="form-control"
                    name="thumb"
                    id="thumb"
                    placeholder="link here..."
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
                />
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input
                    type="text"
                    class="form-control"
                    name="series"
                    id="series"
                />
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input
                    type="text"
                    class="form-control"
                    name="sale_date"
                    id="sale_date"
                />
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input
                    type="text"
                    class="form-control"
                    name="type"
                    id="type"
                />
            </div>

            <button type="submit" class="btn btn-primary text-white mb-3">
                Add Comic
            </button>
        </form>
        

    </div>


@endsection