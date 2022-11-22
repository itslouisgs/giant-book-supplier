@extends('layouts.app')

@section('body')

    <div class="d-md-flex my-5">
        <div class="details-left mx-auto me-md-5">
            <img class="w-100 shadow" src="{{ url('/storage/books/'.$book->image) }}" alt="">
        </div>
        <div class="details-right">
            <h2 class="fw-bold pt-3 pb-4">{{ $book->title }}</h2>
            <p class="fw-bold mb-2">Synopsis</p>
            <p>
                {{ $book->synopsis }}
            </p>
            <ul class="list-group">
                <li class="list-group-item">Author: <span class="text-primary">{{ $book->author }}</span></li>
                <li class="list-group-item">Publisher: <span class="text-primary">{{ $book->publisher->name }}</span></li>
                <li class="list-group-item">Year: <span class="text-primary">{{ $book->year }}</span></li>
            </ul>
        </div>
    </div>

@endsection