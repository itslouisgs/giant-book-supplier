@extends('layouts.app')

@section('body')

    <div class="mt-5">
        <h2 class="mt-5 fw-bold">{{ $category->name }}</h2>
        <p>List of {{ $category->name }} books</p>
    </div>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-sm-6 col-lg-3 py-3">
                <div class="card border-0 shadow rounded-18">
                    <div class="bg-secondary rounded-t-18">
                        <div class="mx-auto max-w-1/2">
                            <img src="{{ url('/storage/books/'.$book->image) }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 card-title fw-bold">{{ $book->title }}</h3>
                        <p class="card-subtitle mb-2">by <span class="text-primary">{{ $book->author }}</span></p>
                        <a href="/books/{{ $book->id }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection