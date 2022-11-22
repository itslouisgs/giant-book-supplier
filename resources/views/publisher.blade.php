@extends('layouts.app')

@section('body')

    <div class="my-5">
        <h2 class="mt-5 fw-bold">Publisher</h2>
        <p>Find any publisher from all around the globe!</p>
    </div>

    <div>
        @foreach ($publishers as $publisher)
            <div class="bg-white p-5 rounded-36 shadow mb-5">
            {{-- <div class="py-3 my-5"> --}}
                <div class="d-flex">
                    <div class="w-25 me-5">
                        <img class="w-100" src="{{ url('/storage/publishers/'.$publisher->image) }}" alt="">
                    </div>
                    <div class="w-75">
                        <h3 class="fw-bold pb-2">{{ $publisher->name }}</h3>
                        <ul class="list-none ps-0 mb-0">
                            <li><span class="fw-bold">Address: </span>{{ $publisher->address }}</li>
                            <li><span class="fw-bold">Phone: </span>{{ $publisher->phone }}</li>
                            <li><span class="fw-bold">Email: </span>{{ $publisher->email }}</li>
                        </ul>
                    </div>
                </div>

                <hr class="my-4">

                <div class="pt-3">
                    <h4 class="h4 fw-bold">Published books</h4>
                    <div class="row">
                        @foreach ($publisher->book as $book)
                            <div class="col-sm-6 col-lg-3 py-3">
                                <div class="card border-0 rounded-18 shadow-sm">
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
                </div>
            </div>
        @endforeach
    </div>

@endsection