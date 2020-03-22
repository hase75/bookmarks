@extends('layouts.app')
@section('addCss')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($books AS $book)
                <div class="col-4 pt-5">
                    <a href="{{ route('user.books.show', ['book' => $book->id]) }}">
                        <img src="{{ Storage::disk('local')->url($book->image) }}" width="100%" height="300px"/>
                    </a>
                    <div class="text-center">{{ $book->title }}</div>
                    <div class="text-right">{{ $book->price }}円</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('addJs')
@endsection